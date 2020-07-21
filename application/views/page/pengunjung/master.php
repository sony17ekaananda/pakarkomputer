<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $title; ?></title>
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

  <?php include('header.php'); ?>

  <?php  $this->load->view($content); ?>



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