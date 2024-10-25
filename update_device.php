<?php
session_start();
include 'config.php';
include 'navbar.php';
include 'sidebar.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $sql = "UPDATE devices SET status='$status' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Device updated successfully";
    } else {
        $_SESSION['message'] = "Error updating device: " . $conn->error;
    }
}

$conn->close();
header("Location: index.php");
exit();
?>
