<?php

session_start();

include '../session/session_user.php';

// if(){

// }

$alert = "";

if (isset($_POST["kirim"])) {
    $alert = "tampil";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saran & Pengaduan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            text-align: center;
            justify-content: center;
            align-items: center;
            gap: 3vh;
        }

        .gambar{
            width: 100%;
        }

        .gambar img{
            width: 100%;
        }

        .container {
            display: flex;
            text-align: center;
            justify-content: center;
        }
        .containere {
            display: flex;
            flex-direction: column;
            /* text-align: center;
            justify-content: center; */
        }

        nav{
            position: sticky;
            width: 100%;
            top: 0;
            z-index: 100;
        }
        
        .ab {
            display: flex;
            text-align: start;
            justify-content: center;
        }

        .custom-bg-background {
            background-color: #4E71FF;
        }

        * {
            font-family: "Josefin Sans", sans-serif;
        }

        a {
            text-decoration: none;
            color: black;
            font-size: 17px;
            height: 100%;
            transition: .3s;
            padding-left: 2%;
            padding-right: 2%;
            display: flex;
            align-items: center;
        }

        .navbaw a:hover {
            background-color: #00BFFF;
            color: white;

        }

        p {
            text-decoration: none;
            color: white;
            font-size: 17px;
        }

        .mjudul span {
            color: white;
            font-size: 20px;
        }

        .mfeat a {
            color: white;
            font-size: 17px;
            padding-left: 20px;
            text-decoration: none;
        }

        .mfeat a:hover {
            color: #ADFF2F;
        }

        .runningtext span {
            color: white;
            font-size: 15px;
        }

        .sliderdoc span {
            color: white;
            font-size: 25px;
        }

        .artikel span {
            color: black;
            font-size: 25px;
        }

        .artkes span {
            color: black;
            font-size: 20px;
        }

        .artkes p {
            color: #ADFF2F;
            font-size: 15px;
        }

        .kemitraan span {
            color: black;
            font-size: 25px;
        }

        .acontainer {
            height: 1000px;
            width: 90%;
            margin-left: 5%;
            margin-right: 5%;
        }

        .navtas {
            background-color: #00BFFF;
            height: 45px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: end;
        }

        .input-group-sm {
            border-radius: 100%;
        }

        .navbaw {
            background-color: white;
            height: 60px;
            /* padding-right: 50px; */
            display: flex;
            justify-content: right;
            align-items: center;
            /* gap: 50px; */

        }

        .bgutama {
            width: 100%;
        }

        .bgutama img {
            width: 100%;
            height: 250px;
            margin-bottom: 10px;
        }

        .menu1 {
            display: flex;
            flex-direction: row;
            gap: 1%;
        }

        .m1kan {
            display: flex;
            flex-direction: column;
            gap: 1px;
            width: 30%;

        }

        .features {
            width: 100%;
            height: 50px;
            background-color: #ADFF2F;
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: center;
            margin-bottom: 2px;
        }

        .f1 {
            width: 100%;
            height: 45px;
            background-color: #00BFFF;
            display: flex;
            text-align: center;
            align-items: center;
            margin-bottom: 2px;
        }

        .f2 {
            width: 100%;
            height: 45px;
            background-color: #55CCFF;
            display: flex;
            text-align: center;
            align-items: center;
            margin-bottom: 2px;
        }

        .f3 {
            width: 100%;
            height: 45px;
            background-color: #00BFFF;
            display: flex;
            text-align: center;
            align-items: center;
            margin-bottom: 2px;
        }

        .f4 {
            width: 100%;
            height: 45px;
            background-color: #55CCFF;
            display: flex;
            text-align: center;
            align-items: center;
            border-bottom: 2px white;
        }

        .m1kir img {
            width: 100%;
            height: 239px;
            /* margin-left: 10px; */
        }

        .m1kir {
            width: 100%;
            height: 100%;
            /* background-image: url('../assets/img/poster-satu.jpg');   */
            /* background-size: cover; */
            /* background-position: center;  */
        }

        .runningtext {
            width: 100%;
            height: 30px;
            background-color: #00BFFF;
            margin-top: 5px;
            margin-bottom: 10px;
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: center;
        }

        .galery {
            display: flex;
            width: 100%;
            gap: 1%;
            justify-content: space-between;
        }

        .galkir {
            display: flex;
            width: 33%;
        }

        .galkir img {
            /* height: 610px; */
            width: 100%;
        }

        .galteng {
            display: flex;
            flex-direction: column;
            width: 33%;
            justify-content: space-between;
            /* gap: 4%; */
        }

        .galteng img {
            width: 100%;
            height: 49%;
            /* margin-bottom: 10px; */
        }

        .galkan {
            display: flex;
            width: 33%;
        }

        .galkan img {
            width: 100%;
            /* height: 610px; */
        }

        .artikel {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .arttas {
            margin-top: 10px;
            margin-bottom: 50px;
        }

        .artbaw {
            display: flex;
            flex-direction: row;
            justify-content: center;
            gap: 50px;
        }

        .artkes {
            width: 300px;
            display: flex;
            flex-direction: column;
        }

        .artkes img {
            width: 300px;
            height: 350px;
            margin-bottom: 10px;
        }



        .kemitraan {
            display: flex;
            flex-direction: column;
            margin-top: 50px;
        }

        .kemitraan img {
            width: 500px;
        }

        .kemtas {
            display: flex;
            justify-content: center;
        }

        .kembaw {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .footas {
            background-color: #ADFF2F;
            height: 45px;
            width: 100%;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .footbaw {
            background-color: #00BFFF;
            height: 100px;
            width: 100%;
        }

        .fbtas {
            display: flex;
            flex-direction: row;
            justify-content: center;
            gap: 20px;
        }

        .fbwah {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <!-- <script>
        function showCustomAlert() {
            Swal.fire({
                title: "Drag me!",
                icon: "success",
                draggable: true
            });
    }
    </script> -->

    <?php if ($alert === "tampil") : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Data telah dikirm.',
                confirmButtonColor: '#00BFFF'
            });
        </script>
    <?php endif; ?>

    <nav>
        <div class="navtas">
            <a href="profile.php" style="height: 45px; display: flex; align-items: center; gap: 10px;">
                <p><?= $_SESSION['nama'] ?></p><i class='bx bxs-user-circle' style="font-size: 30px; color: #fff;"></i>
            </a>
        </div>
        <div class="navbaw">
            <a href="index.php"><b>BERANDA</b></a>
            <a href="about.php"><b>TENTANG</b></a>
            <a href="#s1"><b>LAYANAN</b></a>
            <a href="pengaduan.php"><b>SARAN & PENGADUAN</b></a>
        </div>
    </nav>

    <div class="gambar">
        <img src="../assets/img/download.jpg" alt="">
    </div>

    <div class="containere shadow p-3 mt-4" style="width: 100vh;">
        <main>
            <h1>Formulir Keluhan User Walid Life Center</h1>

            <div class="container ab row">
                <div class="row g-3"></div>

                <form action="" class="d-grid gap-5 col-12" method="POST">
                    <span>Identitas Diri</span>
                    <div class="mb-3 shadow p-3 rounded-2">
                        <label for="exampleFormControlInput1" class="form-label ">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" rows="12" required>
                    </div>
                    <div class="row g-2 shadow p-3 rounded-2">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Jenis Kelamin
                        </label>
                        <div class="form-check cursor-pointer">
                            <input class="form-check-input col-8 cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label cursor-pointer" for="flexRadioDefault1">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input pe-auto" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="mb-3 shadow p-3 rounded-2">
                        <label for="exampleFormControlTextarea1" class="form-label" row="8">Alamat</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" row="8" placeholder="Alamat"></textarea>
                    </div>
                    <div class="mb-3 shadow p-3 rounded-2">
                        <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Nomor" row="8">
                    </div>
                    <div class="mb-3 shadow p-3 rounded-2">
                        <label for="exampleFormControlInput1" class="form-label">Subject Pengaduan</label>
                        <textarea type="number" class="form-control" id="exampleFormControlInput1" placeholder="Aduan" row="8" required></textarea>
                    </div>
                    <div class="mb-3 shadow p-3 rounded-2">
                        <label for="exampleFormControlInput1" class="form-label">Uraian Pengaduan</label>
                        <textarea type="number" class="form-control" id="exampleFormControlInput1" placeholder="Uraian Aduan" row="8"></textarea>
                    </div>
                    <div class="submit d-flex justify-content-end">
                        <button onclick="ShowAlertCustom()" type="submit" class="custom-bg-background text-white border-0 px-4 py-2 rounded-2 row=12" name="kirim">Kirim</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>