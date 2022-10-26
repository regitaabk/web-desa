<?php
include 'layout/awal.php';

$query  = $conn->query("SELECT * FROM aparat ORDER BY id_aparat DESC", PDO::FETCH_ASSOC);
$data   = $query->fetch();
?>
<div class="judul_section">
  <h1>Daftar aparat</h1>
  <hr>
</div>
<a href="tambah_aparatur.php" class="tombolplus">
  <i class="fa fa-plus"></i> Tambah aparatur
</a>
<br>

<table>
  <thead>
    <tr>
      <th>No.</th>
      <th>nama</th>
      <th>gambar</th>
      <th>jabatan</th>
      <th>priode</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $num = 0; do{ $num++; ?>
    <tr>
      <td><?=$num;?></td>
      <td><?=$data['nama_aparat'];?></td>
      <td><img src="../image/<?=$data['foto'];?>" alt="<?=$data['foto'];?>" style="width:100px;"></td>
      <td><?=$data['jabatan'];?></td>
      <td><?=$data['priode'];?></td>
      
      <td>
        <a href="edit_aparatur.php?id=<?=$data['id_aparat'];?>" class="edit">Edit</a> -
        <a href="hapus_aparatur.php?id=<?=$data['id_aparat'];?>" class="delete">Hapus</a>
      </td>
    </tr>
    <?php }while ($data   = $query->fetch()); ?>
  </tbody>
</table>
