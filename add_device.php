<?php
session_start();
include 'config.php';
include 'navbar.php';
include 'sidebar.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $device_type = $_POST['device_type'];
    $device_id = $_POST['device_id'];
    $department = $_POST['department'];
    $problem_description = $_POST['problem_description'];
    $status = $_POST['status'];
    $user_name = $_POST['user_name'];
    $contact = $_POST['contact'];
    $staff_id = $_POST['staff_id'];
    $date_received = $_POST['date_received'];

    $sql = "INSERT INTO devices (device_type, device_id, department, problem_description, status, user_name, contact, staff_id, date_received)
            VALUES ('$device_type', '$device_id', '$department', '$problem_description', '$status', '$user_name', '$contact', '$staff_id', '$date_received')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "New device added successfully";
    } else {
        $_SESSION['message'] = "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    
    header("Location: index.php");
    exit();
}
?>
