<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM orders WHERE id = $id");
    $order = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama_pembeli = $_POST['nama_pembeli'];
    $film = $_POST['film'];
    $jumlah_tiket = $_POST['jumlah_tiket'];
    $total_harga = $_POST['total_harga'];
    $hari = $_POST['hari'];

    // Update data ke database
    $conn->query("UPDATE orders SET 
        nama_pembeli = '$nama_pembeli', 
        film = '$film', 
        jumlah_tiket = '$jumlah_tiket', 
        total_harga = '$total_harga', 
        hari = '$hari' 
        WHERE id = $id");

    // Redirect ke halaman daftar order setelah update
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order Tiket</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Edit Order Tiket</h1>
        <form method="POST">
            <div class="form-group">
                <label for="nama_pembeli">Kode Bangku</label>
                <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" value="<?php echo $order['nama_pembeli']; ?>" required>
            </div>
            <div class="form-group">
                <label for="film">Film</label>
                <input type="text" class="form-control" id="film" name="film" value="<?php echo $order['film']; ?>" required>
            </div>
            <div class="form-group">
                <label for="jumlah_tiket">Jumlah Tiket</label>
                <input type="number" class="form-control" id="jumlah_tiket" name="jumlah_tiket" value="<?php echo $order['jumlah_tiket']; ?>" required>
            </div>
            <div class="form-group">
                <label for="total_harga">Total Harga</label>
                <input type="text" class="form-control" id="total_harga" name="total_harga" value="<?php echo $order['total_harga']; ?>" required>
            </div>
            <div class="form-group">
                <label for="hari">Hari</label>
                <input type="text" class="form-control" id="hari" name="hari" value="<?php echo $order['hari']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="index_order.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>