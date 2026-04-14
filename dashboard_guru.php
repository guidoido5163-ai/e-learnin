<?php
session_start();

if ($_SESSION['role'] != 'guru') {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Guru</title>
    <style>
        body {
            margin: 0;
            font-family: Arial;
            display: flex;
        }

        /* SIDEBAR */
        .sidebar {
            width: 220px;
            height: 100vh;
            background: #2c3e50;
            color: white;
            padding-top: 20px;
        }

        .sidebar h2 {
            text-align: center;
        }

        .sidebar a {
            display: block;
            padding: 15px;
            color: white;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #34495e;
        }

        /* CONTENT */
        .main {
            flex: 1;
        }

        .navbar {
            background: #4facfe;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>Guru Panel</h2>
    <a href="#">Dashboard</a>
    <a href="#">Data Siswa</a>
    <a href="#">Input Nilai</a>
    <a href="logout.php">Logout</a>
</div>

<!-- MAIN -->
<div class="main">

    <!-- NAVBAR -->
    <div class="navbar">
        <div>Dashboard Guru</div>
        <div>User: <?php echo $_SESSION['role']; ?></div>
    </div>

    <!-- CONTENT -->
    <div class="content">
        <h2>Selamat Datang Guru 👨‍🏫</h2>
        <p>Silakan pilih menu di samping.</p>
    </div>

</div>

</body>
</html>