<?php
include 'config.php';
include 'navbar.php';
include 'sidebar.php';

// Fetch total devices
$totalDevicesQuery = "SELECT COUNT(*) as total FROM devices";
$totalDevicesResult = $conn->query($totalDevicesQuery);
$totalDevices = $totalDevicesResult->fetch_assoc()['total'];

// Fetch fixed devices
$fixedDevicesQuery = "SELECT COUNT(*) as fixed FROM devices WHERE status='Fixed'";
$fixedDevicesResult = $conn->query($fixedDevicesQuery);
$fixedDevices = $fixedDevicesResult->fetch_assoc()['fixed'];

// Fetch unfixed devices
$unfixedDevicesQuery = "SELECT COUNT(*) as unfixed FROM devices WHERE status!='Fixed'";
$unfixedDevicesResult = $conn->query($unfixedDevicesQuery);
$unfixedDevices = $unfixedDevicesResult->fetch_assoc()['unfixed'];

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
</head>

<body>
    <div class="d-flex">
        <?php include 'sidebar.php'; ?>
        <div class="main-content" style="margin-left: 220px; width: calc(100% - 220px);">
            <div class="container mt-5">
                <h2>📊 Dashboard</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="card-title">📱 Total Devices</h3>
                                <p class="card-text"><?= $totalDevices ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="card-title">✅ Fixed Devices</h3>
                                <p class="card-text"><?= $fixedDevices ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="card-title">🔧 Unfixed Devices</h3>
                                <p class="card-text"><?= $unfixedDevices ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
