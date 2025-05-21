<?php
include "../service/koneksi.php";

$id_antrian = $_GET['id'];
echo''.$id_antrian.'';

// Table Antrian
$sql_antrian = "SELECT * FROM antrian WHERE id=$id_antrian";
$result_antrian = $db->query($sql_antrian);
$data_antrian = $result_antrian->fetch_assoc();

$id_pasien = $data_antrian['pasien'];
$id_jadwal = $data_antrian['jadwal'];

echo''.$id_pasien.'';
echo''.$id_jadwal.'';


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
        echo "Berhasil dibuat";

        $sql_buat_rekammedis = "UPDATE antrian SET rekmed='Terisi' WHERE id=$id_antrian";

        if(mysqli_query($db, $sql_buat_rekammedis)) {
            // echo "Berhasil ";
            // header("location: panggil_pasien.php");
        }else {
            // echo "panggilan gagal";
        }

    }else {
        echo "Gagal dibuat";
    }
}

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
    <form action="rekamMedis.php?id=<?php echo $id_antrian ?>" method="POST">
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
            <div>
                <button type="submit" name="buat">Buat</button>
            </div>
        </div>
    </form>
</body>
</html>
