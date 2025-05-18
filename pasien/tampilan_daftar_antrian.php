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
        <form action="">
            <table class="w-full rounded-lg">
                <tbody>
                    <tr class="text-gray-50">
                        <th class="px-2 py-3 text-left font-medium bg-sky-600 rounded-tl-sm pl-8">ID</th>
                        <th class="px-2 py-3 text-left font-medium bg-sky-600">Tanggal</th>
                        <th class="px-2 py-3 text-left font-medium bg-sky-600">Kloter</th>
                        <th class="px-2 py-3 text-left font-medium bg-sky-600">Dokter</th>
                        <th class="px-2 py-3 text-left font-medium bg-sky-600 rounded-tr-sm pr-8">Pilih</th>
                    </tr>
                    <?php foreach ($antrian as $item): ?>
                    <tr class="">
                        <td class="px-2 py-3 border-t-1 border-gray-200 pl-8"><?= $item['id']; ?></td>
                        <td class="px-2 py-3 border-t-1 border-gray-200"><?= $item['pasien']; ?></td>
                        <td class="px-2 py-3 border-t-1 border-gray-200"><?= $item['jadwal']; ?></td>
                        <td class="px-2 py-3 border-t-1 border-gray-200 pr-8">
                            <?= isset($dokter_map[$item['dokter']]) ? $dokter_map[$item['dokter']] : 'Tidak diketahui'; ?>
                        </td>
                        <!-- <td class="px-2 py-3 border-t-1 border-gray-200"><?= $item['kloter']; ?></td> -->
                        <td class="px-2 py-3 border-t-1 border-gray-200"><a href="isi.php?id=<?php echo $item['id']?>" class="bg-sky-500 text-white px-3 py-1 rounded-sm hover:bg-sky-600">Daftar</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </form>
        
    </table>
</body>
</html>