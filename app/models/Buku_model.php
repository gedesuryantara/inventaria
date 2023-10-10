<?php 

class Buku_model {
    private $tabel = 'buku';
    private $db; 

    public function __construct() 
    {
        $this->db = new Database; // jika class model dalam controler dipanggil maka otomatis instansiasi class database jadi kita bisa menggunakan semua method dalam Class Database
    }

    public function getAllBuku() 
    {
        $this->db->query('SELECT * FROM ' . $this->tabel);
        return $this->db->resultSet(); // menampilkan semua data 
    }

    public function getBukuById($id_buku)
    {
        $this->db->query('SELECT * FROM ' . $this->tabel . ' WHERE id_buku =:id');
        $this->db->bind('id', $id_buku);
        return $this->db->singel();
    }

    public function tambahDataBuku($dataUser)
    {
        $query = "INSERT INTO buku 
                    VALUES (
                        '', :judul, :kategori, :genre, :pengarang
                    )";
        
        $this->db->query($query);
        $this->db->bind('judul', $dataUser['judul']);
        $this->db->bind('kategori', $dataUser['kategori']);
        $this->db->bind('genre', $dataUser['genre']);
        $this->db->bind('pengarang', $dataUser['pengarang']);

        $this->db->execute();
        return $this->db->rowCount();

    }


}