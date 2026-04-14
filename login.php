<!-- tampilan halaman login -->
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Sekolah</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial;
            background: linear-gradient(to right, #4facfe, #00f2fe);
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background: white;
            padding: 40px;
            width: 350px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
            text-align: center;
        }

        .login-box h2 {
            margin-bottom: 20px;
        }

        .input-box {
            margin-bottom: 15px;
            text-align: left;
        }

        .input-box input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #4facfe;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #00c6ff;
        }

        .footer {
            margin-top: 15px;
            font-size: 12px;
            color: gray;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="login-box">
        <h2>Login Sistem Sekolah</h2>

        <form method="POST">
            <div class="input-box">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>

            <div class="input-box">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit" name="login">Login</button>
        </form>

        <div class="footer">
            © 2026 Sistem Sekolah
        </div>
    </div>
</div>

</body>
</html>
<!-- proses login -->
<?php
include "koneksi.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    $data = mysqli_fetch_assoc($query);

    if ($data) {
        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];

        if ($data['role'] == 'guru') {
            header("Location: dashboard_guru.php");
        } elseif ($data['role'] == 'siswa') {
            header("Location: dashboard_siswa.php");
        } else {
            header("Location: dashboard_admin.php");
        }
    } else {
        echo "<script>alert('Login gagal!');</script>";
    }
}