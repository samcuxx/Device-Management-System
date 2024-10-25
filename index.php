<?php
include 'config.php';
include 'navbar.php';
session_start();

$sql = "SELECT * FROM devices";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Device Management</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
</head>

<body>
    <div class="d-flex">
        <?php include 'sidebar.php'; ?>
        <div class="main-content" style="margin-left: 220px; width: calc(100% - 220px);">
            <div class="container mt-5">
                <h2>📱 Device Management</h2>
                <?php
                if (isset($_SESSION['message'])) {
                    echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                            ' . $_SESSION['message'] . '
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>';
                    unset($_SESSION['message']);
                }
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Device ID</th>
                            <th>Device Type</th>
                            <th>Problem Description</th>
                            <th>Department</th>
                            <th>Contact</th>
                            <th>Status</th>
                            <th>Date Received</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['user_name'] ?></td>
                            <td><?= $row['device_id'] ?></td>
                            <td><?= $row['device_type'] ?></td>
                            <td><?= $row['problem_description'] ?></td>
                            <td><?= $row['department'] ?></td>
                            <td><?= $row['contact'] ?></td>
                            <td><?= $row['status'] ?></td>
                            <td><?= $row['date_received'] ?></td>
                            <td>
                                <a href="update_device_form.php?id=<?= $row['id'] ?>" class="btn btn-warning">Update</a>
                                <a href="#" class="btn btn-danger" onclick="confirmDelete(<?= $row['id'] ?>)">Delete</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php $conn->close(); ?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    function confirmDelete(id) {
        if (confirm("Are you sure you want to delete this device?")) {
            window.location.href = "delete_device.php?id=" + id;
        }
    }
    </script>
</body>

</html>
