<?php
include 'config.php';

$npm = $_GET['npm'];

$sql = "DELETE FROM mahasiswa WHERE npm='$npm'";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>