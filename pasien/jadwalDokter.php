<?php
include "../service/koneksi.php";
$ambilData = mysqli_query($koneksi, "SELECT nama FROM dokter");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jadwal Dokter</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f4f6;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }

    .container {
      background-color: #fff;
      padding: 24px;
      border-radius: 16px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      width: 90%;
      max-width: 600px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 24px;
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 12px;
      text-align: center;
    }

    th {
      background-color: #3b82f6;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Jadwal Dokter</h2>
    <table>
      <thead>
        <tr>
          <th>Dokter</th>
          <th>Tanggal</th>
          <th>Kloter</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($tampil = mysqli_fetch_array($ambilData)): ?>
          <tr>
            <td><?= $tampil['nama']; ?></td>
            <td>10 Mei 2025</td> <!-- Kamu bisa ganti dengan tanggal sebenarnya -->
            <td>Pagi</td>         <!-- Atau ambil dari database jika ada kolom kloter -->
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>

</body>
</html>
