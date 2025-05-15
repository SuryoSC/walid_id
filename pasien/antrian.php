<?php

    include "../service/koneksi.php";
    session_start();

    $daftar_message = "";
    $id_pasien = $_SESSION["id"];

    $nama = "qqq";
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
<body class="h-screen w-full">

    <h4><?= $id_pasien ?></h4>
    <h4><?= $nama ?></h4>
    <h4><?= $email ?></h4>

    <div class="m-auto w-[800px] bg-slate-400">
        <div class="flex justify-center">
            <p>FORM PENDAFTARAN</p>
        </div>
        <form action="antrian.php" method="POST">
            <label for="">Jadwal</label>
            <select name="kloter" id="kloter" required>
                <option value="">Pilih Jadwal</option>
                <option value="11pagi">11 Pagi</option>
                <option value="11sore">11 Sore</option>
            </select>
            <button type="submit" name="daftar">Ambil Nomor</button>
        </form>
    </div>

    
</body>
</html>