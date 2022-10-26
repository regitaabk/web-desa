<?php
include 'layout/awal.php';

$query  = $conn->query("SELECT gambar_berita FROM berita", PDO::FETCH_ASSOC);
$data   = $query->fetch();
?>
<br><br><br>
<div class="container">
  <div class="content">
    <div class="judul_section">
      <h1>GALERI</h1>
      <hr>
    </div>
    <div class="galeri">
      <?php do{ ?>
        <img src="image/<?=$data['gambar_berita']?>">
      <?php }while ($data = $query->fetch());?>
    </div>
</div>
</div>

  <?php require 'layout/footer.php'; ?>
