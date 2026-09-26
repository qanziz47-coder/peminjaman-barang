<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_peminjaman';

$conn = new mysqli($host,$username,$password,$database);

if($conn->connect_error) {
    die('koneksi database Gagal: '.$conn-connect_error);
}
$conn->set_charset('utf8');
