<?php
include 'layout/awal.php';

$result  = $conn->query("SELECT admin.*,potensi.* FROM potensi LEFT JOIN admin ON potensi.id_admin = admin.id_admin ORDER BY potensi.id_potensi DESC", PDO::FETCH_ASSOC);
$row = $result->fetch();

?>
<div class="judul_section">
  <h1>Daftar Potensi</h1>
  <hr>
</div>
<a href="tambah_potensi.php" class="tombolplus">
  <i class="fa fa-plus"></i> Tambah Potensi
</a>
<br>

<table>
  <thead>
    <tr>
      <th>No.</th>
      <th>nama</th>
      <th>luas (ha) / ekor</th>
      <th>admin</th>
      <th>gambar</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $num = 0; do{ $num++; ?>
    <tr>
      <td><?=$num;?></td>
      <td><?=$row['nama_potensi'];?></td>
      <td><?=$row['jumlah'];?></td>
      <td><?=$row['nama_admin'];?></td>
      <td><img src="../image/<?=$row['gambar_potensi'];?>" alt="<?=$row['gambar_potensi'];?>" style="width:100px;">
      <td>
        <a href="edit_potensi.php?id=<?=$row['id_potensi'];?>" class="edit">Edit</a> -
        <a href="hapus_potensi.php?id=<?=$row['id_potensi'];?>" class="delete">Hapus</a>
      </td>
    </tr>
    <?php }while($row = $result->fetch()); ?>
  </tbody>
</table>
