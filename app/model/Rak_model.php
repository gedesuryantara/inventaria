<?php 

class Rak_model {
    private $tabel = 'rak';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function queryRak() 
    {
        $this->db->query("SELECT * FROM " . $this->tabel);
        return $this->db->resultSet();
    }


}

?>