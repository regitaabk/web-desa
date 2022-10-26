<?php
include 'layout/awal.php';

// if (!$_SESSION['login']) {
//   header('location:login.php');
// }

$id = $_GET['id'];

$query  = $conn->query("DELETE FROM berita WHERE id_berita = '$id'");

if ($query) {
  header('location:list_berita.php');
}

?>
