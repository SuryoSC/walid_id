<?php
    include '../service/koneksi.php';
    session_start();

    $id = $_SESSION["id"];
    $email = $_SESSION["email"];
    $nama = $_SESSION["nama"];
    
    echo $id;
    echo $email;
    echo $nama;

    if(isset($_POST["daftar"])){
        $jadwal = $_POST["kloter"];
        
        $sql = "INSERT INTO antrian (pasien, jadwal) VALUES ('$id', '$jadwal')";

        if($db->query($sql)){
            echo "Bisa";
            // $register_message = "Pendaftaran Berhasil ✅";
        }else {
            echo "gagal";
            // $register_message = "Pendaftaran Gagal, silahkan coba lagi ❌";
        }
    }



    //     $result = $db->query("SELECT * FROM users WHERE id=$id ");
//     $row =  mysqli_fetch_assoc($result);
//     echo $row['nama'];

    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Antrian Rumah Sakit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Daftar Antrian</h1>
    <a href="daftar.php">Ambil Antrian</a>
    <h2>Antrian Saat Ini:</h2>


    <form action="daftarantrian.php" method="POST">
        <select name="kloter" required>
            <option value="">Pilih Jadwal</option>
            <option value="11pagi">11 Pagi</option>
            <option value="11sore">11 Sore</option>
        </select>
        <button name="daftar">Daftar</button>
    </form>
</body>
</html>