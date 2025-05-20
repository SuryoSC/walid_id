<?php
    include "../service/koneksi.php";

    $id_antrian = $_GET['id'];
    // echo''.$id_antrian.'';

    $sql = "SELECT * FROM antrian WHERE id=$id_antrian";
    $result = $db->query($sql);
    $data_antrian = $result->fetch_assoc();

    $id_pasien = $data_antrian["pasien"];
    $id_jadwal = $data_antrian["jadwal"];
    $id_no = $data_antrian["no"];
    $id_status = $data_antrian["status"];
    // echo $id_pasien . "<br>";
    // echo $id_jadwal . "<br>";
    // echo $id_no . "<br>";
    // echo $id_status . "<br>";

    if(isset($_POST["konfirmasi"])) {
        // $id_antrian = $_POST[""];

        $sql_update = "UPDATE antrian SET status='terpanggil' WHERE id='$id_antrian'";

        if(mysqli_query($db, $sql_update)) {
            echo "Berhasil dipanggil";
            header("location: panggil_pasien.php");
        }else {
            echo "panggilan gagal";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Panggil Pasien</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "poppins", sans-serif;
        }
    </style>
</head>
<body class="w-full h-screen flex justify-center items-center bg-gray-200">
    <div class="w-[30%] bg-gray-50 border-1 border-gray-300 rounded-sm flex flex-col items-center py-5">
        <p>KONFIRMASI PANGGILAN</p>
        <form action="konfirmasi_panggilan.php?id=<?php echo $id_antrian ?>" method="POST" class="w-full px-10 flex gap-4 justify-between mt-10">
            <a href="panggil_pasien.php" class="bg-gray-200 py-1 rounded-sm w-[120px] cursor-pointer hover:bg-gray-300 text-center">Batal</a>
            <button type="submit" name="konfirmasi" class="bg-gray-200 py-1 rounded-sm w-[120px] cursor-pointer hover:bg-gray-300">konfirmasi</button>
        </form>
    </div>
</body>
</html>