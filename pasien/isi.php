<?php
    include "../service/koneksi.php";
    session_start();

    $id_jadwal = $_GET["id"];
    echo "jadwal id :" . $id_jadwal . "<br>";

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

    echo "id user: " . $user_id . "<br>";
    echo "email user: " . $user_email . "<br>";
    echo "password: " . $user_password . "<br>";

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

    echo "<b>". $jadwal_id . "</b><br>";
    echo "<b>". $jadwal_date . "</b><br>";
    echo "<b>". $jadwal_kloter . "</b><br>";
    echo "<b>". $jadwal_iddokter . "</b><br>";

    // DOKTER
    // identifikasi Dokter
    $sql_dokter = "SELECT * FROM dokter WHERE id=$jadwal_iddokter";
    $result_dokter = $db->query($sql_dokter);
    $data_dokter = $result_dokter->fetch_assoc();

    $dokter_id = $data_dokter["id"];
    $dokter_nama = $data_dokter["nama"];
    echo "<br>";
    echo "<b>". $dokter_id . "</b><br>";
    echo "<b>". $dokter_nama . "</b><br>";

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
            header("location: tampilan_daftar_antrian.php");
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
    <title>Document</title>
</head>
<body>
    <div class="">
        <form action="isi.php?id=<?php echo $id_jadwal?>" method="POST">
            <div class="">
                <label for="">Tanggal</label>
                <input type="text" readonly value="<?= $jadwal_date ?>">
            </div>
            <div class="">
                <label for="">Kloter</label>
                <input type="text" readonly value="<?= $jadwal_kloter ?>">
            </div>
            <div class="">
                <label for="">Dokter</label>
                <input type="text" readonly value="<?= $dokter_nama ?>">
            </div>
            <div class="">
                <!-- <button type="submit" name="batal">Batal</button> -->
                 <a href="daftar_to_antrian.php">Batal</a>
                <button type="submit" name="daftar">Daftar</button>
            </div>
        </form>
    </div>
</body>
</html>