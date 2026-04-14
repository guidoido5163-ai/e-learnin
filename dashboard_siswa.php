<?php
session_start();

if ($_SESSION['role'] != 'siswa') {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Siswa</title>
    <style>
        body {
            margin: 0;
            font-family: Arial;
            display: flex;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background: #16a085;
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
            background: #1abc9c;
        }

        .main {
            flex: 1;
        }

        .navbar {
            background: #00c6ff;
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

<div class="sidebar">
    <h2>Siswa Panel</h2>
    <a href="#">Dashboard</a>
    <a href="#">Lihat Nilai</a>
    <a href="#">Jadwal</a>
    <a href="logout.php">Logout</a>
</div>

<div class="main">

    <div class="navbar">
        <div>Dashboard Siswa</div>
        <div>User: <?php echo $_SESSION['role']; ?></div>
    </div>

    <div class="content">
        <h2>Selamat Datang Siswa 🎓</h2>
        <p>Silakan pilih menu di samping.</p>
    </div>

</div>

</body>
</html>