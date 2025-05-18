<?php
    include "../service/koneksi.php";
    session_start();

    $id_jadwal = $_GET["id"];
    // echo "jadwal id :" . $id_jadwal . "<br>";

    // didapat saat login
    $id_user = $_SESSION["id"];

    // USER
    // identifikasi user
    $sql_user = "SELECT * FROM users WHERE id=$id_user";
    $result_user = $db->query($sql_user);
    $data_user = $result_user->fetch_assoc();

    // Simpan data user pada var
    $user_id = $data_user["id"];
    $user_email = $data_user["email"];
    $user_password = $data_user["password"];
    $user_nama = $data_user["nama"];

    // echo "id user: " . $user_id . "<br>";
    // echo "email user: " . $user_email . "<br>";
    // echo "password: " . $user_password . "<br>";

    // JADWAL
    // identifikasi jadwal
    $sql_jadwal = "SELECT * FROM jadwal WHERE id=$id_jadwal";
    $result_jadwal = $db->query($sql_jadwal);
    $data_jadwal = $result_jadwal->fetch_assoc();

    // simpan data jadwal pada var
    $jadwal_id = $data_jadwal["id"];
    $jadwal_date = $data_jadwal["tgl"];
    $jadwal_kloter = $data_jadwal["kloter"];
    $jadwal_iddokter = $data_jadwal["dokter"];


    // echo "<b>". $jadwal_id . "</b><br>";
    // echo "<b>". $jadwal_date . "</b><br>";
    // echo "<b>". $jadwal_kloter . "</b><br>";
    // echo "<b>". $jadwal_iddokter . "</b><br>";

    // DOKTER
    // identifikasi Dokter
    $sql_dokter = "SELECT * FROM dokter WHERE id=$jadwal_iddokter";
    $result_dokter = $db->query($sql_dokter);
    $data_dokter = $result_dokter->fetch_assoc();

    $dokter_id = $data_dokter["id"];
    $dokter_nama = $data_dokter["nama"];
    // echo "<br>";
    // echo "<b>". $dokter_id . "</b><br>";
    // echo "<b>". $dokter_nama . "</b><br>";

    // DAFTAR & BATAL
    if(isset($_POST["daftar"])) {
        // Ambil nomor terakhir berdasarkan jadwal
        $query = $db->prepare("SELECT MAX(no) AS last_no FROM antrian WHERE jadwal = ?");
        $query->bind_param("i", $jadwal_id);
        $query->execute();
        $result = $query->get_result();
        $row = $result->fetch_assoc();
        $last_no = $row['last_no'] ?? 0;

        // Nomor antrian baru
        $new_no = $last_no + 1;

        // echo "DITEKAN";
        echo $user_id;
        $sql_daftar = "INSERT INTO antrian (pasien, jadwal, no) VALUES ($user_id, $jadwal_id, $new_no)";

        if($db->query($sql_daftar)){
            echo "Bisa";
            header("location: tampilan_daftar_antrian.php?id=".$id_jadwal);
        }else {
            echo "gagal";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pendaftaran</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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
    <div class="w-[40%] bg-gray-50 border-1 border-gray-300 rounded-sm flex flex-col items-center py-5">
        <p class="text-center text-xl mb-6 font-semibold">Konfirmasi Pendaftaran</p>
        <form action="isi.php?id=<?php echo $id_jadwal?>" method="POST" class="w-full px-10 flex flex-col gap-4">
            <div class="flex justify-between border-b-1 border-gray-300">
                <label for="">Tanggal</label>
                <input type="text" readonly value="<?= $jadwal_date ?>" class="w-[220px]">
            </div>
            <div class="flex justify-between border-b-1 border-gray-300">
                <label for="">Kloter</label>
                <input type="text" readonly value="<?= $jadwal_kloter ?>" class="w-[220px]">
            </div>
            <div class="flex justify-between border-b-1 border-gray-300">
                <label for="">Dokter</label>
                <input type="text" readonly value="Dr. <?= $dokter_nama ?>" class="w-[220px]">
            </div>
            <div class="flex justify-between border-b-1 border-gray-300">
                <label for="">Nama Pasien</label>
                <input type="text" readonly value="<?= $user_nama ?>" class="w-[220px]">
            </div>
            <div class="flex justify-between mt-5">
                <!-- <button type="submit" name="batal">Batal</button> -->
                 <a href="daftar_to_antrian.php" class="bg-gray-200 py-1 rounded-sm w-[120px] text-center hover:bg-gray-300">Batal</a>
                <button type="submit" name="daftar" class="bg-gray-200 py-1 rounded-sm w-[120px] cursor-pointer hover:bg-gray-300">Daftar</button>
            </div>
        </form>
    </div>
</body>
</html>