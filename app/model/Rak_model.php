<?php

class Rak_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambahRak($data){
        $query = "INSERT INTO rak VALUES ('',:nama_rak,:jumlah_kolom) ";

        $this->db->query($query);
        $this->db->bind('nama_rak',$data['namarak']);
        $this->db->bind('jumlah_kolom',$data['jumlahkolom']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ambilRak(){
        $query = "SELECT * FROM rak";
        $this->db->query($query);
        return $this->db->resultSet();
    }
}