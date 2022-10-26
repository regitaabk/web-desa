<?php require 'layout/awal.php';

$query  = $conn->query("SELECT * FROM potensi ORDER BY id_potensi DESC", PDO::FETCH_ASSOC);
$data   = $query->fetch();
 
?>

 <?php do{ ?>
  <br><br>

<div class="container">
  <div class="content">
    <div class="artikel-section">
      <div class="judul_section">
  <h1>POTENSI DESA</h1>
  <hr>
</div>
    <table>
  <thead>
    <tr>
      <th>No.</th>
      <th>nama</th>
      <th>luas (ha) / ekor</th>
      <th>gambar</th>
    </tr>
  </thead>
  <tbody>
  <?php $num = 0; do{ $num++; ?>
    <tr>
      <td><?=$num;?></td>
      <td><?=$data['nama_potensi'];?></td>
      <td><?=$data['jumlah'];?></td>
      <td><img src="image/<?=$data['gambar_potensi'];?>" alt="<?=$data['gambar_potensi'];?>" style="width:100px;"></td>
    </tr>
    <?php }while ($data = $query->fetch()); ?>
  </tbody>
</table>
      
    </div>
  </div>
  </div>
</div>
<?php }while ($data   = $query->fetch()); ?>
<?php require 'layout/footer.php' ?>