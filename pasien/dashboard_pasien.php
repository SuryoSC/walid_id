<?php
    session_start();

    if(isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header('location: ../index.php');
    }

    // if(!isset($_SESSION['id'])) {
    //     header('location: form_login.php');
    //     exit();
    // }
    include '../session/session_user.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="">Dashboard</a>
        <a href="form_login.php">Login</a>
        <a href="form_register.php">Register</a>
    </header>
    <h1>SELAMAT DATANG DI HALAMAN DASHBOARD</h1>
    <h3>Hi, <?= $_SESSION["nama"] ?></h3>
    <form action="dashboard_pasien.php" method="POST">
        <button type="submit" name="logout">Logout</button>
    </form>
    <a href="profile.php"><b>Pengaturan Akun</b></a>

    <a href="daftar_to_antrian.php"><b>Daftar</b></a>

</body>
</html>