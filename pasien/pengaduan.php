<?php

    $alert = "";

    if(isset($_POST["kirim"])) {
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
            text-align: center;
            justify-content: center;
        }

        .container {
            display: flex;
            text-align: center;
            justify-content: center;
        }

        .ab {
            display: flex;
            text-align: start;
            justify-content: center;
        }

        .custom-bg-background {
            background-color: #4E71FF;
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

    <div class="container shadow p-3 mt-4">
        <nav>
        </nav>
        <main>
            <h1>Formulir Keluhan User Walid Life Center</h1>

            <div class="container ab row">
                <div class="row g-3" ></div>

                <form action="" class="d-grid gap-5 col-12" method="POST">
                    <span>Identitas Diri</span>
                    <div class="mb-3 shadow p-3 rounded-2">
                        <label for="exampleFormControlInput1" class="form-label ">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" rows="12">
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
                        <textarea type="number" class="form-control" id="exampleFormControlInput1" placeholder="Aduan" row="8"></textarea>
                    </div>
                    <div class="mb-3 shadow p-3 rounded-2">
                        <label for="exampleFormControlInput1" class="form-label">Uraian Pengaduan</label>
                        <textarea type="number" class="form-control" id="exampleFormControlInput1" placeholder="Uraian Aduan" row="8"></textarea>
                    </div>
                    <div class="submit d-flex justify-content-end">
                        <button onclick= "ShowAlertCustom()" type="submit" class="custom-bg-background text-white border-0 px-4 py-2 rounded-2" name="kirim">Kirim</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>