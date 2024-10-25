<?php
session_start();
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM devices WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Device deleted successfully";
    } else {
        $_SESSION['message'] = "Error deleting device: " . $conn->error;
    }
}

$conn->close();
header("Location: index.php");
exit();
?>
