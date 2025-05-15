<?php
include "../service/koneksi.php";

$sql = "SELECT id, nama FROM dokter";
$result = $db->query($sql);

$swal_status = ""; // Status untuk tampilkan alert

if (isset($_POST['submit'])) {
    $tgl = $_POST['tanggal'];
    $kloter = $_POST['kloter'];
    $dokter = $_POST['dokter'];

    // 🔍 Cek apakah kombinasi tgl dan kloter sudah ada
    $cek_sql = "SELECT * FROM jadwal WHERE tgl = '$tgl' AND kloter = '$kloter'";
    $cek_result = $db->query($cek_sql);

    if ($cek_result->num_rows > 0) {
        $swal_status = "duplicate";
    } else {
        // 💾 Insert data jika belum ada
        $insert_sql = "INSERT INTO jadwal (tgl, kloter, dokter) VALUES ('$tgl', '$kloter', '$dokter')";
        if ($db->query($insert_sql)) {
            $swal_status = "success";
        } else {
            $swal_status = "error";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Jadwal</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <form action="buat_jadwal.php" method="POST">
        <div>
            <label for="">Tanggal</label>
            <input type="number" name="tanggal" required>
        </div>
        <div>
            <label for="">Kloter</label>
            <select name="kloter" required>
                <option value="">Pilih kloter</option>
                <option value="pagi">Pagi</option>
                <option value="sore">Sore</option>
            </select>
        </div>
        <div>
            <label for="dokter">Pilih Dokter:</label>
            <select name="dokter" id="dokter" required>
                <option value="">Pilih dokter</option>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['id'] . "'>" . $row['nama'] . "</option>";
                    }
                } else {
                    echo "<option value=''>Tidak ada data</option>";
                }
                ?>
            </select>
        </div>
        <button type="submit" name="submit">SUBMIT</button>
    </form>

    <?php if ($swal_status === "success") : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data berhasil disimpan!'
            });
        </script>
    <?php elseif ($swal_status === "duplicate") : ?>
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Gagal!',
                text: 'Jadwal dengan tanggal dan kloter tersebut sudah ada.'
            });
        </script>
    <?php elseif ($swal_status === "error") : ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'Terjadi kesalahan saat menyimpan data.'
            });
        </script>
    <?php endif; ?>
</body>

</html>
