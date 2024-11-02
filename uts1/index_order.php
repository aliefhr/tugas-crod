<?php
include 'config.php';

// Menjalankan query untuk mengambil data dari tabel orders
$result = $conn->query("SELECT * FROM orders");

// Memeriksa apakah query berhasil
if (!$result) {
    die("Query Error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Order Tiket</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Daftar Order Tiket</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Bangku</th>
                    <th>Film</th>
                    <th>Jumlah Tiket</th>
                    <th>Total Harga</th>
                    <th>Hari</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Aksi</th> <!-- Kolom untuk tombol Edit dan Hapus -->
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1; // Inisialisasi nomor urut
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nama_pembeli']; ?></td>
                        <td><?php echo $row['film']; ?></td>
                        <td><?php echo $row['jumlah_tiket']; ?></td>
                        <td><?php echo $row['total_harga']; ?></td>
                        <td><?php echo $row['hari']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="edit_order.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <!-- Tombol Hapus -->
                            <a href="delete_order.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus order ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="create_order.php" class="btn btn-primary">Tambah Order</a>
    </div>
</body>
</html>