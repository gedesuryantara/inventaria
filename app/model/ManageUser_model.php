<?php
class ManageUser_model {
    private $dbh; //data base handler
    private $stmt;

    public function __construct() {
        $this->dsn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        
    }
    
    public function isUserExists($username) {
        $stmt = $this->dsn->prepare("SELECT COUNT(*) FROM `user` WHERE `username` = ?");
        $stmt->execute([$username]);
        $count = $stmt->fetchColumn();
        return $count > 0;
    }

    public function addUser($username, $password) {
        if ($this->isUserExists($username)) {
            echo "Username Is allrdy in use.";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->dsn->prepare("INSERT INTO `user` (`username`, `password`) VALUES (?, ?)");
        return $stmt->execute([$username, $password]);
    }

    public function getAllUser() {
        $this->stmt = $this->dsn->prepare('SELECT * FROM user');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}
?>
