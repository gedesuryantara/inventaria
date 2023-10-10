<?php 
 
class Regist_model {
    private $tabel = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function cekUser($userName)
    {
        $this->db->query('SELECT * FROM ' . $this->tabel . ' WHERE username =:username');
        $this->db->bind('username', $userName);
        return $this->db->singel();
    }

    public function cekUserTrue($userName)
    {
        $this->db->query('SELECT * FROM ' . $this->tabel . ' WHERE username =:username');
        $this->db->bind('username', $userName);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function inputUser($dataUser)
    {
        $query = "INSERT INTO user 
                    VALUES ( 
                        '', :username, :password, :status
                    )";

        $this->db->query($query);
        $this->db->bind('username', $dataUser['username']);
        $this->db->bind('password', $dataUser['password']);
        $this->db->bind('status', $dataUser['status']);

        $this->db->execute();
        return $this->db->rowCount();
    }

}