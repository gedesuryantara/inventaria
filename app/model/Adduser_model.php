<?php
class Adduser_model {
    private $db;

    public function __construct() {
        $this->db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    }
    
    public function isUserExists($username) {
        $stmt = $this->db->prepare("SELECT COUNT(*) FROM `user` WHERE `username` = ?");
        $stmt->execute([$username]);
        $count = $stmt->fetchColumn();
        return $count > 0;
    }

    public function addUser($username, $password) {
        if ($this->isUserExists($username)) {
            echo "Username Is alrdy in use.";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->db->prepare("INSERT INTO `user` (`username`, `password`) VALUES (?, ?)");
        return $stmt->execute([$username, $password]);
    }
}
?>
