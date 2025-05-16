<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets/theme/plugins/fontawesome-free/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/theme/dist/css/adminlte.min.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
html {
    scroll-behavior: smooth;
}

body {
    background: rgb(240, 240, 240);
}

* {
    font-family: "Josefin Sans", sans-serif;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-size: 16px;
    color: #00BFFF;
}

.e-header {
    flex-direction: row;
}

.fb {
    font-size: 39px;
    font-weight: 500;
    text-align: left;
}

#janji {
    text-align: center !important;
}

span {
    color: #000;
    opacity: 30%;
}

main {
    display: flex;
    flex-direction: column;
    gap: 200px;
}

.card {
    background-color: #2973B2;
    color: white;
}

#jjtm {
    background-color: white;
    color: #2973B2;
}

button {
    background-color: #00BFFF;
}

/* box-icon{
        font-size: 70px;
    } */

section {
    display: flex;
}

.kiris {
    display: flex;
    align-items: center;
}

.text {
    width: 50%;
}

.kanans {
    display: flex;
    align-items: baseline;
    justify-content: center;
    /* overflow: hidden; */
    background-color: #2973B2;
    border-radius: 50%;
}

.kanans img .cardb {
    background-color: rgba(0, 191, 255, 0.98);
    width: 80%;
}

.lyn {
    /* border: rgba(0, 191, 255, 0.98) 3px solid; */
    border-radius: 6px;
    padding: 20px;
    /* background: #fff; */
    /* box-shadow: grey 2px 2px 20px 5px; */
}

i {
    font-size: 40px;
}
</style>

<body>
    <div class="e-container container-xl">
        <header class="e-header">
            <div class="e-kanan">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg bg-body-tertiary justify-content-center">
                    <div class="container justify-content-between" style="width: 100%;">
                        <a href="../../index3.html" class="navbar-brand">
                            <img src="assets/logo/walid_logo-removebg.png" alt="AdminLTE Logo"
                                class="brand-image img-circle elevation-3" style="opacity: .8" width="80px">
                            <span class="brand-text font-weight-light">Walid ID</span>
                        </a>


                        <div class="collapse navbar-collapse order-3 justify-content-end" id="navbarCollapse">
                            <!-- Left navbar links -->
                            <ul class="navbar-nav">
                                <!-- <li class="nav-item">
                                    <a href="index3.html" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Contact</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                        <li><a href="#" class="dropdown-item">Some action </a></li>
                                        <li><a href="#" class="dropdown-item">Some other action</a></li>

                                        <li class="dropdown-divider"></li> -->

                                <!-- Level two dropdown-->
                                <!-- <li class="dropdown-submenu dropdown-hover">
                                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                                <li>
                                                    <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                                                </li> -->

                                <!-- Level three dropdown-->
                                <!-- <li class="dropdown-submenu">
                                                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                                                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                                                        <li><a href="#" class="dropdown-item">3rd level</a></li>
                                                        <li><a href="#" class="dropdown-item">3rd level</a></li>
                                                    </ul>
                                                </li> -->
                                <!-- End Level three -->

                                <!-- <li><a href="#" class="dropdown-item">level 2</a></li>
                                                <li><a href="#" class="dropdown-item">level 2</a></li>
                                            </ul>
                                        </li> -->
                                <!-- End Level two -->
                                <!-- </ul>
                                </li> -->
                                <li><a href="pasien/form_login.php"><button type="button"
                                            class="btn btn-block btn-primary">Log In</button></a></li>
                                <li><a href="pasien/form_register.php"><button type="button"
                                            class="btn btn-block btn-outline-primary">Sign Up</button></a></li>
                            </ul>
                        </div>


                        </ul>
                    </div>
                </nav>
                <!-- /.navbar -->

            </div>
            <div class="e-kiri">
                <!-- <img src="assets/img/walid.jpg" alt=""> -->
            </div>
        </header>
        <main>
            <section>
                <div class="kiris">
                    <div class="text">
                        <h1>Walid ID</h1>
                        <p class="fb">Solusi Kesehatan</p>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequuntur adipisci
                            nemo quisquam vero quae commodi velit porro corrupti explicabo.</span>
                    </div>
                </div>
                <div class="kanans">
                    <img src="assets/img/Dokter-removebg.png" alt="">
                </div>
            </section>
            <div class="cardb">
                <div class="card-group justify-content-between">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Jadwal Buka</p>
                            <i class='bx bx-time-five'></i>
                            <p class="card-text"><small class="text-body-secondary">Senin - Kamis Pagi: Jam 08.00 -
                                    12.00</small></p>
                            <p class="card-text"><small class="text-body-secondary">Senin - Kamis Sore: Jam 12.30 -
                                    17.00</small></p>
                            <p class="card-text"><small class="text-body-secondary">Jumat - Minggu Pagi: Jam 08.00 -
                                    12.00</small></p>
                            <p class="card-text"><small class="text-body-secondary">Jumat - Minggu Sore: Jam 12.30 -
                                    17.00</small></p>
                            <p class="card-text"><small class="text-body-secondary">Tutup ketika libur</small></p>
                        </div>
                    </div>
                    <div class="card" id="jjtm">
                        <div class="card-body">
                            <p class="card-text">Janji Temu</p>
                            <i class='bx bx-calendar'></i>
                            <p class="card-text"><small class="text-body-secondary">Atur janji anda dengan mendaftar dan
                                    dapatkan tiket untuk berobat.</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Cari Dokter</p>
                            <i class='bx bx-male-female'></i>
                            <p class="card-text"><small class="text-body-secondary">Lihat profil dokter yang kami
                                    miliki. Telusuri tentang dokter yang akan memperbaiki kesehatan anda.</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="services container ">
                <h2 class="fs-5 text-center">SERVICE</h2>
                <p class="fb text-center">Service Rumah Sakit Walid</p>
                <p class="text-center"></p>
                <div class="container text-center shadow-lg p-3 rounded-3">
                    <div class="row align-items-center lyn">
                        <div class="col">
                            <img src="assets/img/karakterdokter-removebg.png" alt="">
                        </div>
                        <div class="col d-grid gap-5 text-start">
                            <p class="fb text-start">Layanan Rawat Inap</p>
                            <p class="fb text-start">Layanan Gawat Darurat (UGD)</p>
                            <p class="fb text-start"> Layanan Penunjang Medis</p>
                            <p class="fb text-start">Layanan Khusus</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container text-center">
                <div class="row align-items-start">
                    <div class="col">
                        <h2>Jadwal Waktu</h2>
                        <p class="fb" id="janji">Janji Temu</p>
                        <span>Segera daftarkan diri Anda untuk memperoleh antrean sesuai dengan hari dan jam yang Anda
                            inginkan, sehingga Anda dapat mengatur waktu dengan lebih fleksibel dan memastikan bahwa
                            Anda mendapatkan slot yang paling sesuai dengan jadwal Anda.</span>
                    </div>
                    <div class="col">
                        <img src="assets/img/kalender.png" alt="">
                    </div>
                </div>
            </div>

            <div class="team">
                <h2 class="fs-5 text-center">TEAM</h2>
                <p class="fb text-center">Dokter Kami</p>
                <div class="container text-center">
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="assets/img/dr_budi.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">dr. Aldyaz Budi Pratama</p>
                                    <p class="card-text">Keahlian : Umum</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="assets/img/dr_fakhri.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">dr. Muhammad Fakhri BP</p>
                                    <p class="card-text">Keahlian : Umum</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="assets/img/dr_syarif.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">dr. Muhammad Syarif Hidayat</p>
                                    <p class="card-text">Keahlian : Umum</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
    <footer class="e-footer container-fluid">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
    </footer>
    </div>

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="assets/theme/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/theme/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/theme/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="assets/theme/dist/js/demo.js"></script>
    <!-- box-icons -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>

</body>

</html>