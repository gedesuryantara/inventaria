<?php 

class Barang_model {
    private $tabel = "barang";
    private $db; 


    public function __construct()
    {
        $this->db = new Database;    
    }

    public function queryData()
    {

        $this->db->query("SELECT * FROM " . $this->tabel);
        return $this->db->resultSet();

    }

    public function queryCariData($keyword)
    {
        $this->db->query("SELECT * FROM " . $this->tabel . " INNER JOIN rak ON " . $this->tabel . ".id_rak = rak.id_rak" .
        " WHERE nama_barang LIKE :keyword OR 
                keterangan LIKE :keyword");
        $this->db->bind('keyword', "%$keyword%");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllBarang() {

        $this->db->query("SELECT * FROM " . $this->tabel . " INNER JOIN rak ON " . $this->tabel . ".id_rak = rak.id_rak LIMIT 3 OFFSET 0");
        return $this->db->resultSet();

    }

    public function getAllBarangById($idBarang)
    {
        $this->db->query("SELECT * FROM " . $this->tabel . " INNER JOIN rak ON " . $this->tabel . ".id_rak = rak.id_rak WHERE id_barang =:id");
        $this->db->bind('id', $idBarang);
        return $this->db->singel();
    }

    public function getAllBarangPage($halamanAwal, $batasHalaman)
    {
        $this->db->query("SELECT * FROM " . $this->tabel . " INNER JOIN rak ON " . $this->tabel . ".id_rak = rak.id_rak LIMIT " . $batasHalaman . " OFFSET " . $halamanAwal);
        return $this->db->resultSet();
    }
    
    public function getAllBarangCari($keyword, $halamanAwal, $batasHalaman)
    {
        $this->db->query("SELECT * FROM " . $this->tabel . " INNER JOIN rak ON " . $this->tabel . ".id_rak = rak.id_rak" .
                            " WHERE nama_barang LIKE :keyword OR 
                                    keterangan LIKE :keyword LIMIT " . $batasHalaman . " OFFSET " . $halamanAwal);
        $this->db->bind('keyword', "%$keyword%");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function uploadGambar()
    {
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $errorFile = $_FILES['gambar']['error'];
        $tmpNameFile = $_FILES['gambar']['tmp_name'];

        // cek apakah gambar diupload atau tidak 
        if ( $errorFile === 4 ){
            Flasher::setFlasherMassage('gagal', 'ditambahkan, masukan gambar terlebih dahulu', 'danger');
        } else {

            // cek apakah yang diupload adalah gambar
            $ekstensiGambarValid = ['jpg','png','jpeg'];
            $ekstensiGambar = explode('.', $namaFile);
            $ekstensiGambar = strtolower(end($ekstensiGambar));

            if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
                Flasher::setFlasherMassage('gagal', 'ditambahkan, yang anda input bukan gambar', 'danger');
            }

            // cek ukuran gambar 
            if( $ukuranFile > 100000000 ) {
                Flasher::setFlasherMassage('gagal', 'ditambahkan, file gambar terlalu besar', 'danger');
            }

            // lolos pengechekan, generate nama baru, gambar siap di upload
            $namaFileBaru = uniqid();
            $namaFileBaru .= '.';
            $namaFileBaru .= $ekstensiGambar;
            move_uploaded_file($tmpNameFile, 'img/image_upload/' . $namaFileBaru);

            return $namaFileBaru;
        }

    }

    public function tambahDataBarang($dataBarang)
    {

        $gambar = $this->uploadGambar();

        if($gambar != NULL) {
            $query = "INSERT INTO barang 
                        VALUES (
                            '', :namaBarang, :keterangan, :stok, :id_rak, :gambar, :kolom
                            )";
            $this->db->query($query);
            $this->db->bind('namaBarang', $dataBarang['namaBarang']);
            $this->db->bind('keterangan', $dataBarang['keterangan']);
            $this->db->bind('stok', $dataBarang['stok']);
            $this->db->bind('id_rak', $dataBarang['idRak']);
            $this->db->bind('gambar', $gambar);
            $this->db->bind('kolom', $dataBarang['jumlahKolom']);
    
            $this->db->execute();
            return $this->db->rowCount();
        }

    }

    public function deleteDataBarang($id)
    {
        $query = "DELETE FROM " . $this->tabel . " WHERE id_barang = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editDataBarang($dataBarang)
    {
        $gambarLama = $dataBarang['gambarLama'];

        if( $_FILES['gambar']['error'] == 4 ) {
            $gambar = $gambarLama;
        } else {
            $gambar = $this->uploadGambar();
        }

        $this->db->query(" UPDATE " . $this->tabel . " SET 
                            nama_barang =:namaBarang, 
                            keterangan =:keterangan, 
                            stok =:stok, 
                            id_rak =:id_rak, 
                            gambar =:gambar, 
                            kolom =:kolom
                        WHERE id_barang = :id");

        $this->db->bind('id', $dataBarang['id_barang']);
        $this->db->bind('namaBarang', $dataBarang['nama_barang']);
        $this->db->bind('keterangan', $dataBarang['keterangan']);
        $this->db->bind('stok', $dataBarang['stok']);
        $this->db->bind('id_rak', $dataBarang['id_rak']);
        $this->db->bind('gambar', $gambar);
        $this->db->bind('kolom', $dataBarang['kolom_rak']);
        
        $this->db->execute();
        return $this->db->rowCount();
    }


}

?>