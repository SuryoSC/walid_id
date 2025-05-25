<?php
    include "../service/koneksi.php";

    $id = $_GET['id'];
    // echo $id;

    $sql_rekmed = "SELECT * FROM rekam_medis WHERE pasien=$id";
    $result = $db->query($sql_rekmed);

    if($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        $id_rekmed = $data["id"];
        $keluhan = $data["keluhan"];
        $diagnosa = $data["diagnosa"];

        // echo $id_rekmed . "<br>";
        // echo $id . "<br>";
        // echo $keluhan . "<br>";
        // echo $diagnosa . "<br>";

        $sql_antrian = "SELECT * FROM antrian WHERE id=$id";
        $result_antrian = $db->query($sql_antrian);
        $data_antrian = $result_antrian->fetch_assoc();

        $antrian_jadwal = $data_antrian["jadwal"];
        // echo $antrian_jadwal;

        $sql_jadwal = "SELECT * FROM jadwal WHERE id=$antrian_jadwal";
        $result_jadwal = $db->query($sql_jadwal);
        $data_jadwal = $result_jadwal->fetch_assoc();

        $id_dokter = $data_jadwal["dokter"];
        $jadwal_tanggal = $data_jadwal["tgl"];
        // echo $id_dokter;

        $sql_dokter = "SELECT * FROM dokter WHERE id=$id_dokter";
        $result_dokter = $db->query($sql_dokter);
        $data_dokter = $result_dokter->fetch_assoc();

        $nama_dokter = $data_dokter["nama"];
        // echo $nama_dokter;

    } else{
        // echo "Belum ada rekam medis <br>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekam Medis</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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
    <header class="w-full">
        <nav class="w-full h-[45px] bg-gray-50 border-b-2 border-gray-300 flex items-center px-4">
            <div class=""><a href="lihat_rekam_medis.php" class="flex items-center gap-1"><i class='bx bx-left-arrow-alt' class="" style="font-size: 20px;"></i><p class="font-medium translate-y-[1px]">kembali</p></a></div>
        </nav>
    </header>
    <div class="w-full h-screen flex justify-center items-center bg-gray-200">
        <div class="bg-gray-50 w-[650px] rounded-sm border-1 border-gray-300 px-8 py-4">
            <?php if($result->num_rows > 0) : ?>
                <div class="flex justify-center mb-6">
                    <span class="text-lg">Rekam Medis</span>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex items-center">
                        <label class="w-1/3">Dokter Pemeriksa</label>
                        <span class="w-2/3 bg-gray-100 border-1 border-gray-300 rounded-sm px-2 py-1">Dr. <?= $nama_dokter ?></span>
                    </div>
                    <div class="flex items-center">
                        <label class="w-1/3">Tanggal Pemeriksaan</label>
                        <span class="w-2/3 bg-gray-100 border-1 border-gray-300 rounded-sm px-2 py-1"><?= $jadwal_tanggal ?></span>
                    </div>
                    <div class="flex items-center">
                        <label class="w-1/3">Keluhan</label>
                        <span class="w-2/3 bg-gray-100 border-1 border-gray-300 rounded-sm px-2 py-1"><?= $keluhan ?></span>
                    </div>
                    <div class="flex items-center mb-4">
                        <label class="w-1/3">Diagnosa</label>
                        <span class="w-2/3 bg-gray-100 border-1 border-gray-300 rounded-sm px-2 py-1"><?= $diagnosa ?></span>
                    </div>
                </div>
            <?php elseif($result->num_rows == 0) : ?>
                <p>Belum ada Rekam Medis</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>