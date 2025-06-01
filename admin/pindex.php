<?php

  session_start();

  if(!isset($_SESSION["id"])) {
    header("location: login.php");
    exit();
  }

  if(isset($_POST["logout"])) {
    session_unset();
    session_destroy();
    header("location: login.php");
  }

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dokumen</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      margin: 0;
      background-color: #f2f9ff;
    }

    header {
      background-color: #00BFFF;
      padding: 20px;
      color: white;
      text-align: center;
      font-size: 26px;
      font-weight: bold;
    }
    

    .sidebar {
      width: 230px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #55CCFF;
      padding-top: 80px;
    }

    .sidebar a {
      display: block;
      color: white;
      padding: 15px 25px;
      text-decoration: none;
      font-weight: bold;
      font-size: 16px;
    }

    .sidebar form {
      display: block;
      text-decoration: none;
    }

    .sidebar form .btn-logout {
      display: block;
      background: none;
      border: none;
      font-weight: bold;
      color: white;
      padding: 15px 25px;
      cursor: pointer;
      width: 100%;
      text-align: left;
      font-size: 16px;
    }

    .sidebar form .btn-logout:hover {
      background-color: #00BFFF;
    }

    .sidebar a:hover {
      background-color: #00BFFF;
    }
    .logo{
      width : 110px;
      border-radius : 50%;
      align-items:center;
      
    }
    .content {
      margin-left: 230px;
      padding: 30px;
    }

    .card {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      padding: 25px;
      margin-bottom: 25px;
    }

    .card h2 {
      color: #00BFFF;
      margin-bottom: 10px;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 20px;
    }

    .info-box {
      background-color: #EAF8FF;
      border-left: 5px solid #00BFFF;
      padding: 20px;
      border-radius: 8px;
      text-align: center;
    }

    .info-box h3 {
      font-size: 28px;
      color: #00BFFF;
      margin: 0;
    }

    .info-box p {
      margin: 8px 0 0;
      font-weight: bold;
      color: #333;
    }

    footer {
      margin-top: 50px;
      text-align: center;
      font-size: 13px;
      color: #999;
    }
  </style>
</head>
<body>

  <header>
    Admin Panel - Rumah Sakit Walid.id
  </header>

  <div class="sidebar">
    <div style="display: flex; justify-content: center;">
      <img class="logo" src="../assets/logo/walid_logo.jpg" alt="">
    </div>
    
    <a href="#">Beranda</a>
    <a href="tambah_dokter.php">Tambah Dokter</a>
    <a href="buat_jadwal.php">Buat Jadwal Dokter</a>
    <!-- <a href="#">Logout</a> -->
    <form action="index.php" method="post">
      <button type="submit" name="logout" class="btn-logout">Logout</button>
    </form>
  </div>

  <div class="content">
    <div class="card">
      <h2>Selamat Datang, Admin!</h2>
      <p>Anda masuk sebagai administrator rumah sakit <strong>Walid.id</strong>. Silakan gunakan menu di sebelah kiri untuk mengelola sistem rumah sakit.</p>
    </div>

    <div class="grid">
      <div class="info-box">
        <h3>15</h3>
        <p>Dokter Aktif</p>
      </div>
      <div class="info-box">
        <h3>120</h3>
        <p>Pasien Terdaftar</p>
      </div>
      <div class="info-box">
        <h3>8</h3>
        <p>Jadwal Hari Ini</p>
      </div>
      <div class="info-box">
        <h3>5</h3>
        <p>Reservasi Baru</p>
      </div>
    </div>

    <footer>
      © 2025 Rumah Sakit Walid.id - All rights reserved.
    </footer>
  </div>

</body>
</html>
