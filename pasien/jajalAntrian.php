<?php

    include "../service/koneksi.php";
    session_start();

    $daftar_message = "";
    $id_pasien = $_SESSION["id"];

    $nama = "";
    $email = "";
    
    include "../session/session_user.php";

    // if (isset($_POST["daftar"])) {
    //     $pilih_jadwal = $_POST["kloter"];

    //     if($pilih_jadwal == '11pagi') {
    //         $jadwal = 1;
    //     }

    //     if($pilih_jadwal == '11sore') {
    //         $jadwal = 2;
    //     }

    //     $sql = "SELECT * FROM users WHERE id=$id_pasien";

    //     $result = $db->query($sql);
    //     $data = $result->fetch_assoc();
    //     $nama = $data["nama"];
    //     $email = $data["email"];
        

    //     $sqll = "INSERT INTO antrian (pasien, jadwal, no) VALUES ($id_pasien, $jadwal, 1)";

    //     if($db->query($sqll)) {
    //         echo "berhasil";
    //     }else {
    //         echo "gagal";
    //     }

    //     $sql1 = "SELECT * FROM jadwal WHERE id=$jadwal";


    // }

    $jadwal = "SELECT * FROM jadwal";

    $resultJadwal = mysqli_query($db, $jadwal);

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

    <div class="m-auto w-[800px] h-[500px] bg-gray-100 rounded-lg shadow-sm border-2 border-sky-500">
        <div class="flex justify-center bg-sky-500 py-2">
            <p class="text-xl font-semibold text-gray-50">FORM PENDAFTARAN</p>
        </div>
        <form action="antrian.php" method="POST">
            <label for="">Jadwal</label>
            <select name="kloter" id="kloter" required>
                <option value="">Pilih Jadwal</option>
                <option value="11pagi">11 Pagi</option>
                <option value="11sore">11 Sore</option>
            </select>
            <button type="submit" name="daftar" class="bg-sky-500 text-white py-2 px-5 rounded-full hover:bg-sky-600 cursor-pointer">Ambil Nomor Antrian</button>
        </form>

        <table class="text-center w-[85%] m-auto">
        <tr>
            <th class="border-gray-600 border-1 px-2">ID</th>
            <th class="border-gray-600 border-1 px-2">Tanggal</th>
            <th class="border-gray-600 border-1 px-2">Kloter</th>
            <th class="border-gray-600 border-1 px-2">Dokter</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($resultJadwal)) { ?>
        <tr>
            <td class="border-gray-600 border-1 px-2"><?= $row['id'] ?></td>
            <td class="border-gray-600 border-1 px-2"><?= $row['tgl'] ?></td>
            <td class="border-gray-600 border-1 px-2"><?= $row['kloter'] ?></td>
            <td class="border-gray-600 border-1 px-2"><?= $row['dokter'] ?></td>
        </tr>
        <?php } ?>
    </table>

    </div>

    
</body>
</html>