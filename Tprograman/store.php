<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $nomor_hp = $_POST['nomor_hp'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $jenjang = $_POST['jenjang'];

    $sql = "INSERT INTO mahasiswa (npm, nama, nomor_hp, email, jurusan, jenjang) VALUES ('$npm', '$nama', '$nomor_hp', '$email', '$jurusan', '$jenjang')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>