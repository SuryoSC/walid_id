<?php
    include("../service/koneksi.php");
    session_start();
    include ("../session/session_user.php");

    $id_jadwal = isset($_GET["id"]) ? $_GET["id"] : 0;

    // Ambil data antrian dengan JOIN ke tabel users dan jadwal
    $sql = "SELECT 
                antrian.id,
                users.nama AS nama_pasien,
                jadwal.tgl,
                jadwal.kloter,
                antrian.no,
                antrian.status
            FROM antrian
            JOIN users ON antrian.pasien = users.id
            JOIN jadwal ON antrian.jadwal = jadwal.id
            WHERE antrian.jadwal = $id_jadwal";

    $hasil = $db->query($sql);
    $antrian = [];
    while ($row = mysqli_fetch_assoc($hasil)) {
        $antrian[] = $row;
    }

    // Ambil semua jadwal untuk dropdown
    $select_tanggal = "SELECT id, tgl, kloter FROM jadwal";
    $result_tanggal = $db->query($select_tanggal);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Nomor Antrian</title>
</head>
<body>
    <div class="mx-auto w-[860px] bg-gray-50 rounded-sm mb-16 p-6 shadow-md mt-10">
        <form action="tampilan_daftar_antrian.php" method="GET">
            <label for="id" class="block text-gray-700 font-medium mb-1">Pilih Jadwal</label>
            <select name="id" id="id" required class="border border-gray-300 rounded-lg px-4 py-2 mb-3 focus:ring-2 focus:ring-sky-400 focus:outline-none transition duration-200">
                <option value="">Pilih Jadwal untuk melihat antrian</option>
                <?php
                if ($result_tanggal->num_rows > 0) {
                    while ($row = $result_tanggal->fetch_assoc()) {
                        $selected = ($row['id'] == $id_jadwal) ? "selected" : "";
                        echo "<option value='" . $row['id'] . "' $selected> " . $row['tgl'] . " (" . $row['kloter'] . ")</option>";
                    }
                } else {
                    echo "<option value=''>Tidak ada data</option>";
                }
                ?>
            </select>
            <button type="submit" name="cari" class="bg-sky-500 text-white rounded-md px-4 py-2 hover:bg-sky-600">Lihat Antrian</button>
        </form>

        <?php if (!empty($antrian)): ?>
        <table class="w-full rounded-lg mt-6">
            <thead>
                <tr class="text-white bg-sky-600">
                    <!-- <th class="px-4 py-3 text-left">ID</th> -->
                    <th class="px-4 py-3 text-left">No Antrian</th>
                    <th class="px-4 py-3 text-left">Pasien</th>
                    <th class="px-4 py-3 text-left">Tanggal</th>
                    <th class="px-4 py-3 text-left">Kloter</th>
                    <th class="px-4 py-3 text-left">Status</th>
                </tr>
            </thead>
            <tbody class="bg-white text-gray-700">
                <?php foreach ($antrian as $item): ?>
                <tr class="border-t">
                    <!-- <td class="px-4 py-3"><?= $item['id']; ?></td> -->
                    <td class="px-4 py-3"><?= $item['no']; ?></td>
                    <td class="px-4 py-3"><?= $item['nama_pasien']; ?></td>
                    <td class="px-4 py-3"><?= $item['tgl']; ?></td>
                    <td class="px-4 py-3"><?= ucfirst($item['kloter']); ?></td>
                    <td class="px-4 py-3"><?= ucfirst($item['status']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php elseif ($id_jadwal): ?>
            <p class="mt-6 text-gray-500">Belum ada antrian untuk jadwal yang dipilih.</p>
        <?php endif; ?>
    </div>
</body>
</html>
