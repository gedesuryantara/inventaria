<?php 
session_start();
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pass = $_POST["pass"];

    $loginq = "SELECT * FROM user WHERE username = ?";
    $bindparam = $conn -> prepare($loginq);
    $bindparam -> bind_param("s", $username);
    $bindparam -> execute();
    $loginresult = $bindparam -> get_result();

    if (empty($pass) ||  empty($username)){
        $data['message'] = "Login gagal. Silahkan isi kolom email dan password.";
    }
    elseif ($loginresult->num_rows > 0) {
        $user = $loginresult->fetch_assoc();
        $hashpass = $user["password"];

        if(password_verify($pass, $hashpass)){
            $_SESSION["username"] = $user["username"];
            $data['message'] = "Login Berhasil, Selamat datang " . $_SESSION['username'];
        }
        else{
            $data['message'] = "Login gagal. Periksa kembali email dan password Anda.";
        }
    }
    else {
        $data['message'] = "Login gagal, Pengguna tidak ditemukan";
    }
}
$json = json_encode($data, JSON_PRETTY_PRINT);

echo $json;

?>