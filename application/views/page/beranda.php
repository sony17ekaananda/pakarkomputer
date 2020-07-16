<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Beranda</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url()?>assets/Tempo/assets/img/monitor.png" rel="icon">
  <link href="<?php echo base_url()?>assets/Tempo/assets/img/monitor.png" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url()?>assets/Tempo/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/Tempo/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/Tempo/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/Tempo/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/Tempo/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/Tempo/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url()?>assets/Tempo/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Tempo - v2.1.0
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">DIKOM</a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Beranda</a></li>
          <li><a href="<?php echo base_url('tentang') ?>">Tentang</a></li>
          <li><a href="<?php echo base_url('kontak') ?>">Kontak</a></li>
          <li><a href="<?php echo base_url('login') ?>">Login</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h3>Selamat Datang di</h3>
      <h1>Sistem Diagnosa Kerusakan Hardware Komputer</h1>
      <h2>Sistem ini dibuat untuk mendiagnosa kerusakan yang sering terjadi pada hardware komputer</h2>
      <a href="#about" class="btn-get-started scrollto" data-toggle="modal" data-target="#modalPertanyaan">Mulai Diagnosa</a>
    </div>
  </section><!-- End Hero -->

  <div class="modal" tabindex="-1" id="modalPertanyaan" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">Jawablah Pertanyaan dibawah ini!</h5>
          <button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p><?php echo $gejala->gejala; ?></p>
        </div>
        <div class="modal-footer">
          <a href="<?= base_url()?>beranda/diagnosa?action=diagnosa&&jawaban=ya&&kode_gejala=<?= $gejala->kode_gejala?>">
            <button type="button" class="btn btn-primary"> Ya</button>
          </a>
          <a href="<?= base_url()?>beranda/diagnosa?action=diagnosa&&jawaban=tidak&&kode_gejala=<?= $gejala->kode_gejala?>">
          <button type="button" class="btn btn-danger">Tidak</button>
        </a>
          
        </div>

    </div>
  </div>
</div>

 <div class="modal" tabindex="-1" id="modalPertanyaanNext" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Jawablah Pertanyaan dibawah ini !</h5>
        <button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><?php echo $gejala->gejala; ?></p>
      </div>
      <div class="modal-footer">
        <a href="<?= base_url()?>beranda/diagnosa?action=diagnosa&&jawaban=ya&&kode_gejala=<?= $gejala->kode_gejala?>">
            <button type="button" class="btn btn-primary"> Ya</button>
          </a>
          <a href="<?= base_url()?>beranda/diagnosa?action=diagnosa&&jawaban=tidak&&kode_gejala=<?= $gejala->kode_gejala?>">
          <button type="button" class="btn btn-danger">Tidak</button>
        </a>
        
      </div>
    </div>
  </div>
</div>

  <main id="main">

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url()?>assets/Tempo/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/Tempo/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/Tempo/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url()?>assets/Tempo/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url()?>assets/Tempo/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url()?>assets/Tempo/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url()?>assets/Tempo/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url()?>assets/Tempo/assets/js/main.js"></script>


  <!-- custom script -->
  <script type='text/javascript'>
      $(document).ready(function(){

        $(".close").click(function(){
          console.log("close evet click");
          window.location.replace("<?= base_url()?>");
        });  
      });  
  </script>
  <?php
  if (isset($_GET['action']) == 'diagnosa'){
    ?>
      <script type='text/javascript'>
        $(document).ready(function(){
          console.log("test")
          $('#modalPertanyaanNext').modal('show');
      });  
  </script>
    <?php
  }
  
  ?>

</body>

</html>