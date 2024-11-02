<?php
include 'config.php';

$npm = $_GET['npm'];
$result = $conn->query("SELECT * FROM mahasiswa WHERE npm='$npm'");
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nomor_hp = $_POST['nomor_hp'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $jenjang = $_POST['jenjang'];

    $sql = "UPDATE mahasiswa SET nama='$nama', nomor_hp='$nomor_hp', email='$email', jurusan='$jurusan', jenjang='$jenjang' WHERE npm='$npm'";

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
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="style.css"> <!-- Link ke file CSS -->
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <?php
    include 'config.php';

    // Ambil data mahasiswa berdasarkan NPM
    if (isset($_GET['npm'])) {
        $npm = $_GET['npm'];
        $result = $conn->query("SELECT * FROM mahasiswa WHERE npm='$npm'");
        $mahasiswa = $result->fetch_assoc();
    }
    ?>

    <form action="update.php" method="POST">
        <input type="hidden" name="npm" value="<?php echo $mahasiswa['npm']; ?>">
        
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?php echo $mahasiswa['nama']; ?>" required>

        <label for="nomor_hp">Nomor HP:</label>
        <input type="text" name="nomor_hp" id="nomor_hp" value="<?php echo $mahasiswa['nomor_hp']; ?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $mahasiswa['email']; ?>" required>

        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" value="<?php echo $mahasiswa['jurusan']; ?>" required>

        <label for="jenjang">Jenjang:</label>
        <input type="text" name="jenjang" id="jenjang" value="<?php echo $mahasiswa['jenjang']; ?>" required>

        <input type="submit" value="Update">
    </form>
    <a class="button" href="index.php">Kembali ke Daftar Mahasiswa</a>
</body>
</html>