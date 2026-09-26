<?php
require_once '../../config/session.php';
require_once '../../config/database.php';

if($_SESSION['level'] != "Administrator"){
    header('Location: ../../auth/login.php');
    exit();
}

if($_SERVER['REQUEST_METHOD'] !='POST'){
        header('Location: ../../auth/login.php');
    exit();
}

$nama_lengkap = trim($_POST['nama_lengkap']);
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$level= trim($_POST['level']);
$status= trim($_POST['status']);

if(empty($nama_lengkap) || empty($username) || empty($password) || empty($level) || empty($status)){
    header('location: tambah.php');
    exit();
}

$stmt = $onn->prepare('select id_user from users where username = ?');
$stmt->bind_param ('s', $username);
$stmt->execute();
$result = $stmt->get_result();

if($result-> num_rows > 0){
    echo "<script>alert('username sudah di gunakan...') window.location = 'tambah.php'; </script>";
    exit();
}
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("insert INTO users (nama_lengkap, username, password, level, status, create_at, updated_at) values (?,?,?,?,?, now(), now() )");

$stmt->bind_param('sssss', $nama_lengkap, $password, $level, $status);
if($stmt->execute()){
    header("Location: index.php?pesan=sukses");
}else{
    echo "<script>alert('Data gagal disimpan'); window.location = 'tambah.php; </script>";
    exit();
}
$stmt->close();
$conn->close();
