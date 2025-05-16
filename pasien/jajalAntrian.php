<?php

    include "../service/koneksi.php";
    session_start();

    $daftar_message = "";
    $id_pasien = $_SESSION["id"];

    $nama = "";
    $email = "";
    
    // Login dahulu untuk mengakses file ini (session)
    include "../session/session_user.php";

    // Menampilkan tabel jadwal(DB) ke halaman website
    $jadwal = "SELECT id, tgl, kloter, dokter FROM jadwal";
    $resultJadwal = mysqli_query($db, $jadwal);
    $tampil_jadwal = [];
    while ($row = mysqli_fetch_assoc($resultJadwal)) {
        $tampil_jadwal[] = $row;
    }

    // Menampilkan nama dokter ke halaman web
    $dokter_query = mysqli_query($db, "SELECT id, nama FROM dokter");
    $dokter_map = [];
    while ($d = mysqli_fetch_assoc($dokter_query)) {
        $dokter_map[$d['id']] = $d['nama'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nomor Antrian</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body class="h-screen w-full flex items-center bg-gray-100">

    <h4><?= $nama ?></h4>
    <h4><?= $email ?></h4>

    <div class="m-auto w-[800px] bg-gray-100 rounded-lg shadow-sm border-2 border-sky-500">
        <div class="flex justify-center bg-sky-500 py-2">
            <p class="text-xl font-semibold text-gray-50">FORM PENDAFTARAN</p>
        </div>

        <table class="w-[85%] m-auto my-8">
            <tr>
                <th class="border-gray-600 border-1 px-2 py-3 text-left">ID</th>
                <th class="border-gray-600 border-1 px-2 py-3 text-left">Tanggal</th>
                <th class="border-gray-600 border-1 px-2 py-3 text-left">Kloter</th>
                <th class="border-gray-600 border-1 px-2 py-3 text-left">Dokter</th>
                <th class="border-gray-600 border-1 px-2 py-3 text-left">Pilih</th>
            </tr>

            <?php foreach ($tampil_jadwal as $item): ?>
                <tr>
                    <td class="border-gray-600 border-1 px-2 py-3"><?= $item['id']; ?></td>
                    <td class="border-gray-600 border-1 px-2 py-3"><?= $item['tgl']; ?></td>
                    <td class="border-gray-600 border-1 px-2 py-3"><?= $item['kloter']; ?></td>
                    <td class="border-gray-600 border-1 px-2 py-3">
                        <?= isset($dokter_map[$item['dokter']]) ? $dokter_map[$item['dokter']] : 'Tidak diketahui'; ?>
                    </td>
                    <td class="border-gray-600 border-1 px-2"><?= $item['kloter']; ?></td>
                </tr>
            <?php endforeach; ?>
    </table>

    </div>

    
</body>
</html>