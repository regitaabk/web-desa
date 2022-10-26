<?php
include 'layout/awal.php';

// if (!$_SESSION['login']) {
//   header('location:login.php');
// }

if (isset($_POST['tambah_potensi']) && $_POST['tambah_potensi'] == "TAMBAH") {
  $nama_potensi    = $_POST['nama_potensi'];
  $jumlah = $_POST['jumlah'];
  $admin      = $_POST['admin'];

  $sql  = "INSERT INTO potensi (nama_potensi, jumlah, id_admin) VALUES (:nama_potensi, :jumlah, :admin)";
  $query  = $conn->prepare($sql);
  $query->execute(array(
    ':nama_potensi' => $nama_potensi,
    ':jumlah' => $jumlah,
    ':admin' => $admin
  ));

  if ($query) {
    header('location:list_potensi.php');
  }
}

$query  = $conn->query("SELECT * FROM admin ORDER BY id_admin ASC",PDO::FETCH_ASSOC);
$data   = $query->fetch();

?>
<div class="judul_section">
  <h1>Tambah Potensi</h1>
  <hr>
</div>
<form action="" method="post" enctype="multipart/form-data">
  <div class="textbox black">
    <label for="judul" >Nama Potensi</label>
    <input type="text" name="nama_potensi" id="nama_potensi" required>
  </div>

  <div class="textbox black">
    <label for="judul" >luas (ha)/ ekor</label>
    <input type="text" name="jumlah" id="jumlah" required>
  </div>

  <div class="textbox black">
    <label for="kat">Admin</label>
    <div class="styled-select">
      <select id="admin" name="admin">
        <option value="">Pilih  Admin</option>
        <?php do{ ?>
          <option value="<?=$data['id_admin'];?>"><?=$data['nama_admin'];?></option>
        <?php }while ($data = $query->fetch()); ?>
      </select>
    </div>
  </div>

  <input type="submit" name="tambah_potensi" value="TAMBAH" class="btn">
</form>
