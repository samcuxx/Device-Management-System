<?php
include 'config.php';
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Device</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
</head>

<body>
    <div class="d-flex">
        <?php include 'sidebar.php'; ?>
        <div class="main-content" style="margin-left: 220px; width: calc(100% - 220px);">
            <div class="container mt-5">
                <h1>➕ Add New Device</h1>
                <form action="add_device.php" method="post" class="form-grid">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="device_type">Device Type:</label>
                            <input type="text" id="device_type" name="device_type" class="form-control" required>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="device_id">Device ID:</label>
                            <input type="text" id="device_id" name="device_id" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="department">Department:</label>
                            <input type="text" id="department" name="department" class="form-control" required>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="problem_description">Problem Description:</label>
                            <input id="problem_description" name="problem_description" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="status">Status:</label>
                            <select id="status" name="status" class="form-control">
                                <option value="Pending">Pending</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Fixed">Fixed</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="user_name">User Name:</label>
                            <input type="text" id="user_name" name="user_name" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="contact">Contact:</label>
                            <input type="text" id="contact" name="contact" class="form-control" required>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="staff_id">Staff ID:</label>
                            <input type="text" id="staff_id" name="staff_id" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="date_received">Date Received:</label>
                        <input type="date" id="date_received" name="date_received" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
