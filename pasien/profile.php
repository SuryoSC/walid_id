<?php
    include("../service/koneksi.php");
    session_start();

    $ganti_data_message = "";

    include "../session/session_user.php";

    if(isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header('location: form_login.php');
    }
    
    if(isset($_POST['simpan'])) {
        $id = $_SESSION['id'];
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "UPDATE users SET email='$email', password='$password', nama='$nama', tanggal_lahir='$tanggal_lahir' WHERE id=$id
        ";

        if(mysqli_query($db, $sql)) {
            // echo "Berhasil";
            $ganti_data_message = "sukses";

            // Mengupdate data pada tampilan
            $sql = "SELECT * FROM users WHERE id=$id
            ";
            $result = $db->query($sql);
            $data = $result->fetch_assoc();
            // echo $data["email"];
            // echo $data["password"];
            // echo $data["password"];
            // $_SESSION["id"] = $data["id"];
            $_SESSION["email"] = $data["email"];
            $_SESSION["password"] = $data["password"];
            $_SESSION["nama"] = $data["nama"];
            $_SESSION["tanggal_lahir"] = $data["tanggal_lahir"];

        }else {
            // echo "Gagal";
            $ganti_data_message = "gagal";
        }
    }

    if(isset($_POST["batal"])) {
        header("location: dashboard_pasien.php");

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>
<body>

    <?php if($ganti_data_message === "sukses") : ?>
       <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Data berhasil diganti.'
            });
       </script>
    <?php elseif ($ganti_data_message === "gagal") : ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Data gagal diganti.'
            });
        </script>
    <?php endif; ?>

    <div class="w-screen h-screen bg-linear-190 from-sky-400 to-sky-800 flex flex-col items-center justify-center">
        <div class="w-3/5">
            <p class="text-xl font-semibold text-white">Pengaturan Akun</p>
            <p class="text-gray-100">Atur data akun</p>
        </div>
        <div class="w-3/5 bg-gray-50 flex flex-row-reverse px-10 py-12 rounded-lg shadow-xl/10">
            <div class="w-1/3 h-full flex flex-col items-center">
                <img src="../assets/logo/walid_logo.jpg" alt="" class="w-2/3">
                <form action="profile.php" method="POST">
                    <button type="submit" name="logout" class="bg-linear-100 from-sky-400 to-sky-700 text-white p-2 rounded-full my-4 cursor-pointer w-[200px]">Logout</button>
                </form>
            </div>
            <form action="profile.php" method="POST" class="w-2/3 h-full flex flex-col items-center gap-5">
                <div class="flex flex-col w-4/5">
                    <label for="" class="text-sky-500 text-sm">Nama</label>
                    <input name="nama" class="outline-none border-b-1 border-sky-400 text-sm text-gray-500 py-1" type="text" value="<?= $_SESSION["nama"] ?>" required>
                </div>
                <div class="flex flex-col w-4/5">
                    <label for="" class="text-sky-500 text-sm">Tanggal Lahir</label>
                    <input name="tanggal_lahir" class="outline-none border-b-1 border-sky-400 text-sm text-gray-500 py-1" value="<?= $_SESSION["tanggal_lahir"] ?>" type="text" required>
                </div>
                <div class="flex flex-col w-4/5">
                    <label for="" class="text-sky-500 text-sm">Email</label>
                    <input name="email" class="outline-none border-b-1 border-sky-400 text-sm text-gray-500 py-1" value="<?= $_SESSION["email"] ?>" type="email" required>
                </div>
                <div class="flex flex-col w-4/5">
                    <label for="" class="text-sky-500 text-sm">Password</label>
                    <input name="password" class="outline-none border-b-1 border-sky-400 text-sm text-gray-500 py-1" value="<?= $_SESSION["password"] ?>" type="text" required>
                </div>

                <div class="flex flex-col justify-end items-center w-full h-[70px]">
                    <!-- <p class="text-center text-sm text-gray-400"> <?= $ganti_data_message ?> </p> -->
                    <div class="flex justify-between w-4/5">
                        <button name="batal" class="bg-sky-400 w-10/21 text-white p-2 rounded-full cursor-pointer">Kembali</button>
                        <button name="simpan" class="bg-sky-700 w-10/21 text-white p-2 rounded-full cursor-pointer">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>