<?php
include "../service/koneksi.php";

$sql = "SELECT id, nama FROM dokter";
$result = $db->query($sql);

$swal_status = "";

if (isset($_POST['submit'])) {
    $tgl = $_POST['tanggal'];
    $kloter = $_POST['kloter'];
    $dokter = $_POST['dokter'];

    $sql2 = "INSERT INTO jadwal (tgl, kloter, dokter) VALUES ('$tgl', '$kloter', '$dokter')";

    $swal_status = $db->query($sql2) ? "success" : "error";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buat Jadwal</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --main-blue: #00BFFF;
        }
        .btn-blue {
            background-color: var(--main-blue);
        }
        .btn-blue:hover {
            background-color: #009acd;
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-white via-sky-100 to-blue-100 flex items-center justify-center p-6">

    <div class="bg-white shadow-2xl rounded-xl w-full max-w-md p-8 transition-all">
        <h2 class="text-3xl font-extrabold text-center text-[#00BFFF] mb-6"> Buat Jadwal Pemeriksaan</h2>

        <form action="buat_jadwal.php" method="POST" class="space-y-5">
            <div>
                <label for="tanggal" class="block text-gray-700 font-medium mb-1">Tanggal Pemeriksaan</label>
                <input type="date" name="tanggal" id="tanggal" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#00BFFF] focus:outline-none transition duration-200 shadow-sm">
            </div>

            <div>
                <label for="kloter" class="block text-gray-700 font-medium mb-1">Kloter</label>
                <select name="kloter" id="kloter" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#00BFFF] focus:outline-none transition duration-200 shadow-sm">
                    <option value="">Pilih Kloter</option>
                    <option value="pagi"> Pagi</option>
                    <option value="sore"> Sore</option>
                </select>
            </div>

            <div>
                <label for="dokter" class="block text-gray-700 font-medium mb-1">Pilih Dokter</label>
                <select name="dokter" id="dokter" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#00BFFF] focus:outline-none transition duration-200 shadow-sm">
                    <option value="">Pilih Dokter</option>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['id'] . "'> " . $row['nama'] . "</option>";
                        }
                    } else {
                        echo "<option value=''>Tidak ada data</option>";
                    }
                    ?>
                </select>
            </div>

            <div>
                <button type="submit" name="submit"
                    class="btn-blue w-full text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 text-lg">
                    Simpan Jadwal
                </button>
            </div>
        </form>
    </div>

    <?php if ($swal_status === "success") : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Data berhasil disimpan.',
                confirmButtonColor: '#00BFFF'
            });
        </script>
    <?php elseif ($swal_status === "error") : ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Terjadi kesalahan saat menyimpan data.',
                confirmButtonColor: '#EF4444'
            });
        </script>
    <?php endif; ?>

</body>

</html>
