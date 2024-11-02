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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="style.css"> <!-- Link ke file CSS -->
</head>
<body>
<h1>Tambah Mahasiswa</h1>
    <form action="store.php" method="POST">
        <label for="npm">NPM:</label>
        <input type="text" name="npm" id="npm" required>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="nomor_hp">Nomor HP:</label>
        <input type="text" name="nomor_hp" id="nomor_hp" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" required>

        <label for="jenjang">Jenjang:</label>
        <input type="text" name="jenjang" id="jenjang" required>

        <input type="submit" value="Simpan">
    </form>
    <a class="button" href="index.php">Kembali ke Daftar Mahasiswa</a>
</body>
</html>