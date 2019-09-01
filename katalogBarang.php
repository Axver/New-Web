<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <meta charset="utf-8" /> -->
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Health_beautyofficial
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />

</head>

<body class="index-page sidebar-collapse" onload="modal()">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <img src="image/logi_asli.png" alt="" srcset="">

        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
              <i class="material-icons">layers</i> Hubungi Admin
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://api.whatsapp.com/send?phone=086576199777&text=Hai Admin, saya ingin bertanya seputar produk" target="_blank" data-original-title="Follow us on Twitter">
              <i class="fa fa-whatsapp"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/Health_beautyofficial" target="_blank" data-original-title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('image/gb2.jpeg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1>Health Beauty<sup><i class="fa fa-diamond"></i></sup></h1>
            <h3>Health Beauty Official Store</h3>
            <button class='btn btn-info' onclick="homeNya()">Home</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="section section-basic">
      <div class="container">
        <div class='row'>
          <div class='col-sm-6'>
            <?php


            ?></div>
          <div class='col-sm-6'>

          </div>
        </div>



      </div>

    </div>
    <div class="section section-navbars cd-section" id="navigation">
      <div class="container">
        <h2><b>Paket Spirulina</b></h2>

        <?php
        include "daftarBarang.php";
        ?>
        <h2><b>Produk Lain</b></h2>
        <div class='panel panel-info'>
          <div class='panel-head'>
            <b>ZINC tiens 2019 baru tianshi
ZINC CAPSULES Tiens | Imunitas & Hormon | Pertumbuhan Anak dan Dewasa</b>
            <strike style='color:red'><b>50% OFF</b></strike>
            <h3><b></b></h3>
          </div>

          <div class='panel-body'>
            <div class="thumbnail">

              <img src="image/produk/zinc.jpg" alt="Nature" style="width:100%">

            </div>


            <button class='btn btn-primary' onclick="beliPaket('ZINC Capsules TIENS')">Beli</button>
          </div>
        </div>

        <div class='panel panel-info'>
          <div class='panel-head'>
            <b>VITALINE SOFTGEL Tiens | Vitality Tianshi | Kecantikan Kulit | Mencerahkan Kulit</b>
            <strike style='color:red'><b>50% OFF</b></strike>
            <h3><b></b></h3>
          </div>

          <div class='panel-body'>
            <div class="thumbnail">

              <img src="image/produk/vitaline_softgels.jpg" alt="Nature" style="width:100%">

            </div>


            <button class='btn btn-primary' onclick="beliPaket('Vitaline Softgels TIENS')">Beli</button>
          </div>
        </div>

        <div class='panel panel-info'>
          <div class='panel-head'>
            <b>SPIRULINA Tiens | Ganggang Hijau Terbaik | Sumber Protein Alami | Vitamin Gizi Lengkap</b>
            <strike style='color:red'><b>50% OFF</b></strike>
            <h3><b></b></h3>
          </div>

          <div class='panel-body'>
            <div class="thumbnail">

              <img src="image/produk/spirulina.jpg" alt="Nature" style="width:100%">

            </div>


            <button class='btn btn-primary' onclick="beliPaket('Spirulina TIENS')">Beli</button>
          </div>
        </div>

        <div class='panel panel-info'>
          <div class='panel-head'>
            <b>JIANG ZHI TEA Tiens | Teh Kesehatan Tianshi | Penghancur Lemak Kolesterol | Pelangsing</b>
            <strike style='color:red'><b>50% OFF</b></strike>
            <h3><b></b></h3>
          </div>

          <div class='panel-body'>
            <div class="thumbnail">

              <img src="image/produk/jiang.jpg" alt="Nature" style="width:100%">

            </div>


            <button class='btn btn-primary' onclick="beliPaket('Jiang Zhi Tea')">Beli</button>
          </div>
        </div>

        <div class='panel panel-info'>
          <div class='panel-head'>
            <b>MUNCORD Tiens | Cordiseps Tianshi | Pelindung 5 Organ Tubuh Utama</b>
            <strike style='color:red'><b>50% OFF</b></strike>
            <h3><b></b></h3>
          </div>

          <div class='panel-body'>
            <div class="thumbnail">

              <img src="image/produk/muncord.jpg" alt="Nature" style="width:100%">

            </div>


            <button class='btn btn-primary' onclick="beliPaket('Muncord')">Beli</button>
          </div>
        </div>

        <div class='panel panel-info'>
          <div class='panel-head'>
            <b>Nutrien Calcium Powder Tiens | Kalsium Tianshi | Kesehatan Tulang</b>
            <strike style='color:red'><b>50% OFF</b></strike>
            <h3><b></b></h3>
          </div>

          <div class='panel-body'>
            <div class="thumbnail">

              <img src="image/produk/calcium.jpg" alt="Nature" style="width:100%">

            </div>


            <button class='btn btn-primary' onclick="beliPaket('Nutrien Calcium Powder')">Beli</button>
          </div>
        </div>

        <div class='panel panel-info'>
          <div class='panel-head'>
            <b>CALCIUM POWDER FOR CHILDREN Tiens | Kalsium Anak | Vitamin Pertumbuhan Anak</b>
            <strike style='color:red'><b>50% OFF</b></strike>
            <h3><b></b></h3>
          </div>

          <div class='panel-body'>
            <div class="thumbnail">

              <img src="image/produk/calcium_children.png" alt="Nature" style="width:100%">

            </div>


            <button class='btn btn-primary' onclick="beliPaket('Nutrien Calcium Powder For Children')">Beli</button>
          </div>
        </div>

        <div class='panel panel-info'>
          <div class='panel-head'>
            <b>CHITIN CHITOSAN Tiens | Serat Hewani Alami Tianshi | Mengatasi Kolesterol & Diabetes</b>
            <strike style='color:red'><b>50% OFF</b></strike>
            <h3><b></b></h3>
          </div>

          <div class='panel-body'>
            <div class="thumbnail">

              <img src="image/produk/chitosen.jpg" alt="Nature" style="width:100%">

            </div>


            <button class='btn btn-primary' onclick="beliPaket('Chitin Chitosan')">Beli</button>
          </div>
        </div>

        <div class='panel panel-info'>
          <div class='panel-head'>
            <b>RENUVES Tiens | Beneficial Tianshi | Ginseng Dingin | Kesehatan Pernapasan</b>
            <strike style='color:red'><b>50% OFF</b></strike>
            <h3><b></b></h3>
          </div>

          <div class='panel-body'>
            <div class="thumbnail">

              <img src="image/produk/renuves.jpg" alt="Nature" style="width:100%">

            </div>


            <button class='btn btn-primary' onclick="beliPaket('Renuves')">Beli</button>
          </div>
        </div>

        <div class='panel panel-info'>
          <div class='panel-head'>
            <b>CALCIUM CHEWABLE Tiens | Kalsium Tablet Tianshi | Menjaga Kesehatan Tulang
CALCIUM CHEWABLE Tiens | Kalsium Tablet Tianshi | Menjaga Kesehatan Tulang
</b>
            <strike style='color:red'><b>50% OFF</b></strike>
            <h3><b></b></h3>
          </div>

          <div class='panel-body'>
            <div class="thumbnail">

              <img src="image/produk/calcium_chewable.jpg" alt="Nature" style="width:100%">

            </div>


            <button class='btn btn-primary' onclick="beliPaket('Calcium Chewable')">Beli</button>
          </div>
        </div>

        <div class='panel panel-info'>
          <div class='panel-head'>
            <b>DOUBLE CELLULOSE Tiens | Serat Ganda Alami | Melancarkan BAB & Sembelit</b>
            <strike style='color:red'><b>50% OFF</b></strike>
            <h3><b></b></h3>
          </div>

          <div class='panel-body'>
            <div class="thumbnail">

              <img src="image/produk/double_celulose.jpg" alt="Nature" style="width:100%">

            </div>


            <button class='btn btn-primary' onclick="beliPaket('Double Celulose')">Beli</button>
          </div>
        </div>



        <div class='panel panel-info'>
          <div class='panel-head'>
            <b>GLUCOSAMIN Tiens | Kesehatan Persendian | Perbaikan Tulang Rawan</b>
            <strike style='color:red'><b>50% OFF</b></strike>
            <h3><b></b></h3>
          </div>

          <div class='panel-body'>
            <div class="thumbnail">

              <img src="image/produk/glukosamine.jpg" alt="Nature" style="width:100%">

            </div>


            <button class='btn btn-primary' onclick="beliPaket('GLUCOSAMIN Tiens | Kesehatan Persendian | Perbaikan Tulang Rawan')">Beli</button>
          </div>
        </div>

        <div class='panel panel-info'>
          <div class='panel-head'>
            <b>GRAPE EXTRACT TIENS
Grape Extract Tiens | Vigor Tianshi | Mengatasi Kolesterol dan Darah Tinggi
</b>
            <strike style='color:red'><b>50% OFF</b></strike>
            <h3><b></b></h3>
          </div>

          <div class='panel-body'>
            <div class="thumbnail">

              <img src="image/produk/grape.jpg" alt="Nature" style="width:100%">

            </div>


            <button class='btn btn-primary' onclick="beliPaket('GRAPE Extract TIENS')">Beli</button>
          </div>
        </div>


        <div class='panel panel-info'>
          <div class='panel-head'>
            <b>DIACONT Tiens | Mengatasi Diabetes | Kencing Manis | Penyakit Gula | Tianshi
            <strike style='color:red'><b>50% OFF</b></strike>
            <h3><b></b></h3>
          </div>

          <div class='panel-body'>
            <div class="thumbnail">

              <img src="image/produk/diacont.jpg" alt="Nature" style="width:100%">

            </div>


            <button class='btn btn-primary' onclick="beliPaket('DIACONT Tiens | Mengatasi Diabetes | Kencing Manis | Penyakit Gula | Tianshi')">Beli</button>
          </div>
        </div>

        <div class='panel panel-info'>
          <div class='panel-head'>
            <b>SHUTANG CALCIUM POWDER Tiens | Kalsium Diabetes Tianshi | Mengatasi Kencing Manis
            <strike style='color:red'><b>50% OFF</b></strike>
            <h3><b></b></h3>
          </div>

          <div class='panel-body'>
            <div class="thumbnail">

              <img src="image/produk/shutang.jpg" alt="Nature" style="width:100%">

            </div>


            <button class='btn btn-primary' onclick="beliPaket('SHUTANG CALCIUM POWDER Tiens | Kalsium Diabetes Tianshi | Mengatasi Kencing Manis')">Beli</button>
          </div>
        </div>

        <div class='panel panel-info'>
          <div class='panel-head'>
            <b>NONITREND Tiens | Extract Sari Buah Mengkudu Tianshi | Asli Indonesia
            <strike style='color:red'><b>50% OFF</b></strike>
            <h3><b></b></h3>
          </div>

          <div class='panel-body'>
            <div class="thumbnail">

              <img src="image/produk/nonitrend.jpg" alt="Nature" style="width:100%">

            </div>


            <button class='btn btn-primary' onclick="beliPaket('NONITREND Tiens | Extract Sari Buah Mengkudu Tianshi | Asli Indonesia')">Beli</button>
          </div>
        </div>

        <div class='panel panel-info'>
          <div class='panel-head'>
            <b>Paket Pembalut Wanita Airiz Tiens Day Night dan Pantyliner Herbal Alami
            <strike style='color:red'><b>50% OFF</b></strike>
            <h3><b></b></h3>
          </div>

          <div class='panel-body'>
            <div class="thumbnail">

              <img src="image/produk/airiz.jpg" alt="Nature" style="width:100%">

            </div>


            <button class='btn btn-primary' onclick="beliPaket('Paket Pembalut Wanita Airiz Tiens Day Night dan Pantyliner Herbal Alami')">Beli</button>
          </div>
        </div>

        <div class='panel panel-info'>
          <div class='panel-head'>
            <b>Paket Pembersih dan Perawatan Tubuh Tiens | Tianshi Shampoo Conditioner dan Pasta Gigi Herbal
            <strike style='color:red'><b>50% OFF</b></strike>
            <h3><b></b></h3>
          </div>

          <div class='panel-body'>
            <div class="thumbnail">

              <img src="image/produk/shampo.jpg" alt="Nature" style="width:100%">

            </div>


            <button class='btn btn-primary' onclick="beliPaket('Paket Pembersih dan Perawatan Tubuh Tiens | Tianshi Shampoo Conditioner dan Pasta Gigi Herbal')">Beli</button>
          </div>
        </div>

        <div class='panel panel-info'>
          <div class='panel-head'>
            <b>Accupoint Treasure Tiens Double Pen | Alat Akupuntur Tiens 2 Pen Dengan Batu Giok
            <strike style='color:red'><b>50% OFF</b></strike>
            <h3><b></b></h3>
          </div>

          <div class='panel-body'>
            <div class="thumbnail">

              <img src="image/produk/accupoint.jpg" alt="Nature" style="width:100%">

            </div>


            <button class='btn btn-primary' onclick="beliPaket('Accupoint Treasure Tiens Double Pen | Alat Akupuntur Tiens 2 Pen Dengan Batu Giok')">Beli</button>
          </div>
        </div>

        <div class='panel panel-info'>
          <div class='panel-head'>
            <b>Kalung Aura Energy Stone Tiens Untuk Kesehatan| Barang Langka | Banyak Dicari
            <strike style='color:red'><b>50% OFF</b></strike>
            <h3><b></b></h3>
          </div>

          <div class='panel-body'>
            <div class="thumbnail">

              <img src="image/produk/kalung.jpg" alt="Nature" style="width:100%">

            </div>


            <button class='btn btn-primary' onclick="beliPaket('Kalung Aura Energy Stone Tiens Untuk Kesehatan| Barang Langka | Banyak Dicari')">Beli</button>
          </div>
        </div>


      </div>




    </div>

    <div class='row'>
      <div class='col-sm-3'> <button class='btn btn-info' style='width:80%' onclick="produkKesehatan()">Produk Kesehatan</button><button class='btn btn-primary' onclick="infoKesehatan()"><i class="fa fa-info"></i></button></div>
      <div class='col-sm-3'> <button class='btn btn-info' style='width:80%' onclick="produkKecantikan()">Produk Kecantikan</button><button class='btn btn-primary' onclick="infoKecantikan()"><i class="fa fa-info"></i></button></div>
      <div class='col-sm-3'> <button class='btn btn-info' style='width:80%' onclick="produkPeninggi()">Produk Peninggi</button><button class='btn btn-primary' onclick="infoPeninggi()"><i class="fa fa-info"></i></button></div>
      <div class='col-sm-3'> <button class='btn btn-info' style='width:80%' onclick="produkMata()">Mata Minus</button><button class='btn btn-primary' onclick="infoMata()"><i class="fa fa-info"></i></button></div>
    </div>

    <div class='row'>
      <div class='col-sm-3'> <button class='btn btn-info' style='width:80%' onclick="produkTambahBerat()">Tambah Berat</button><button class='btn btn-primary' onclick='infoBerat()'><i class="fa fa-info"></i></button></div>
      <div class='col-sm-3'> <button class='btn btn-info' style='width:80%' onclick="produkPelangsing()">Pelangsing</button><button class='btn btn-primary' onclick="infoPelangsing()"><i class="fa fa-info"></i></button></div>

      <div class='col-sm-3'> <button class='btn btn-info' style='width:80%' onclick="produkSA()">Suplement Anak</button><button class='btn btn-primary' onclick="infoAnak()"><i class="fa fa-info"></i></button></div>
      <div class='col-sm-3'> <button class='btn btn-info' style='width:80%' onclick="produkStamina()">Stamina Pria</button><button class='btn btn-primary' onclick="infoStamina()"><i class="fa fa-info"></i></button></div>

    </div>

    <div class='row'>
      <div class='col-sm-3'> <button class='btn btn-info' style='width:80%' onclick="produkPembalut()">Pembalut Airiz</button><button class='btn btn-primary' onclick="infoPembalut()"><i class="fa fa-info"></i></button></div>
      <!-- <div class='col-sm-1'> <button class='btn btn-info' style='width:100%' onclick="dataDiabetes()">Diabetes</button></div> -->
      <div class='col-sm-3'> <button class='btn btn-info' style='width:80%' onclick="showAll_data()">Lain-Lain</button><button class='btn btn-primary'><i class="fa fa-info"></i></button></div>

    </div>

    <?php

    include 'page_peninggi.php';
    include 'page_kesehatan.php';
    include 'page_kecantikan.php';
    include 'page_peninggi1.php';
    include 'page_mataminus.php';
    include 'page_tambahberat.php';
    include 'page_pelangsing.php';
    include 'page_suplementanak.php';
    include 'page_staminapria.php';
    include 'page_pembalut.php';
    include 'page_diabetes.php';
    include 'modal_produk.php';

    ?>

  </div>
  <!-- end navbar  -->
  </div>
  <div class="section section-tabs">
    <div class="container">
      <div class="section section-download" id="downloadSection">
        <div class="container">
          <div class="row text-center">
          </div>
          <br>
          <br>
          <div class="row text-center">
            <div class="col-md-8 ml-auto mr-auto">
              <h2>Ingin tahu lebih lanjut?</h2>
              <h4>Contact us on:

            </div>
          </div>
          <div class="sharing-area text-center">
            <button onclick="wa()" id="twitter" class="btn btn-raised btn-twitter sharrre">
              <i class="fa fa-whatsapp"></i> Whatsapp
            </button>
            <button onclick='facebook()' id="facebook" class="btn btn-raised btn-facebook sharrre">
              <i class="fa fa-facebook-square"></i> Facebook
            </button>
            <button onclick="instagram()" id="googlePlus" class="btn btn-raised sharrre">
              <i class="fa fa-instagram"></i> Instagram
            </button>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer" data-background-color="black">
      <div class="container">

        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, made with <i class="material-icons">favorite</i> by
          <a href="https://api.whatsapp.com/send?phone=086576199777&text=Hai" target="_blank">TadP0le</a> for a better web.
        </div>
      </div>
    </footer>
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="./assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>

    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
    <script>
      $(document).ready(function() {
        document.getElementById("page_kesehatan").style.display = "none";
        document.getElementById("page_kecantikan").style.display = "none";
        document.getElementById("page_peninggi").style.display = "none";
        document.getElementById("page_mataminus").style.display = "none";
        document.getElementById("page_tambahberat").style.display = "none";
        document.getElementById("page_pelangsing").style.display = "none";
        document.getElementById("page_suplementanak").style.display = "none";
        document.getElementById("page_staminapria").style.display = "none";
        document.getElementById("page_pembalut").style.display = "none";
        // document.getElementById("page_diabetes").style.display = "none";
        //init DateTimePickers
        materialKit.initFormExtendedDatetimepickers();

        // Sliders Init
        materialKit.initSliders();
      });


      function scrollToDownload() {
        if ($('.section-download').length != 0) {
          $("html, body").animate({
            scrollTop: $('.section-download').offset().top
          }, 1000);
        }
      }

      function whatsapp() {
        let data = "Hai Admin, saya ingin bertanya seputar produk";
        window.location = "https://api.whatsapp.com/send?phone=086576199777&text=" + data;
      }

      function wa() {
        window.location = "https://api.whatsapp.com/send?phone=6285264496374&text=Hai%20Saya%20Ingin%20Bertanya";
      }

      function facebook() {

      }

      function instagram() {
        window.location = "https://www.instagram.com/Health_beautyofficial";
      }

      function modal() {
        $('#exampleModal3').modal('show');
      }

      function homeNya() {
        window.location = "index.php";
      }

      function showAll_data() {
        document.getElementById("page_kesehatan").style.display = "none";
        document.getElementById("page_kecantikan").style.display = "none";
        document.getElementById("page_peninggi").style.display = "none";
        document.getElementById("produk_all").style.display = "block";
        document.getElementById("page_mataminus").style.display = "none";
        document.getElementById("page_tambahberat").style.display = "none";
        document.getElementById("page_pelangsing").style.display = "none";
        document.getElementById("page_suplementanak").style.display = "none";
        document.getElementById("page_staminapria").style.display = "none";
        document.getElementById("page_pembalut").style.display = "none";
        // document.getElementById("page_diabetes").style.display = "none";

      }

      function produkKesehatan() {
        swal("Sukses", "Menampilkan Produk Kesehatan");
        document.getElementById("produk_all").style.display = "none";
        document.getElementById("page_kecantikan").style.display = "none";
        document.getElementById("page_peninggi").style.display = "none";
        document.getElementById("page_kesehatan").style.display = "block";
        document.getElementById("page_mataminus").style.display = "none";
        document.getElementById("page_tambahberat").style.display = "none";
        document.getElementById("page_pelangsing").style.display = "none";
        document.getElementById("page_suplementanak").style.display = "none";
        document.getElementById("page_staminapria").style.display = "none";
        document.getElementById("page_pembalut").style.display = "none";
        // document.getElementById("page_diabetes").style.display = "none";
      }

      function produkKecantikan() {
        swal("Sukses", "Menampilkan Produk Kecantikan");
        document.getElementById("produk_all").style.display = "none";
        document.getElementById("page_kesehatan").style.display = "none";
        document.getElementById("page_peninggi").style.display = "none";
        document.getElementById("page_kecantikan").style.display = "block";
        document.getElementById("page_mataminus").style.display = "none";
        document.getElementById("page_tambahberat").style.display = "none";
        document.getElementById("page_pelangsing").style.display = "none";
        document.getElementById("page_suplementanak").style.display = "none";
        document.getElementById("page_staminapria").style.display = "none";
        document.getElementById("page_pembalut").style.display = "none";
        // document.getElementById("page_diabetes").style.display = "none";
      }

      function produkPeninggi() {
        swal("Sukses", "Menampilkan Produk Peninggi");
        document.getElementById("produk_all").style.display = "none";
        document.getElementById("page_kesehatan").style.display = "none";
        document.getElementById("page_kecantikan").style.display = "none";
        document.getElementById("page_peninggi").style.display = "block";
        document.getElementById("page_mataminus").style.display = "none";
        document.getElementById("page_tambahberat").style.display = "none";
        document.getElementById("page_pelangsing").style.display = "none";
        document.getElementById("page_suplementanak").style.display = "none";
        document.getElementById("page_staminapria").style.display = "none";
        document.getElementById("page_pembalut").style.display = "none";
        // document.getElementById("page_diabetes").style.display = "none";
      }

      function produkMata() {
        swal("Sukses", "Menampilkan Produk Mata Minus");
        document.getElementById("produk_all").style.display = "none";
        document.getElementById("page_kesehatan").style.display = "none";
        document.getElementById("page_kecantikan").style.display = "none";
        document.getElementById("page_peninggi").style.display = "none";
        document.getElementById("page_mataminus").style.display = "block";
        document.getElementById("page_tambahberat").style.display = "none";
        document.getElementById("page_pelangsing").style.display = "none";
        document.getElementById("page_suplementanak").style.display = "none";
        document.getElementById("page_staminapria").style.display = "none";
        document.getElementById("page_pembalut").style.display = "none";
        // document.getElementById("page_diabetes").style.display = "none";
      }

      function produkTambahBerat() {
        swal("Sukses", "Menampilkan Produk Penambah Berat");
        document.getElementById("produk_all").style.display = "none";
        document.getElementById("page_kesehatan").style.display = "none";
        document.getElementById("page_kecantikan").style.display = "none";
        document.getElementById("page_peninggi").style.display = "none";
        document.getElementById("page_mataminus").style.display = "none";
        document.getElementById("page_tambahberat").style.display = "block";
        document.getElementById("page_pelangsing").style.display = "none";
        document.getElementById("page_suplementanak").style.display = "none";
        document.getElementById("page_staminapria").style.display = "none";
        document.getElementById("page_pembalut").style.display = "none";
        // document.getElementById("page_diabetes").style.display = "none";

      }

      function produkPelangsing() {
        swal("Sukses", "Menampilkan Produk Pelangsing");
        document.getElementById("produk_all").style.display = "none";
        document.getElementById("page_kesehatan").style.display = "none";
        document.getElementById("page_kecantikan").style.display = "none";
        document.getElementById("page_peninggi").style.display = "none";
        document.getElementById("page_mataminus").style.display = "none";
        document.getElementById("page_tambahberat").style.display = "none";
        document.getElementById("page_pelangsing").style.display = "block";
        document.getElementById("page_suplementanak").style.display = "none";
        document.getElementById("page_staminapria").style.display = "none";
        document.getElementById("page_pembalut").style.display = "none";
        // document.getElementById("page_diabetes").style.display = "none";
      }

      function produkSA() {
        swal("Sukses", "Menampilkan Produk Suplemen Anak");
        document.getElementById("produk_all").style.display = "none";
        document.getElementById("page_kesehatan").style.display = "none";
        document.getElementById("page_kecantikan").style.display = "none";
        document.getElementById("page_peninggi").style.display = "none";
        document.getElementById("page_mataminus").style.display = "none";
        document.getElementById("page_tambahberat").style.display = "none";
        document.getElementById("page_pelangsing").style.display = "none";
        document.getElementById("page_suplementanak").style.display = "block";
        document.getElementById("page_staminapria").style.display = "none";
        document.getElementById("page_pembalut").style.display = "none";
        // document.getElementById("page_diabetes").style.display = "none";
      }

      function produkStamina() {
        swal("Sukses", "Menampilkan Produk Penambah Stamina");
        document.getElementById("produk_all").style.display = "none";
        document.getElementById("page_kesehatan").style.display = "none";
        document.getElementById("page_kecantikan").style.display = "none";
        document.getElementById("page_peninggi").style.display = "none";
        document.getElementById("page_mataminus").style.display = "none";
        document.getElementById("page_tambahberat").style.display = "none";
        document.getElementById("page_pelangsing").style.display = "none";
        document.getElementById("page_suplementanak").style.display = "none";
        document.getElementById("page_staminapria").style.display = "block";
        document.getElementById("page_pembalut").style.display = "none";
        // document.getElementById("page_diabetes").style.display = "none";
      }

      function produkPembalut() {
        swal("Sukses", "Menampilkan Produk Pembalut Airiz");
        document.getElementById("produk_all").style.display = "none";
        document.getElementById("page_kesehatan").style.display = "none";
        document.getElementById("page_kecantikan").style.display = "none";
        document.getElementById("page_peninggi").style.display = "none";
        document.getElementById("page_mataminus").style.display = "none";
        document.getElementById("page_tambahberat").style.display = "none";
        document.getElementById("page_pelangsing").style.display = "none";
        document.getElementById("page_suplementanak").style.display = "none";
        document.getElementById("page_staminapria").style.display = "none";
        document.getElementById("page_pembalut").style.display = "block";
        // document.getElementById("page_diabetes").style.display = "none";
      }
    </script>
</body>

</html>