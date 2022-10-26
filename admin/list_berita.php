<?php
include 'layout/awal.php';

$result  = $conn->query("SELECT kategori.*,berita.* FROM berita LEFT JOIN kategori ON berita.id_kategori = kategori.id_kategori ORDER BY berita.id_berita DESC", PDO::FETCH_ASSOC);


// while ($row = $result->fetch()) {echo $row->judul_berita;}
$row = $result->fetch();
?>
<div class="judul_section">
  <h1>Daftar berita</h1>
  <hr>
</div>
<a href="tambah_berita.php" class="tombolplus">
  <i class="fa fa-plus"></i> Tambah berita
</a>
<br>

<table>
  <thead>
    <tr>
      <th>No.</th>
      <th>Judul</th>
      <th>Tanggal</th>
      <th>Kategori</th>
      <th>Gambar</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $num = 0; do{ $num++; ?>
    <tr>
      <td><?=$num;?></td>
      <td><?=$row['judul_berita'];?></td>
      <td><?=$row['tanggal_berita'];?></td>
      <td><?=$row['nama_kategori'];?></td>
      <td><img src="../image/<?=$row['gambar_berita'];?>" alt="<?=$row['gambar_berita'];?>" style="width:100px;"></td>
      <td>
        <a href="edit_berita.php?id=<?=$row['id_berita'];?>" class="edit">Edit</a> -
        <a href="hapus_berita.php?id=<?=$row['id_berita'];?>" class="delete">Hapus</a>
      </td>
    </tr>
    <?php }while($row = $result->fetch()); ?>
  </tbody>
</table>
