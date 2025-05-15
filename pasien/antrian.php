<?php

    include "../service/koneksi.php";
    session_start();

    $daftar_message = "";
    $id_pasien = $_SESSION["id"];

    $nama = "";
    $email = "";
    


    if (isset($_POST["daftar"])) {
        // $id = $_SESSION['id'];
        // echo $id;

        // $nama = $_POST['nama'];
        // $tanggal_lahir = $_POST["tanggal_lahir"];
        // $email = $_POST["email"];
        // $password = $_POST["password"];
        $pilih_jadwal = $_POST["kloter"];

        if($pilih_jadwal == '11pagi') {
            $jadwal = 1;
        }

        if($pilih_jadwal == '11sore') {
            $jadwal = 2;
        }

        $sql = "SELECT * FROM users WHERE id=$id_pasien";

        $result = $db->query($sql);
        $data = $result->fetch_assoc();
        $nama = $data["nama"];
        $email = $data["email"];
        

        $sqll = "INSERT INTO antrian (pasien, jadwal, no) VALUES ($id_pasien, $jadwal, 1)";

        if($db->query($sqll)) {
            echo "berhasil";
        }else {
            echo "gagal";
        }

        $sql1 = "SELECT * FROM jadwal WHERE id=$jadwal";


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nomor Antrian</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="h-screen w-full flex items-center bg-linear-190 from-sky-400 to-sky-800">

    <h4><?= $nama ?></h4>
    <h4><?= $email ?></h4>

    <div class="m-auto w-[800px] h-[500px] bg-gray-50">
        <div class="flex justify-center">
            <p class="text-xl">FORM PENDAFTARAN</p>
        </div>
        <form action="antrian.php" method="POST">
            <label for="">Jadwal</label>
            <select name="kloter" id="kloter" required>
                <option value="">Pilih Jadwal</option>
                <option value="11pagi">11 Pagi</option>
                <option value="11sore">11 Sore</option>
            </select>
            <button type="submit" name="daftar" class="bg-linear-100 from-sky-400 to-sky-700 text-white">Ambil Nomor Antrian</button>
        </form>
    </div>

    
</body>
</html>