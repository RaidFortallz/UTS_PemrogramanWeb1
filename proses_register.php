<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "uts_web";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn -> connect_error) {
    die("Koneksi gagal: " . $conn -> connect_error);
}

$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$password = $_POST['password'];
$konfirmasi_password = $_POST['konfirmasiPassword'];

if (empty($nama_lengkap) || empty($email) || empty($password)) {
    echo "<script>alert('Semua field wajib diisi!');</script>";
    echo "<script>window.location.href = 'register.html';</script>";
    exit;
}


if ($password !== $konfirmasi_password) {
    echo "<script>alert('Password dan Konfirmasi Password tidak sama!');</script>";
    echo "<script>window.location.href = 'register.html';</script>";
    exit;
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn -> prepare("INSERT INTO users (nama_lengkap, email, password) VALUES (?, ?, ?)");
$stmt -> bind_param("sss", $nama_lengkap, $email, $hashed_password);

if ($stmt -> execute()) {
    echo "<script>alert('Register Berhasil');</script>";
    echo "<script>window.location.href = 'login.html';</script>";
} else {
    echo "<script>alert('Terjadi Kesalahan: ". $stmt->error . "');</script>";
    echo "<script>window.location.href = 'register.html';</script>";
}

$stmt -> close();
$conn -> close();

?>