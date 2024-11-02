<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $film = $_POST['film'];
    $jumlah_tiket = $_POST['jumlah_tiket'];
    $total_harga = $_POST['total_harga'];

    $sql = "UPDATE order_tiket SET nama_pembeli='$nama_pembeli', film='$film', jumlah_tiket='$jumlah_tiket', total_harga='$total_harga' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: index_order.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>