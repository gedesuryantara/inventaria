<?php 

class Barang_model {
    private $tabel = "barang";
    private $db;


    public function __construct()
    {
        $this->db = new Database;    
    }

    public function queryData()
    {

        $this->db->query("SELECT * FROM " . $this->tabel);
        return $this->db->resultSet();

    }

    public function getAllBarang() {

        $this->db->query("SELECT * FROM " . $this->tabel . " INNER JOIN rak ON " . $this->tabel . ".id_rak = rak.id_rak LIMIT 3 OFFSET 0");
        return $this->db->resultSet();

    }

    public function getAllBarangPage($halamanAwal, $batasHalaman)
    {
        $this->db->query("SELECT * FROM " . $this->tabel . " INNER JOIN rak ON " . $this->tabel . ".id_rak = rak.id_rak LIMIT " . $batasHalaman . " OFFSET " . $halamanAwal);
        return $this->db->resultSet();
    }

    public function tambahDataBarang($dataBarang)
    {
        $query = "INSERT INTO barang 
                    VALUES (
                        '', :namaBarang, :keterangan, :stok, :id_rak, :gambar, :kolom
                        )";
        $this->db->query($query);
        $this->db->bind('namaBarang', $dataBarang['namaBarang']);
        $this->db->bind('keterangan', $dataBarang['keterangan']);
        $this->db->bind('stok', $dataBarang['stok']);
        $this->db->bind('id_rak', $dataBarang['idRak']);
        $this->db->bind('gambar', $dataBarang['gambarBarang']);
        $this->db->bind('kolom', $dataBarang['jumlahKolom']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteDataBarang($id)
    {
        $query = "DELETE FROM " . $this->tabel . " WHERE id_barang = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }


}

?>