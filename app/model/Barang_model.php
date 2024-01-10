public function tambahDataBarang($dataBarang)
{
    function uploadGambar()
    {
        $namaFile = $_FILES['gambarBarang']['name'];
        $ukuranFile = $_FILES['gambarBarang']['size'];
        $errorFile = $_FILES['gambarBarang']['error'];
        $tmpNameFile = $_FILES['gambarBarang']['tmp_name'];

        // ... (rest of the uploadGambar function)

        return $namaFileBaru;
    }

    $gambar = uploadGambar();

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
