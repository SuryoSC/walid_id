<?php
include "../service/koneksi.php";
session_start();

if (!isset($_SESSION["id"])) {
  header("location: login.php");
  exit();
}

if (isset($_POST["logout"])) {
  session_unset();
  session_destroy();
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Panel - Rumah Sakit Walid.id</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../assets/theme/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../assets/theme/dist/css/adminlte.min.css">
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

    .sidebar a,
    .sidebar form .btn-logout {
      display: block;
      color: white;
      padding: 15px 25px;
      text-decoration: none;
      font-weight: bold;
      font-size: 16px;
    }

    .sidebar a:hover,
    .sidebar form .btn-logout:hover {
      background-color: #00BFFF;
    }

    .sidebar form {
      margin: 0;
    }

    .sidebar form .btn-logout {
      background: none;
      border: none;
      cursor: pointer;
      text-align: left;
      width: 100%;
    }

    .logo {
      width: 110px;
      border-radius: 50%;
    }

    .content {
      margin-left: 230px;
      padding: 30px;
    }

    .card {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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
    <form action="index.php" method="post">
      <button type="submit" name="logout" class="btn-logout">Logout</button>
    </form>
  </div>

  <div class="content">
    <div class="card">
      <h2>Selamat Datang, Admin!</h2>
      <p>Anda masuk sebagai administrator rumah sakit <strong>Walid.id</strong>. Silakan gunakan menu di sebelah kiri
        untuk mengelola sistem rumah sakit.</p>
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

    <!-- BAR CHART -->
    <div class="card card-success">
      <!-- <div class="card-header">
        <h3 class="card-title">Statistik Bulanan</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div> -->
      <div class="card-body">
        <div class="chart">
          <canvas id="barChart" style="min-height: 250px; height: 250px; max-width: 100%;"></canvas>
        </div>
      </div>
    </div>

    <footer>
      © 2025 Rumah Sakit Walid.id - All rights reserved.
    </footer>
  </div>

  <?php
    // $arai=[1,2,3,12,3,13,13,13,2,3];
    // $jml = count($arai);

    $sql = "SELECT * FROM antrian WHERE jadwal='14'";
    $result = mysqli_query($db, $sql);
    $array = [];

    if ($result && mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $array[] = $row; // Simpan ke array
      }
    }

    $jml = count($array);
    

    // jadwal
    $sql_jadwal = "SELECT * FROM jadwal";
    $result_jadwal = mysqli_query($db, $sql_jadwal);
    $data_jadwal = [];
    while ($row = mysqli_fetch_assoc($result_jadwal)) {
      $data_jadwal[] = $row; // Simpan ke array
    }

    
  ?>

  <!-- Script -->
  <script src="../assets/theme/plugins/jquery/jquery.min.js"></script>
  <script src="../assets/theme/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/theme/plugins/chart.js/Chart.min.js"></script>
  <script>

    const a = parseInt(<?= $jml ?>);

    $(function () {
      const barChartCanvas = $('#barChart').get(0).getContext('2d');
      const barChartData = {
        // labels: [
        //   'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'
        // ],

        labels: [
          <?php foreach($data_jadwal as $item) :?>
            '<?= $item['tgl'];?>, <?= $item['kloter'];?>',
          <?php endforeach; ?>
        ],

        datasets: [
          {
            label: 'Pagi',
            backgroundColor: '#00BFFF',
            borderColor: '#0099CC',
            data: [a, 40, 35, 50, 45, 45]
          }
          // ,
          // {
          //   label: 'Sore',
          //   backgroundColor: '#FFA07A',
          //   borderColor: '#FF6347',
          //   data: [a, 40, 35, 50, 36, 43, 50]
          // }
        ]
      };

      const barChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      };

      new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
      });
    });
  </script>
</body>

</html>