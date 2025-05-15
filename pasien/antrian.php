<?php
// function tambahPasien($nama, $keluhan) {
//     require_once("./koneksi.php");

//     // Query dengan parameter atau menggunakan teknik prepared statement
//     $sql = "INSERT INTO siswa (nama, kelas) VALUES (:nama, :kelas)";
//     $stmt = $conn->prepare($sql);

//     // Bind parameter
//     $stmt->bindParam(':nama', $nama);
//     $stmt->bindParam(':kelas', $keluhan);

//     // Eksekusi query
//     $stmt->execute();

//     echo "Data berhasil ditambahkan";
// }

// function getDaftar() {
//     require_once("./koneksi.php");
//     $sql = "SELECT * FROM antrian";
//     $stmt = $conn->prepare($sql);

//     // Eksekusi query
//     $stmt->execute();
//     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     return $result;
// }

include "../koneksi.php";

$daftar_message = "";



if (isset($_POST["daftar"])) {

    $sql = "SELECT * FROM";

    $nama = $_POST['nama'];
    $keluhan = $_POST['keluhan'];

    try {
        $sql = "INSERT INTO users (nama, keluhan) VALUE ('$nama', '$keluhan')";

        if($db->query($sql)) {
            $register_message = "Pendaftaran Akun Berhasil, Silahkan Login";
        }else {
            $register_message = "Pendaftaran Gagal, Silahkan Coba Lagi";
        }
    }catch (mysqli_sql_exception) {
        $register_message = "Email sudah terdaftar, Silahkan menggunakan email lain";
    }
    $db->close();

    // header("location: form.php");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nomor Antrian</title>
</head>
<body>
    <form action="antrian.php">
        <label for="">Jadwal</label>
        <select name="kloter" id="">
            <option value="11pagi">11 Pagi</option>
            <option value="11sore">11 Sore</option>
        </select>
        <button type="submit" name="daftar">Ambil Nomor</button>
    </form>
</body>
</html>