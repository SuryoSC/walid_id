<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Antrian</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f6f8;
      padding: 30px;
    }

    .container {
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
      padding: 25px;
      width: 500px;
      margin: auto;
    }

    .title {
      text-align: center;
      font-size: 26px;
      font-weight: bold;
      color: #2c3e50;
      margin-bottom: 20px;
      border-bottom: 2px solid #3498db;
      padding-bottom: 10px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #3498db;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #e3f2fd;
    }

    .footer {
      text-align: center;
      font-style: italic;
      margin-top: 20px;
      color: #7f8c8d;
    }

    .highlight {
      background-color: #d1ecf1 !important;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="title">Daftar Antrian</div>

    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr class="highlight">
          <td>1</td>
          <td>Sutyem</td>
          <td>Sedang diperiksa</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Romini</td>
          <td>Berikutnya</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Rahmat</td>
          <td>Menunggu</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Walid</td>
          <td>Menunggu</td>
        </tr>
      </tbody>
    </table>

    <div class="footer">
      Anda pada urutan ke-sekian
    </div>
  </div>
</body>
</html>
