<?php
include 'layout/awal.php';

// if (!$_SESSION['login']) {
//   header('location:login.php');
// }

$id = $_GET['id'];

$query  = $conn->query("DELETE FROM potensi WHERE id_potensi = '$id'");

if ($query) {
  header('location:list_potensi.php');
}

?>
