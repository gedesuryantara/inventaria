<?php 

class Database { 
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh; //Data Base Handler (DBH)
    private $stmt; //Statement

    public function __construct()
    {
        // Data Source Name (dsn)
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

        $option = [
            PDO::ATTR_PERSISTENT => true, // untuk membuat database kita terjaga terus atau untuk optimasi
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh= new PDO($dsn, $this->user, $this->password, $option);
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function query($query) // function untuk menjalankan query di buat dengan generik(Umum), supaya query bisa digunakan untuk apapun (SELECT, INSERT, UPDATE, DELETE)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null) //binding data (parameternya 'SELECT/INSERT/UPDATE/DELETE')
    {
        if( is_null($type) ) {
            switch(true) {
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute() 
    {
        $this->stmt->execute(); // execute ini milik PDO sedangkan function diatas adalah function baru
    }

    public function resultSet() // data tampilannya banyak
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function singel() //data tampilnya singel(satu)
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount() //fungsinya untuk menghitung ada berapa baris yang baru berubah dalam tabel database
    {
        return $this->stmt->rowCount(); //rowCount ini milik PDO sedangkan function diatas adalah function baru
    }



}