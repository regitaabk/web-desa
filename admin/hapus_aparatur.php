<?php
include 'layout/awal.php';

// if (!$_SESSION['login']) {
//   header('location:login.php');
// }

$id = $_GET['id'];

$query  = $conn->query("DELETE FROM aparat WHERE id_aparat = '$id'");

if ($query) {
  header('location:list_aparatur.php');
}

?>
