<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Order Tiket</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Tambah Order Tiket</h1>
        <form action="store_order.php" method="POST">
            <div class="form-group">
                <label for="nama_pembeli">kode Bangku:</label>
                <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" required>
            </div>
            <div class="form-group">
                <label for="film">Film:</label>
                <input type="text" class="form-control" id="film" name="film" required>
            </div>
            <div class="form-group">
                <label for="jumlah_tiket">Jumlah Tiket:</label>
                <input type="number" class="form-control" id="jumlah_tiket" name="jumlah_tiket" required>
            </div>
            <div class="form-group">
                <label for="total_harga">Total Harga:</label>
                <input type="text" class="form-control" id="total_harga" name="total_harga" required>
            </div>
            <div class="form-group">
                <label for="hari">Hari:</label>
                <select class="form-control" id="hari" name="hari" required>
                    <option value="">Pilih Hari</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="index_order.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>