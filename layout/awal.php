<?php
require 'config/db_connect.php';
session_start();

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Desa Wates</title>
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" href="admin.css">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

<style>
</style>
</head>
<body>
        <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top ">
        <a class="navbar-brand" href="#">
        <img src="assets/img/img-2.png" alt="logo" style="width:40px;">
      </a>
      <a class="navbar-brand" href="index.php">
       Wates
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              profil
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="profil_wilayah.php">profil wilayah</a>
              <a class="dropdown-item" href="visi_misi.php">visi & misi</a>
              <a class="dropdown-item" href="aparat.php">Aparatur Pemerintahan Desa</a>
            </div>
      </li>
      <li class="nav-item">
              <a class="nav-link" href="berita.php">Berita dan Agenda
              
              </a>
            
         <li class="nav-item">
              <a class="nav-link" href="potensi.php">Potensi
              
              </a>
        </li>   
        <li class="nav-item">
              <a class="nav-link" href="Galeri.php">Galeri
              
              </a>
      </li> 
      </li>
      <li class="nav-item">
              <a class="nav-link" href="admin/login.php">Login
              
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>