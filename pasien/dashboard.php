<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Walid.id | Situs Resmi Walid Life Center (Official Website)</title>
    <style>

    * {
      font-family:"Josefin Sans", sans-serif;
    }

    a {
      text-decoration: none;
      color: black;
      font-size: 17px;
      padding: 2%;
      transition: .5s;
    }

    .navbaw a:hover {
      background-color: #00BFFF;
      color:  white;

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
      color:  black;
      font-size: 20px;
    }

    .artkes p {
      color:  #ADFF2F;
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

    .bgutama img{
      width: 100%;
      height: 250px;
      margin-bottom:10px;
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
      width:30%;

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
      width:100%;
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
      width:300px;
      height: 350px;
      margin-bottom: 10px;
    }



    .kemitraan {
      display: flex;
      flex-direction: column;
      margin-top: 50px;
    }

    .kemitraan img {
      width:500px;
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
    <div class="acontainer">

      <div class="anavbar">
          <div class="navtas">

            </div>
          <div class="navbaw">
            <a href="#s1"><b>BERANDA</b></a>
            <a href="about.php"><b>TENTANG</b></a>
            <a href="#s1"><b>LAYANAN</b></a>
            <a href="#s1"><b>SARAN & PENGADUAN</b></a>
          </div>
      </div>

      <div class="bgutama">
        <img src="../assets/img/bgwallid21.jpg" alt="">
      </div>

      <div class="menu1">
        <div class="m1kan">
          <div class="mjudul">
            <div class="features">
              <span><b>FITUR</b></span>
            </div>
          </div>
          <div class="mfeat">
            <div class="f1">
                <a href="#s1"><b>PENDAFTARAN ONLINE</b></a>
              </div>
                <div class="f2">
                <a href="#s1"><b>LIHAT NOMOR ANTREAN</b></a>
              </div>
                <div class="f3">
                <a href="#s1"><b>JADWAL DOKTER</b></a>
              </div>
              <div class="f4">
                <a href="#s1"><b>RIWAYAT PERIKSA PASIEN</b></a>
              </div>
            </div>
          </div>
          <div class="m1kir">
          <img src="../assets/img/poster-satu.jpg" alt="">
        </div>
      </div>

      <div class="runningtext">
        <span><b>SELAMAT DATANG DI WALID.ID | PENDAFTARAN ONLINE DAPAT DILAKUKAN SEHARI SEBELUMNYA MULAI PUKUL 13.00 WIB <!-- | SEMOGA HARIMU MENYENANGKAN  --></b></span>
      </div>

      <div class="galery">
        <div class="galkir">
          <img src="../assets/img/ranjang.jpeg" alt="">
        </div>
        <div class="galteng">
          <img src="../assets/img/loby.jpeg" alt="">
          <img src="../assets/img/dokter.jpeg" alt="">
        </div>
        <div class="galkan">
          <img src="../assets/img/canggih.jpeg" alt="">
        </div>
      </div>

      <div class="artikel">
        <div class="arttas">
          <span><b>ARTIKEL KESEHATAN</b></span>
        </div>
        <div class="artbaw">
          <div class="artkes">
            <div clas="artkesup">
              <a href="https://hellosehat.com/nutrisi/tips-makan-sehat/cara-memasak-sehat-tanpa-goreng/"><img src="../assets/img/Makanan Sehat.jpeg" alt=""></a>
            </div>
            <div class="artkesdown">
              <span><b>7 Alternatif Cara Memasak Makanan yang Tidak Digoreng</b></span>
              <a href="https://hellosehat.com/nutrisi/tips-makan-sehat/cara-memasak-sehat-tanpa-goreng/"><p><b>Selengkapnya > </b></p></a>
            </div>
          </div>
          <div class="artkes">
            <div clas="artkesup">
              <a href="https://hellosehat.com/penyakit-kulit/perawatan-kulit/cara-mencerahkan-kulit/"><img src="../assets/img/Leonardo dicaprio.jpeg" alt=""></a>
            </div>
            <div class="artkesdown">
              <span><b>Cara Lengkap Mencerahkan Kulit yang Kusam</b></span>
              <a href="https://hellosehat.com/penyakit-kulit/perawatan-kulit/cara-mencerahkan-kulit/"><p><b>Selengkapnya > </b></p></a>
            </div>
          </div>

          <div class="artkes">
            <div clas="artkesup">
              <a href="https://hellosehat.com/kebugaran/tips-olahraga/tanda-olahraga-berhasil/"><img src="../assets/img/Olahraga.jpeg" alt=""></a>
            </div>
            <div class="artkesdown">
              <span><b>8 Tanda Rutinitas Olahraga Berhasil dan Efektif Dilakukan</b></span>
              <a href="https://hellosehat.com/kebugaran/tips-olahraga/tanda-olahraga-berhasil/"><p><b>Selengkapnya > </b></p></a>
            </div>
          </div>

        </div>
      </div>

      <div class="kemitraan">
        <div class="kemtas">
          <span><b>PARTNERSHIP</b></span>
        </div>
        <div class="kembaw">
        <a href="https://kemkes.go.id/id/home"><img src="../assets/img/Ministry of Health of the republic of indonesia.png" alt=""></a>
        <a href="https://www.who.int/"><img src="../assets/img/Logo World Health Organization.png" alt=""></a>
        </div>
      </div>

      <div class="afooter">
        <div class="footas">

        </div>
        <div class="footbaw">
          <div class="fbtas">
            <p>Privacy Policy</p>
            <p>Terms of Service</p>
          </div>
          <div class="fbwah">
            <p>This website is © 2025 Walid Life Center. All rights reserved</p>
          </div>
        </div>
      </div>
    </div>
</body>

</html>