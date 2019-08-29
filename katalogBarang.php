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

      </div>




    </div>

    <div class='row'>
    <div class='col-sm-1'> <button class='btn btn-info' style='width:100%' onclick="produkKesehatan()">Produk Kesehatan</button></div>
    <div class='col-sm-1'> <button class='btn btn-info' style='width:100%' onclick="produkKecantikan()">Produk Kecantikan</button></div>
    <div class='col-sm-1'> <button class='btn btn-info' style='width:100%' onclick="produkPeninggi()">Produk Peninggi</button></div>
    <div class='col-sm-1'> <button class='btn btn-info' style='width:100%' onclick="produkMata()">Mata Minus</button></div>
    <div class='col-sm-1'> <button class='btn btn-info' style='width:100%' onclick="produkTambahBerat()">Tambah Berat</button></div>
    <div class='col-sm-1'> <button class='btn btn-info' style='width:100%' onclick="produkPelangsing()">Pelangsing</button></div>
    <div class='col-sm-1'> <button class='btn btn-info' style='width:100%' onclick="produkSA()">Suplement Anak</button></div>
    <div class='col-sm-1'> <button class='btn btn-info' style='width:100%' onclick="produkStamina()">Stamina Pria</button></div>
    <div class='col-sm-1'> <button class='btn btn-info' style='width:100%' onclick="produkPembalut()">Pembalut Airiz</button></div>
    <!-- <div class='col-sm-1'> <button class='btn btn-info' style='width:100%' onclick="dataDiabetes()">Diabetes</button></div> -->
    <div class='col-sm-1'> <button class='btn btn-info' style='width:100%' onclick="showAll_data()">Lain-Lain</button></div>
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

      function whatsapp()
      {
        let data="Hai Admin, saya ingin bertanya seputar produk";
        window.location="https://api.whatsapp.com/send?phone=086576199777&text="+data;
      }

      function wa()
      {
        window.location="https://api.whatsapp.com/send?phone=6285264496374&text=Hai%20Saya%20Ingin%20Bertanya";
      }

      function facebook()
      {

      }

      function instagram()
      {
        window.location="https://www.instagram.com/Health_beautyofficial";
      }

      function modal()
      {
        $('#exampleModal3').modal('show');
      }

      function homeNya()
      {
          window.location="index.php";
      }

      function showAll_data()
      {
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

      function produkKesehatan()
      {
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

      function produkKecantikan()
      {
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

      function produkPeninggi()
      {
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

      function produkMata()
      {
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

      function produkTambahBerat()
      {
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
      
      function produkPelangsing()
      {
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

      function produkSA()
      {
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

      function produkStamina()
      {
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

      function produkPembalut()
      {
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