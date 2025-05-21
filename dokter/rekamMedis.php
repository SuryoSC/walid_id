<?php
include "../service/koneksi.php";

$id_antrian = $_GET['id'];
echo''.$id_antrian.'';

$sql_antrian = "SELECT * FROM antrian WHERE id=$id_antrian";
$result_antrian = $db->query($sql_antrian);
$data_antrian = $result_antrian->fetch_assoc();

$id_pasien = $data_antrian['pasien'];
$id_jadwal = $data_antrian['jadwal'];

echo''.$id_pasien.'';
echo''.$id_jadwal.'';


$sql_pasien = "SELECT * FROM users WHERE id=$id_pasien";
$result_pasien = $db->query($sql_pasien);
$data_pasien = $result_pasien->fetch_assoc();

$nama_pasien = $data_pasien["nama"];

$sql_jadwal = "SELECT * FROM jadwal WHERE id=$id_jadwal";
$result_jadwal = $db->query($sql_jadwal);
$data_jadwal = $result_jadwal->fetch_assoc();

$tanggal_jadwal = $data_jadwal["tgl"];


?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekam Medis</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f8;
            display: flex;
            justify-content: center;
            align-items: center;
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
    <form action="rekamMedis.php?=<?php echo $id_pasien ?>">
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
            <!-- <div class="form-row">
                <label for="dokter">Dokter:</label>
                <p>bogeng</p>
            </div> -->
            <div class="form-row">
                <label for="keluhan">Keluhan:</label>
                <input type="text" name="keluhan" placeholder="Masukkan keluhan...">
            </div>
            <div class="form-row">
                <label for="diagnosa">Diagnosa:</label>
                <input type="text" name="diagnosa" placeholder="Masukkan diagnosa...">
            </div>
            <div>
                <button type="submit" name="buat">Buat</button>
            </div>
        </div>
    </form>
</body>
</html>
