    <style>
.sidebar {
    background-color: #343a40;
    color: #ffffff;
    padding: 20px;
    width: 250px;
    height: 100vh;
    position: fixed;
    /* box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5); */
    font-family: 'Arial', sans-serif;
    top: 80px;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.sidebar ul li {
    padding: 15px;
    text-align: center;
    border-bottom: 1px solid #495057;
}

.sidebar ul li a {
    color: #ffffff;
    text-decoration: none;
    display: block;
    font-size: 18px;
    transition: background-color 0.3s, color 0.3s;
}

.sidebar ul li a:hover {
    background-color: #495057;
    color: #ffffff;
    border-radius: 5px;
}
    </style>
    <div class="sidebar">
        <ul>
            <li><a href="dashboard.php">📊 Dashboard</a></li>
            <li><a href="add_device_form.php">➕ Add Device</a></li>
            <li><a href="index.php">📱 Devices</a></li>
        </ul>
    </div>
