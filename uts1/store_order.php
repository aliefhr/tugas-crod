<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_pembeli = $_POST['nama_pembeli'];
    $film = $_POST['film'];
    $jumlah_tiket = $_POST['jumlah_tiket'];
    $total_harga = $_POST['total_harga'];
    $hari = $_POST['hari'];

    // Menyimpan informasi order ke database
    $sql = "INSERT INTO orders (nama_pembeli, film, jumlah_tiket, total_harga, hari) VALUES ('$nama_pembeli', '$film', '$jumlah_tiket', '$total_harga', '$hari')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index_order.php?status=Order berhasil ditambahkan");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>