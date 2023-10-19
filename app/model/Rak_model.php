<?php 

class Rak_model {
    private $tabel = 'rak';
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

    public function queryRak() 
    {
        $this->db->query("SELECT * FROM " . $this->tabel);
        return $this->db->resultSet();
    }


}

?>