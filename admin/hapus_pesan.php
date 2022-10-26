<?php
include 'layout/awal.php';

// if (!$_SESSION['login']) {
//   header('location:login.php');
// }

$id = $_GET['id'];

$query  = $conn->query("DELETE FROM pesan WHERE id_pesan = '$id'");

if ($query) {
  header('location:kontak.php');
}

?>
