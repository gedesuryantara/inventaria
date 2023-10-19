<?php
header('Content-Type: application/json');
$con = new mysqli("localhost","root", "", "inventarial");

$query = "SELECT * FROM rak";
$result = $con -> query($query);

// $rowResult = mysqli_fetch_assoc($result);


while ($row = mysqli_fetch_assoc($result)) {
    // Lakukan sesuatu dengan data, misalnya, tampilkan di halaman web
    $rakId = $row['id_rak'];
    $rakNama = $row['nama_rak'];
    $jumlahKolom = $row['jumlah_kolom'];

    $data[] = array('id_rak' => $rakId, 'rak_nama' => $rakNama, 'jumlah_kolom' => $jumlahKolom);
    // Anda bisa menyesuaikan sesuai dengan struktur tabel Anda
}
echo json_encode(array('data'=> $data));
// var_dump($data);

// var_dump($rowResult);




