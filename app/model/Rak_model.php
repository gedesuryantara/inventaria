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
    
    public function queryselectbertingkat(){
        $this->db->query("SELECT * FROM " . $this->tabel);
        $result = $this->db->resultSet();
        return $result;

        while ($row = $result) {
            // Lakukan sesuatu dengan data, misalnya, tampilkan di halaman web
            $rakId = $row['id_rak'];
            $rakNama = $row['nama_rak'];
            $jumlahKolom = $row['jumlah_kolom'];
        
            $data[] = array('id_rak' => $rakId, 'rak_nama' => $rakNama, 'jumlah_kolom' => $jumlahKolom);
            // Anda bisa menyesuaikan sesuai dengan struktur tabel Anda
        }
        echo json_encode(array('data'=> $data));
    }


}

?>