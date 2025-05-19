<?php
    include("../service/koneksi.php");
    session_start();

    include ("../session/session_user.php");

    $id_jadwal = $_GET["id"];

    // echo"".$id_jadwal."";

    $sql = "SELECT * FROM antrian WHERE jadwal=$id_jadwal";
    $hasil = $db->query($sql);
    $antrian = [];
    while ($row = mysqli_fetch_assoc($hasil)) {
        $antrian[] = $row;
    }

    $terserah = "SELECT  users.nama, jadwal.tgl FROM users LEFT JOIN jadwal ON users.id = jadwal.id ";
    $mbuh = $db->query($terserah);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Nomor Antrian</title>
</head>
<body>
    <div class="mx-auto w-[860px] bg-gray-50 rounded-sm mb-16">
        <form action="tampilan_daftar_antrian.php" method="POST">
            <select name="" id=""></select>
            <table class="w-full rounded-lg">
                <tbody>
                    <tr class="text-gray-50">
                        <th class="px-2 py-3 text-left font-medium bg-sky-600 rounded-tl-sm pl-8">ID</th>
                        <th class="px-2 py-3 text-left font-medium bg-sky-600">Pasien</th>
                        <th class="px-2 py-3 text-left font-medium bg-sky-600">Jadwal</th>
                        <th class="px-2 py-3 text-left font-medium bg-sky-600">Nomor Antrian</th>
                    </tr>
                    <?php foreach ($antrian as $item): ?>
                    <tr class="">
                        <td class="px-2 py-3 border-t-1 border-gray-200 pl-8"><?= $item['id']; ?></td>
                        <td class="px-2 py-3 border-t-1 border-gray-200"><?= $item['pasien']; ?></td>
                        <td class="px-2 py-3 border-t-1 border-gray-200"><?= $item['jadwal']; ?></td>
                        <td class="px-2 py-3 border-t-1 border-gray-200 pr-8"><?= $item['no'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <!-- <?php
                    while ($row = mysqli_fetch_assoc($mbuh)) {
                        echo "<tr>";
                        echo "<td>" . $row['users'] . "</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['tgl'] . "</td>";
                    }
                    ?> -->
                </tbody>
            </table>
        </form>
        
    </table>
</body>
</html>