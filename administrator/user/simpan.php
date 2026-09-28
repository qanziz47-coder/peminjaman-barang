<?php
require_once '../../config/session.php';
require_once '../../config/database.php';

// Cek level user
if ($_SESSION['level'] != "Administrator") {
    header('Location: ../../auth/login.php');
    exit();
}

// Cek method POST
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: ../../auth/login.php');
    exit();
}

// Ambil data dari form
$nama_lengkap = trim($_POST['nama_lengkap']);
$username     = trim($_POST['username']);
$password     = trim($_POST['password']);
$level        = trim($_POST['level']);
$status       = trim($_POST['status']);

// Validasi data kosong
if (empty($nama_lengkap) || empty($username) || empty($password) || empty($level) || empty($status)) {
    header('location: tambah.php');
    exit();
}

// Cek apakah username sudah dipakai
$stmt = $conn->prepare('SELECT id_user FROM users WHERE username = ?');

if ($stmt === false) {
    die('Prepare SELECT gagal: ' . $conn->error);
}

$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<script>alert('Username sudah digunakan!'); window.location='tambah.php';</script>";
    exit();
}
$stmt->close();

// Hash password
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// Insert data ke database
// PERBAIKAN: created_at (pakai d), bind_param dengan 5 variabel termasuk $username & $passwordHash
$stmt = $conn->prepare("INSERT INTO users (nama_lengkap, username, password, level, status, created_at, updated_at) VALUES (?, ?, ?, ?, ?, NOW(), NOW())");

if ($stmt === false) {
    die('Prepare INSERT gagal: ' . $conn->error);
}

$stmt->bind_param('sssss', $nama_lengkap, $username, $passwordHash, $level, $status);

if ($stmt->execute()) {
    header("Location: index.php?pesan=sukses");
    exit();
} else {
    echo "<script>alert('Data gagal disimpan: " . $stmt->error . "'); window.location='tambah.php';</script>";
    exit();
}

$stmt->close();
$conn->close();
?>