<?php
    include("../service/koneksi.php");
    session_start();

    $login_message = "";

    if(isset($_SESSION["is_login"])) {
        header("location: index.php");

    }

    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'
        ";
        $result = $db->query($sql);
        
        if($result->num_rows > 0) {
            // echo "datanya ada";
            $data = $result->fetch_assoc();
            // echo $data["email"];
            // echo $data["password"];
            $_SESSION["id"] = $data["id"];
            $_SESSION["email"] = $data["email"];
            $_SESSION["password"] = $data["password"];
            $_SESSION["nama"] = $data["nama"];
            $_SESSION["tanggal_lahir"] = $data["tanggal_lahir"];
            $_SESSION["is_login"] = true ;

            header("location: index.php");

        }else {
            // echo "datanya tidak ada";
            $login_message = "gagal";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <style>
        #form {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>
<body>
    <div id="form" class="w-screen h-screen items-center flex bg-linear-190 from-sky-400 to-sky-800">
        <div class="m-auto border-4 border-gray-200 w-[750px] bg-gray-50 rounded-lg flex flex-col justify-center items-center shadow-xl">
            <div class="bg-gray-200 w-full pt-1 pb-2 flex justify-center">
                <div class="h-[20px] bg-gray-50 w-3/5 rounded-sm"></div>
            </div>
            <form action="form_login.php" method="POST" class="flex flex-col items-center gap-5 py-5">
                <div class="flex-col justify-center items-center">
                    <div class="flex justify-center">
                        <!-- <a href="../index.php" class="text-2xl font-semibold text-center text-sky-600">Walid ID</a> -->
                        <a href="../index.php"><img src="../assets/logo/walid_logo.jpg" alt="" class="h-[100px]"></a>
                    </div>
                    <p class="text-center text-sm text-gray-400">Masuk ke akun anda</p>
                    <!-- <p class="text-center text-sm text-gray-400"><?= $login_message ?></p> -->
                </div>
                <div class="bg-white rounded-full shadow-sm w-full p-1 flex justify-between text-center mb-8">
                    <!-- <p>Walid<b>ID</b></p> -->
                     <a href="" class="bg-sky-400 w-1/2 h-full p-1 rounded-full text-white">Log in</a>
                     <a href="form_register.php" class="w-1/2 h-full p-1 rounded-full text-sky-400 hover:text-sky-500">Register</a>
                </div>
                <div class="w-[400px] flex flex-col gap-5">
                    <div class="flex flex-col">
                        <label for="" class="text-sky-500 text-sm">Email</label>
                        <input class="border-b-1 border-sky-400 outline-none  text-sm py-1 text-gray-500" type="email" class="form-control" placeholder="example@gmail.com" name="email" required>
                    </div>
                    <div class="flex flex-col">
                        <label for="" class="text-sky-500 text-sm">Password</label>
                        <input class="border-b-1 border-sky-400 outline-none  text-sm py-1 text-gray-500" type="password" class="form-control" placeholder="lorem*123" name="password" required>
                    </div>
                    <button type="submit" name="login" class="bg-linear-100 from-sky-400 to-sky-700 text-white p-2 rounded-full my-4 cursor-pointer">Log in</button>
                </div>
            </form>
        </div>
    </div>

    <?php if($login_message === "gagal") : ?>
       <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Akun tidak ditemukan, silahkan coba lagi.'
            });
       </script>
    <?php endif; ?>
</body>
</html>