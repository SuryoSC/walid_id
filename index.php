<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets/theme/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/theme/dist/css/adminlte.min.css">
</head>
<style>
    h1,h2,h3,h4,h5,h6{
        font-size: 19px;
        color: #00BFFF;
    }

    .e-header {
        flex-direction: row;
    }

    .fb {
        font-size: 25px;
        font-weight: 500;
    }

    span {
        color: #000;
        opacity: 30%;
    }

    main{
        display: flex;
        flex-direction: column;
        gap: 60px;
    }
    
    .card{
           

    }
</style>

<body>
    <div class="e-container container-xl">
        <div class="e-header">
            <div class="e-kanan">
                <!-- Navbar -->
                <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
                    <div class="container">
                        <a href="../../index3.html" class="navbar-brand">
                            <img src="assets/theme/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                            <span class="brand-text font-weight-light">AdminLTE 3</span>
                        </a>

                        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                            <!-- Left navbar links -->
                            <ul class="navbar-nav">
                                <li class="nav-item">
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

                                        <li class="dropdown-divider"></li>

                                        <!-- Level two dropdown-->
                                        <li class="dropdown-submenu dropdown-hover">
                                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                                <li>
                                                    <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                                                </li>

                                                <!-- Level three dropdown-->
                                                <li class="dropdown-submenu">
                                                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                                                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                                                        <li><a href="#" class="dropdown-item">3rd level</a></li>
                                                        <li><a href="#" class="dropdown-item">3rd level</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Level three -->

                                                <li><a href="#" class="dropdown-item">level 2</a></li>
                                                <li><a href="#" class="dropdown-item">level 2</a></li>
                                            </ul>
                                        </li>
                                        <!-- End Level two -->
                                    </ul>
                                </li>
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
        </div>
        <main>
            <div class="card">
                <div class="card-group justify-content-evenly">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="services container text-center">
                <h2 class="fs-5 text-center">SERVICE</h2>
                <p class="fb">Service Rumah Sakit Walid</p>
                <p class="text-center"></p>
                <div class="container text-center">
                    <div class="row align-items-start">
                        <div class="col">
                            <img src="assets/img/dokterlagi.png" alt="">
                        </div>
                        <div class="col d-grid gap-5">
                            <p class="fb">masalah yang berlarut</p>
                            <span class="text-start fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, aspernatur ad? Sint architecto consequatur atque, debitis iusto, impedit quod, deleniti ea quaerat nesciunt similique dolor odit sit veritatis rem beatae adipisci sapiente perspiciatis harum placeat voluptas deserunt. Ipsum, illum quod.</span>
                            <button type="button" class="btn btn-block btn-primary">Primary</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container text-center">
                <div class="row align-items-start">
                    <div class="col">
                        <h2>Time Table</h2>
                        <p class="fb">Appointment Schedule</p>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit labo1
                            rum nemo facilis dicta, culpa nobis accusamus fuga voluptate, animi aut cumque. Odit est dolores quae repellendus perferendis. Hic, aspernatur impedit!</span>
                        <button type="button" class="btn btn-block btn-primary">Primary</button>
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
                                <img src="assets/img/dokter-preview.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="assets/img/dokter-preview.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="assets/img/dokter-preview.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
    <div class="e-footer">
    </div>
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
</body>

</html>

</body>

</html>