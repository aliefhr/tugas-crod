<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM order_tiket WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: index_order.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>