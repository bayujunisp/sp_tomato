<?php  ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
  <script src="<?php echo base_url()?>assets/js/jquery-3.3.1.slim.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/dataTables.bootstrap4.css">
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/dataTables.bootstrap4.js"></script>

  <title>Database IKM Kota Bogor</title>
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <a class="navbar-brand" href="<?php echo base_url()?>user"> <img src="<?php echo base_url()?>assets/img/438.jpg" width="120px" height="60px"> <b>Sistem Pakar Penyakit Tomat</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if( "/sp_tomato/user" == $_SERVER['REQUEST_URI'] ){ 
            ?> active <?php } ?>">
            <a class="nav-link" href="<?php echo base_url()?>user">Beranda</a>
          </li>
          <li class="nav-item <?php if( "/sp_tomato/user/data_penyakit" == $_SERVER['REQUEST_URI'] ){ 
            ?> active <?php } ?>">
            <a class="nav-link " href="<?php echo base_url()?>user/data_penyakit">Data Hama Dan Penyakit</a>
          </li>
        </ul>
      </div>
    </div>
  </nav><br><br><br>

