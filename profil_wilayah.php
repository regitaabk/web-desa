<?php
include 'layout/awal.php';

$query  = $conn->query("SELECT * FROM profil ORDER BY id_profil DESC", PDO::FETCH_ASSOC);
$data   = $query->fetch();
?>

<?php do{ ?>

<div class="judul_section"><br><br>
  
  <h1>PROFIL WILAYAH</h1>
  <hr>
</div>
<div class="container">
  <div class="content">
    <div class="artikel-section">
      <div class="judul">
        <h3>DESA WATES</h3>
      </div>
      <div class="isi">
       
          <?=$data['profil_wilayah'];?>
        
      </div>
    </div>
  </div>
</div>

<?php }while ($data   = $query->fetch()); ?>
<?php require 'layout/footer.php' ?>