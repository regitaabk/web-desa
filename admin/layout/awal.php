<?php
require '../config/db_connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.css">
    <script src="../assets/ckeditor/ckeditor.js" type="text/javascript"></script>
  </head>
  <body>
    <section id="sideMenu">
      <!-- <img src="../assets/images/logo.png" alt="Logo"> -->
      <h1>Desa Wates</h1>
      <nav>
        <a href="index.php">
          <i class="fa fa-home"></i> Beranda Admin</a>
        <a href="list_admin.php">
          <i class="fa fa-user"></i> Daftar Admin</a>
        <a href="list_berita.php">
          <i class="fa fa-newspaper"></i> Daftar berita dan agenda</a>
        <a href="profil.php">
           <i class="fa fa-address-card"></i> profil dan visi misi</a>
        <a href="list_aparatur.php">
          <i class="fa fa-users"></i> Daftar Aparat</a>
        <a href="kontak.php">
          <i class="fa fa-comment"></i> Kontak masuk</a>
        <a href="list_potensi.php">
          <i class="fa fa-star"></i> Potensi</a>
        <a href="../index.php">
          <i class="fa fa-home"></i> Kembali Ke Website</a>
      </nav>
    </section>
    <header>
      <a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a>
      <div class="clear"></div>
    </header>
    <section id="content-area">
