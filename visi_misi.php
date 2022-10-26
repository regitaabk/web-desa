<?php
include 'layout/awal.php';

$query  = $conn->query("SELECT * FROM profil ORDER BY id_profil DESC", PDO::FETCH_ASSOC);
$data   = $query->fetch();
?>

<?php do{ ?>

<div class="judul_section"><br><br>
  
  <h1>Visi & Misi</h1>
  <hr>
</div>
<div class="container">
  <div class="content">
    <div class="artikel-section">
      <div class="judul">
        <h3>visi</h3>
      </div>
      <div class="isi">
       
          <?=$data['visi'];?>
        
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="content">
    <div class="artikel-section">
      <div class="judul">
        <h3>misi</h3>
      </div>
      <div class="isi">
        <?=$data['misi'];?>
      </div>
    </div>
  </div>

</div>
<?php }while ($data   = $query->fetch()); ?>
<?php require 'layout/footer.php' ?>