<?php
include 'layout/awal.php';

// if (!$_SESSION['login']) {
//   header('location:login.php');
// }
$result  = $conn->query("SELECT admin.*,profil.* FROM profil LEFT JOIN admin ON profil.id_admin = admin.id_admin ORDER BY profil.id_profil DESC", PDO::FETCH_ASSOC);
$row = $result->fetch();

?>
<div class="judul_section">
  <h1>PROFIL DESA</h1>
  <hr>
</div>
<br>
<table>
  <thead>
    <tr>
      <th>No.</th>
      <th>profil wilayah</th>
      <th>visi</th>
      <th>misi</th>
      <th>admin</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $num = 0; do{ $num++; ?>
    <tr>
      <td><?=$num;?></td>
      <td><?=$row['profil_wilayah'];?></td>
      <td><?=$row['visi'];?></td>
      <td><?=$row['misi'];?></td>
      <td><?=$row['nama_admin'];?></td>
      <td>
        <a href="edit_profil.php?id=<?=$row['id_profil'];?>" class="edit">Edit</a> 
      </td>
    </tr>
  <?php }while($row = $result->fetch()); ?>
  </tbody>
</table>
