<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css"> <!-- Link ke file CSS -->
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a class="button" href="create.php">Tambah Mahasiswa</a>
    <table>
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Nomor HP</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Jenjang</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'config.php';
        $result = $conn->query("SELECT * FROM mahasiswa");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['npm']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['nomor_hp']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['jurusan']}</td>
                    <td>{$row['jenjang']}</td>
                    <td>
                        <a href='edit.php?npm={$row['npm']}'>Edit</a> | 
                        <a href='delete.php?npm={$row['npm']}' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>