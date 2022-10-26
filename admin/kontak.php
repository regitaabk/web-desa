<?php
include 'layout/awal.php';

// if (!$_SESSION['login']) {
//   header('location:login.php');
// }

$query  = $conn->query("SELECT * FROM pesan ORDER BY id_pesan DESC", PDO::FETCH_ASSOC);
$data   = $query->fetch();

?>
<div class="judul_section">
  <h1>Kontak Masuk</h1>
  <hr>
</div>
<br>
<table>
  <thead>
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>email</th>
      <th>subject</th>
      <th>pesan</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $num = 0; do{ $num++; ?>
    <tr>
      <td><?=$num;?></td>
      <td><?=$data['nama_pengirim'];?></td>
      <td><?=$data['email'];?></td>
      <td><?=$data['subject'];?></td>
      <td><?=$data['pesan'];?></td>
      <td>
        <a href="hapus_pesan.php?id=<?=$data['id_pesan'];?>" class="delete">Delete</a>
      </td>
    </tr>
  <?php }while ($data   = $query->fetch()); ?>
  </tbody>
</table>
