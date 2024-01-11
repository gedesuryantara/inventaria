<?php
try {
    // Sambungkan ke database dengan PDO
    $koneksi = new PDO('mysql:host=localhost;dbname=nama_database', 'username', 'password');
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Ambil data rak dari database
    $queryRak = "SELECT * FROM rak";
    $resultRak = $koneksi->query($queryRak);
    $rakData = array();

    while ($row = $resultRak->fetch(PDO::FETCH_ASSOC)) {
        $rakData[] = $row;
    }

    // Ambil data kolom dari database
    $queryKolom = "SELECT * FROM kolom";
    $resultKolom = $koneksi->query($queryKolom);
    $kolomData = array();

    while ($row = $resultKolom->fetch(PDO::FETCH_ASSOC)) {
        $kolomData[] = $row;
    }

    // Tutup koneksi ke database
    $koneksi = null;

    // Kirim data dalam format JSON
    header('Content-Type: application/json');
    echo json_encode(array('rak' => $rakData, 'kolom' => $kolomData));
} catch (PDOException $e) {
    echo "Koneksi database gagal: " . $e->getMessage();
}
?>
