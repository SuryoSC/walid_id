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
    <div class="w-full h-screen flex justify-center items-center bg-gray-200">
        <div class="bg-gray-50 w-[650px] rounded-sm border-1 border-gray-300 px-8 py-4">
            <?php if($result->num_rows > 0) : ?>
                <div class="flex justify-center mb-6">
                    <span class="text-lg">Rekam Medis</span>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex items-center">
                        <label class="w-1/3">Keluhan</label>
                        <span class="w-2/3 bg-gray-100 border-1 border-gray-300 rounded-sm px-2 py-1"><?= $keluhan ?></span>
                    </div>
                    <div class="flex items-center">
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