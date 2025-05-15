<?php
include '../service/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $kloter = $_POST['kloter'];
    $tanggal = $_POST['tanggal'];

    // Cari no_antrian tertinggi untuk tanggal dan kloter itu
    $query = "SELECT MAX(no_antrian) AS terakhir FROM antrian WHERE tanggal=? AND kloter=?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("is", $tanggal, $kloter);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $nomor_berikutnya = $data['terakhir'] + 1;

    // Simpan antrian
    $stmt = $db->prepare("INSERT INTO antrian (pasien, jadwal, no) VALUES (?, ?, ?)");
    $stmt->bind_param("iii", $nama, $nomor_berikutnya, $kloter, $tanggal);
    $stmt->execute();

    echo "<h2>Nomor antrian Anda ($kloter): $nomor_berikutnya</h2>";
    echo "<a href='index.php'>Kembali</a>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><title>Ambil Antrian</title></head>
<body>
    <h1>Form Ambil Antrian</h1>
    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>
        <label>Tanggal:</label>
        <input type="number" name="tanggal" required><br>
        <label>Kloter:</label>
        <select name="kloter" required>
            <option value="pagi">Pagi</option>
            <option value="sore">Sore</option>
        </select><br><br>
        <button type="submit">Ambil Nomor</button>
    </form>
</body>
</html>