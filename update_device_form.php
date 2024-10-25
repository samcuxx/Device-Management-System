<?php
include 'config.php';
include 'navbar.php';

$id = $_GET['id'];
$sql = "SELECT * FROM devices WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Device</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
</head>

<body>
    <div class="d-flex">
        <?php include 'sidebar.php'; ?>
        <div class="main-content" style="margin-left: 220px; width: calc(100% - 220px);">
            <div class="container mt-5">
                <h1>🔄 Update Device</h1>
                <form action="update_device.php" method="post">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">

                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select id="status" name="status" class="form-control">
                            <option value="Pending" <?= $row['status'] == 'Pending' ? 'selected' : '' ?>>Pending
                            </option>
                            <option value="In Progress" <?= $row['status'] == 'In Progress' ? 'selected' : '' ?>>In
                                Progress
                            </option>
                            <option value="Fixed" <?= $row['status'] == 'Fixed' ? 'selected' : '' ?>>Fixed</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

    <?php $conn->close(); ?>
</body>

</html>
