<?php
include 'layout/awal.php';

$query  = $conn->query("SELECT * FROM aparat ORDER BY id_aparat DESC", PDO::FETCH_ASSOC);
$data   = $query->fetch();
?>

<?php do{ ?>

<br><br><br>
<div class="container">
  <div class="content">
    <div class="artikel-section">
     <div class="judul_section">
  
  <h1>APARATUR PEMERINTAH DESA</h1>
  <hr>
</div> 
<table>
  <thead>
    <tr>
      <th>No.</th>
      <th>nama</th>
      <th>gambar</th>
      <th>jabatan</th>
      <th>priode</th>
    </tr>
  </thead>
  <tbody>
  <?php $num = 0; do{ $num++; ?>
    <tr>
      <td><?=$num;?></td>
      <td><?=$data['nama_aparat'];?></td>
      <td><img src="image/<?=$data['foto'];?>" alt="<?=$data['foto'];?>" style="width:100px;"></td>
      <td><?=$data['jabatan'];?></td>
      <td><?=$data['priode'];?></td>
    </tr>
    <?php }while ($data   = $query->fetch()); ?>
  </tbody>
</table>

    </div>
  </div>
</div>

<?php }while ($data   = $query->fetch()); ?>
<?php require 'layout/footer.php' ?>