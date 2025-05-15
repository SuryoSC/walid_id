<?php
    include '../service/koneksi.php';
    $result = $db->query("SELECT * FROM antrian WHERE id='1' ");
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
    <ul>
        <?php while($row = $result->fetch_assoc()): ?>
            <li><?= $row['pasien'] ?> - <?= $row['jadwal'] ?></li>
        <?php endwhile; ?>
    </ul>
</body>
</html>