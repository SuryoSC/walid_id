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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body class="w-full flex flex-col items-center bg-gray-200">
    <?php include 'layout/header.html'; ?>

    <!-- <h4><?= $nama ?></h4>
    <h4><?= $email ?></h4> -->

    <p class="text-2xl my-10">Pilih Jadwal Pendaftaran</p>

    <div class="mx-auto w-[860px] bg-gray-50 rounded-sm mb-16">
        <form action="">
            <table class="w-full rounded-lg">
                <tbody>
                    <tr class="text-gray-50">
                        <!-- <th class="px-2 py-3 text-left font-medium bg-sky-600 rounded-tl-sm pl-8">ID</th> -->
                        <th class="px-2 py-3 text-left font-medium bg-sky-600 rounded-tl-sm pl-8">Tanggal</th>
                        <th class="px-2 py-3 text-left font-medium bg-sky-600">Kloter</th>
                        <th class="px-2 py-3 text-left font-medium bg-sky-600">Dokter</th>
                        <th class="px-2 py-3 text-left font-medium bg-sky-600 rounded-tr-sm pr-8">Pilih</th>
                    </tr>
                    <?php foreach ($tampil_jadwal as $item): ?>
                    <tr class="">
                        <!-- <td class="px-2 py-3 border-t-1 border-gray-200 pl-8"><?= $item['id']; ?></td> -->
                        <td class="px-2 py-3 border-t-1 border-gray-200 pl-8"><?= $item['tgl']; ?></td>
                        <td class="px-2 py-3 border-t-1 border-gray-200"><?= $item['kloter']; ?></td>
                        <td class="px-2 py-3 border-t-1 border-gray-200 pr-8">
                            <?= isset($dokter_map[$item['dokter']]) ? $dokter_map[$item['dokter']] : 'Tidak diketahui'; ?>
                        </td>
                        <!-- <td class="px-2 py-3 border-t-1 border-gray-200"><?= $item['kloter']; ?></td> -->
                        <td class="px-2 py-3 border-t-1 border-gray-200"><a href="isi.php?id=<?php echo $item['id']?>" class="bg-sky-500 text-white px-3 py-1 rounded-sm hover:bg-sky-600">Daftar</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </form>
        
    </table>

    </div>

    
</body>
</html>