<?php
    include "../service/koneksi.php";
    session_start();

    if(!isset($_SESSION['id'])) {
        header('location: login.php');
        exit();
    }

    if(isset($_POST["logout"])) {
        session_unset();
        session_destroy();
        header("location: login.php");
    }

    $nama_dokter = $_SESSION['nama'];
    $id_dokter = $_SESSION['id'];
    // echo $id_dokter;

    $sql_dokter = "SELECT * FROM jadwal WHERE id=$id_dokter";
    $result_dokter = $db->query($sql_dokter);
    // var_dump($result_dokter);

    $data_dokter = $result_dokter->fetch_assoc();
    
    $sql_antrian = "SELECT * FROM antrian WHERE ";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Dokter | Walid ID</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --main-blue: #00BFFF;
        }
        .primary-bg {
            background-color: var(--main-blue);
        }
        .primary-text {
            color: var(--main-blue);
        }
        .primary-hover:hover {
            background-color: #009acd;
        }
        
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-50 shadow-lg flex flex-col ">
        <div class="text-center py-6 border-b flex flex-col items-center justify-center gap-2">
            <img src="../assets/logo/walid_logo.jpg" alt="" class="w-32 h-32" >
            <h1 class="text-2xl font-bold text-[#00BFFF]"> Walid ID</h1>
            <p class="text-sm text-gray-500">Dashboard Dokter</p>
        </div>
        <nav class="flex-1 px-6 py-4 space-y-4">
            <a href="jadwal_dokter.php" class="block py-2 px-4 rounded-md text-gray-700 hover:bg-blue-100">📋 Jadwal Dokter</a>
            <a href="panggil.php" class="block py-2 px-4 rounded-md text-gray-700 hover:bg-blue-100">📆 Panggil Pasien &<br>📋 Buat Rekam Medis</a>
            <form action="index.php" method="post" href="#" class=""><button type="submit" name="logout" class="w-full block py-2 px-4 rounded-md text-red-500 hover:bg-red-100 cursor-pointer text-left">🚪 Logout</button></form>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        <header class="mb-6">
            <h2 class="text-3xl font-bold text-gray-800">Selamat Datang, <span class="primary-text">dr. <?= $nama_dokter ?></span></h2>
            <!-- <p class="text-gray-600">Berikut ringkasan aktivitas</p> -->
        </header>

        <!-- <section class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
            <div class="bg-white rounded-lg shadow p-6 border-l-4 border-[#00BFFF]">
                <h3 class="text-xl font-semibold text-gray-800">📄 Total Rekam Medis</h3>
                <p class="text-3xl font-bold mt-2 text-[#00BFFF]">152</p>
                <p class="text-gray-500 mt-1">Rekam medis pasien yang Anda kelola</p>
            </div>

            <div class="bg-white rounded-lg shadow p-6 border-l-4 border-[#00BFFF]">
                <h3 class="text-xl font-semibold text-gray-800">🕒 Jadwal Hari Ini</h3>
                <p class="text-3xl font-bold mt-2 text-[#00BFFF]">5 Pasien</p>
                <p class="text-gray-500 mt-1">Pemeriksaan terjadwal untuk hari ini</p>
            </div>
        </section> -->

        <!-- <section>
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Akses Cepat</h3>
            <div class="flex flex-wrap gap-4">
                <a href="#"
                    class="bg-[#00BFFF] hover:bg-[#009acd] text-white font-semibold py-3 px-6 rounded-lg shadow transition duration-300">
                    ➕ Tambah Rekam Medis
                </a>
                <a href="#"
                    class="bg-white border border-[#00BFFF] text-[#00BFFF] hover:bg-blue-50 font-semibold py-3 px-6 rounded-lg shadow transition duration-300">
                    📋 Lihat Semua Rekam Medis
                </a>
            </div>
        </section> -->
    </main>

</body>

</html>
