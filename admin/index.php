<?php
require 'layout/awal.php';
$query  = $conn->query("SELECT admin.* FROM admin");
$data     = $query->fetch();
$num_rows = $query->rowCount();

// if (!$_SESSION['login']) {
//   header('location:login.php');
// }
?>
  <div class="judul_section">
    <h1>Welcome to Dashboard, <?=$_SESSION['nama_admin'];?></h1>
    <hr style="width:50%;">
  </div>
 
