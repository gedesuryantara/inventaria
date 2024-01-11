<?php
class ManageUser_model {
    private $dsn; //data base handler
    private $stmt;

    public function __construct() {
        $this->dsn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        
    }
    
    public function isUserExists($username) {
        $this->stmt = $this->dsn->prepare("SELECT COUNT(*) FROM `user` WHERE `username` = ?");
        $this->stmt->execute([$username]);
        $count = $this->stmt->fetchColumn();        
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

    public function updateUser($username, $password, $id_user) {
        if ($this->isUserExists($username) && $username !== $this->getUserbyId($id_user)['username']) {
            echo "Username is already in use.";
            return false;
        }
    
        $user = $this->getUserbyId($id_user);
        $oldPass = $user['password'];
    
        if (!empty($password)) {
            $password = password_hash($password, PASSWORD_DEFAULT);
        } else {
            $password = $oldPass; // Keep the old password
        }
    
        $stmt = $this->dsn->prepare("UPDATE user SET username = ?, password = ? WHERE id_user = ?");
        return $stmt->execute([$username, $password, $id_user]);
    }

    public function countallUsername(){
        // Query untuk menghitung jumlah total username
        $this->stmt = $this->dsn->prepare("SELECT * FROM `user`");
        $this->stmt->execute();
        return $this->stmt->rowCount();
    }

    public function getAllUser($awalData, $limitdata) {
        $this->stmt = $this->dsn->prepare("SELECT * FROM `user` LIMIT :awalData, :limitData");
        $this->stmt->bindParam(':awalData', $awalData, PDO::PARAM_INT);
        $this->stmt->bindParam(':limitData', $limitdata, PDO::PARAM_INT);
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function searchUser($getusername) {
        $this->stmt = $this->dsn->prepare("SELECT * FROM `user` WHERE `username` = ? ");
        $this->stmt->execute([$getusername]);
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }



    public function getUserbyId($id_user) {
        $stmt = $this->dsn->prepare("SELECT * FROM user WHERE id_user = ?");
        $stmt->execute([$id_user]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC); // Menggunakan fetch untuk mengambil satu baris
        return $result;
    }    

    public function deleteUser($id_user) {
        $stmt = $this->dsn->prepare("DELETE FROM user WHERE id_user = ?");
        return $stmt->execute([$id_user]);
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>
