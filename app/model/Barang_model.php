<?php 

class Barang_model {
    private $tabel = 'barang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarang()
    {
        $this->db->query('SELECT * FROM ' . $this->tabel . ' INNER JOIN rak ON ' . $this->tabel . '.id_rak = rak.id_rak LIMIT 3');
        return $this->db->resultSet();
    }

    public function tambahBarang($data)
    {
        $this->db->query('INSERT INTO ' . $this->tabel . ' VALUES ( NULL, :namaBarang, :keterangan, :stok, :id_rak, :gambar, :kolom )' );
        $this->db->bind('namaBarang', $data['nama_barang']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('stok', $data['stok_barang']);
        $this->db->bind('id_rak', $data['rakField']);
        $this->db->bind('gambar', '');
        $this->db->bind('kolom', $data['kolom_barang']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusBarang($id)
    {
        $query = "DELETE FROM " . $this->tabel . " WHERE id_barang = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    

}