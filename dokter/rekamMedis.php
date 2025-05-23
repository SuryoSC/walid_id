<?php
include "../service/koneksi.php";

$id_antrian = $_GET['id'];
// echo''.$id_antrian.'';

// Table Antrian
$sql_antrian = "SELECT * FROM antrian WHERE id=$id_antrian";
$result_antrian = $db->query($sql_antrian);
$data_antrian = $result_antrian->fetch_assoc();

$id_pasien = $data_antrian['pasien'];
$id_jadwal = $data_antrian['jadwal'];

// echo''.$id_pasien.'';
// echo''.$id_jadwal.'';


// Table Users
$sql_pasien = "SELECT * FROM users WHERE id=$id_pasien";
$result_pasien = $db->query($sql_pasien);
$data_pasien = $result_pasien->fetch_assoc();

$nama_pasien = $data_pasien["nama"];


// Table jadwal
$sql_jadwal = "SELECT * FROM jadwal WHERE id=$id_jadwal";
$result_jadwal = $db->query($sql_jadwal);
$data_jadwal = $result_jadwal->fetch_assoc();

$tanggal_jadwal = $data_jadwal["tgl"];
$id_dokter = $data_jadwal["dokter"];
// echo"<b>".$id_dokter."</b>";

// Table dokter
$sql_dokter = "SELECT * FROM dokter WHERE id=$id_dokter";
$result_dokter = $db->query($sql_dokter);
$data_dokter = $result_dokter->fetch_assoc();

$nama_dokter = $data_dokter["nama"];

if (isset($_POST["buat"])) {
    $keluhan = $_POST["keluhan"];
    $diagnosa = $_POST["diagnosa"];

    $sql_rekammedis = "INSERT INTO rekam_medis (pasien, keluhan, diagnosa) VALUES ($id_antrian, '$keluhan', '$diagnosa')";
    
    if($db->query($sql_rekammedis)){
        // echo "Berhasil dibuat";

        $sql_buat_rekammedis = "UPDATE antrian SET rekmed='Terisi' WHERE id=$id_antrian";

        if(mysqli_query($db, $sql_buat_rekammedis)) {
            header("location: panggil_pasien.php");
            // echo "Berhasil ";
            // header("location: panggil_pasien.php");
        }else {
            // echo "panggilan gagal";
        }

    }else {
        // echo "Gagal dibuat";
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekam Medis</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f8;
            /* display: flex; */
            /* justify-content: center; */
            /* align-items: center; */
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            width: 500px;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        h5 {
            margin: 15px 0 5px;
            color: #555;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }

        .form-row {
            display: flex;
            margin-bottom: 12px;
            margin-top: 12px;
            align-items: center;
        }

        .form-row label {
            width: 140px;
            font-weight: 600;
            color: #333;
        }

        .form-row p {
            flex: 1;
            padding: 8px 10px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0;
        }

        .form-row input[type="text"] {
            flex: 1;
            padding: 8px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

    </style>
</head>
<body>
    <header class="w-full">
        <nav class="w-full h-[45px] bg-gray-50 border-b-2 border-gray-200 flex items-center px-4">
            <div class=""><a href="panggil_pasien.php" class="flex items-center gap-1"><i class='bx bx-left-arrow-alt' class="" style="font-size: 20px;"></i><p class="font-medium translate-y-[1px]">kembali</p></a></div>
        </nav>
    </header>
    <form action="rekamMedis.php?id=<?php echo $id_antrian ?>" method="POST" class="flex justify-center mt-8 px-80">
        <div class="container">
            <h2>Rekam Medis</h2>

            <h5>Data Diri</h5>
            <div class="form-row">
                <label for="nama">Nama:</label>
                <p><?= $nama_pasien ?></p>
            </div>
            <div class="form-row">
                <label for="tanggal">Tanggal:</label>
                <p><?= $tanggal_jadwal ?></p>
            </div>

            <h5>Informasi Rumah Sakit</h5>
            <div class="form-row">
                <label for="dokter">Dokter:</label>
                <p>Dr. <?= $nama_dokter ?></p>
            </div>
            <div class="form-row">
                <label for="keluhan">Keluhan:</label>
                <input type="text" name="keluhan" placeholder="Masukkan keluhan..." required>
            </div>
            <div class="form-row">
                <label for="diagnosa">Diagnosa:</label>
                <input type="text" name="diagnosa" placeholder="Masukkan diagnosa..." required>
            </div>
            <div class="flex justify-end mt-8">
                <button type="submit" name="buat" class="bg-sky-500 px-10 py-1 rounded-sm text-white hover:bg-sky-600">Buat Rekam Medis</button>
            </div>
        </div>
    </form>
</body>
</html>
