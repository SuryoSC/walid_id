<?php
include "../service/koneksi.php";
session_start();

if(!isset($_SESSION['id'])) {
    header('location: login.php');
    exit();
}

$dokter_query = mysqli_query($db, "SELECT id, nama FROM dokter");
$dokter_map = [];
while ($d = mysqli_fetch_assoc($dokter_query)) {
    $dokter_map[$d['id']] = $d['nama'];
}

// Ambil semua data jadwal ke dalam array
$tampil_jadwal = mysqli_query($db, "SELECT tgl, kloter, dokter FROM jadwal");
$jadwal_data = [];
while ($row = mysqli_fetch_assoc($tampil_jadwal)) {
    $jadwal_data[] = $row;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jadwal Dokter</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            display: flex;
            flex-direction: column;
            /* justify-content: center; */
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 24px;
            border-radius: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 600px;
            margin-top: 40px;
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

        th,
        td {
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
    <header class="w-full">
        <nav class="w-full h-[45px] bg-gray-50 border-b-2 border-gray-200 flex items-center px-4">
            <div class=""><a href="index.php" class="flex items-center gap-1"><i class='bx bx-left-arrow-alt' class="" style="font-size: 20px;"></i><p class="font-medium translate-y-[1px]">kembali</p></a></div>
        </nav>
    </header>

    <div class="container">
        <h2>Jadwal Dokter</h2>
        <table>
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>kloter</th>
                    <th>Dokter</th>
                </tr>
            </thead>
            <tbody>
                <!-- <?php foreach ($tampil as $item) { ?>
                <tr>
                    <td><?= $item['tgl']; ?></td>
                    <td><?= $item['kloter']; ?></td>
                    <?php if ($item['dokter'] == $dokter['id']) { ?>
                    <td><?= $dokter['nama']; ?></td>
                    <?php } ?>
                    <td>10 Mei 2025</td> Kamu bisa ganti dengan tanggal sebenarnya
                    <td>Pagi</td>         Atau ambil dari database jika ada kolom kloter
                </tr>
                <?php } ?> -->

                <?php foreach ($jadwal_data as $item): ?>
                    <tr>
                        <td><?= htmlspecialchars($item['tgl']); ?></td>
                        <td><?= htmlspecialchars($item['kloter']); ?></td>
                        <td>
                            <?= isset($dokter_map[$item['dokter']]) ? htmlspecialchars($dokter_map[$item['dokter']]) : 'Tidak diketahui'; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>