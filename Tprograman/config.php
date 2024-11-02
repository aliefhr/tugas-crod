<?php
$host = 'localhost';
$user = 'root'; // Ganti dengan username MySQL Anda
$password = ''; // Ganti dengan password MySQL Anda jika ada
$database = 'mahasiswa_db';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>