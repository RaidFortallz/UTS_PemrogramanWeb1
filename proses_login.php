<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "uts_web";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$email = trim($_POST['email']);
$password = trim($_POST['password']);

if (empty($email) || empty($password)) {
    echo "<script>alert('Email dan Password harus diisi!');</script>";
    echo "<script>window.location.href = 'login.html';</script>";
    exit;
}

$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();


    if (password_verify($password, $row['password'])) {
        session_start();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
        $_SESSION['email'] = $row['email'];

        echo "<script>alert('Login Berhasil');</script>";
        echo "<script>window.location.href = 'dashboard.php';</script>";
    } else {
        echo "<script>alert('Password Salah!');</script>";
        echo "<script>window.location.href = 'login.html';</script>";
    }
} else {
    echo "<script>alert('Email tidak terdaftar!');</script>";
    echo "<script>window.location.href = 'login.html'</script>";
}

$stmt->close();
$conn->close();

?>
