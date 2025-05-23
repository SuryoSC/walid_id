<?php
    include "../service/koneksi.php";
    session_start();
    include "../session/session_user.php";

    $id_users = $_SESSION["id"];
    // echo $id_users;

    $sql = "SELECT antrian.id,
                antrian.pasien,
                users.nama AS nama_pasien,
                jadwal.tgl,
                jadwal.kloter,
                antrian.status
            FROM antrian
            JOIN users ON antrian.pasien = users.id
            JOIN jadwal ON antrian.jadwal = jadwal.id
            WHERE antrian.pasien = $id_users";

    $hasil = $db->query($sql);
    $data = [];
    while ($row = mysqli_fetch_assoc($hasil)) {
        $data[] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Riwayat dan Rekam Medis</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>
<body>
    <?php include "layout/header.html"; ?>

    <div class="mx-auto w-[860px] bg-gray-50 rounded-sm mb-16 p-6 shadow-md mt-10">
        <p class="text-center text-xl">Riwayat Periksa Anda</p>
        <table class="w-full rounded-lg mt-6">
            <thead>
                <tr class="text-white bg-sky-600">
                    <!-- <th class="px-4 py-3 text-left">ID</th> -->
                    <!-- <th class="px-4 py-3 text-left">No Antrian</th> -->
                    <th class="px-4 py-3 text-left">Nama</th>
                    <th class="px-4 py-3 text-left">Tanggal</th>
                    <th class="px-4 py-3 text-left">Kloter</th>
                    <th class="px-4 py-3 text-left">Rekam Medis</th>
                </tr>
            </thead>
            <tbody class="bg-white text-gray-700">
                <?php foreach ($data as $item): ?>
                <tr class="border-t">
                    <!-- <td class="px-4 py-3"><?= $item['id']; ?></td> -->
                    <!-- <td class="px-4 py-3"><?= $item['no']; ?></td> -->
                    <td class="px-4 py-3"><?= $item['nama_pasien']; ?></td>
                    <td class="px-4 py-3"><?= $item['tgl']; ?></td>
                    <td class="px-4 py-3"><?= ucfirst($item['kloter']); ?></td>
                    <td class="px-4 py-3"><?= ucfirst($item['status']); ?></td>
                    <!-- <td class="px-4 py-3"><?= ucfirst($item['rekmed']); ?></td> -->
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>