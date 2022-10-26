<?php
include 'layout/awal.php';

// if (!$_SESSION['login']) {
//   header('location:login.php');
// }
$id = $_GET['id'];

if (isset($_POST['edit_potensi']) && $_POST['edit_potensi'] == "SIMPAN") {
  $nama_potensi     = $_POST['nama_potensi'];
  $jumlah  = $_POST['jumlah'];
  $gambar_potensi    = $_FILES['gambar_potensi']['name'];
  if (!empty($gambar_potensi)) {
    move_uploaded_file($_FILES['gambar_potensi']['tmp_name'],"../image/".$gambar_potensi);
     $query  = $conn->query("UPDATE potensi SET gambar_potensi = '$gambar_potensi' WHERE id_potensi = '$id'", PDO::FETCH_ASSOC);
  }
  $admin       = $_POST['admin'];
  
  $query  = $conn->query("UPDATE potensi SET nama_potensi = '$nama_potensi', jumlah = '$jumlah', gambar_potensi = '$gambar_potensi', id_admin = '$admin' WHERE id_potensi = '$id'", PDO::FETCH_ASSOC);

  if ($query) {
    header('location:list_potensi.php');
  }
}

//potensi
$result  = $conn->query("SELECT * FROM potensi WHERE id_potensi = '$id'", PDO::FETCH_ASSOC);
$row    = $result->fetch();

//admin
$admin = $conn->query("SELECT * FROM admin ORDER BY nama_admin ASC", PDO::FETCH_ASSOC);
$ad      = $admin->fetch();

?>
<div class="judul_section">
  <h1>Edit Potensi</h1>
  <hr>
</div>
<form action="" method="post" enctype="multipart/form-data">
  <div class="textbox black">
    <label for="judul" >Nama Potensi</label>
    <input id="nama_potensi" type="text" name="nama_potensi" value="<?=$row['nama_potensi'];?>"><br>
  </div>
<div class="textbox black">
    <label for="judul" >luas (ha) / ekor</label>
    <input id="jumlah" type="text" name="jumlah" value="<?=$row['jumlah'];?>"><br>
  </div>
 
 <div class="textbox black">
    <label for="img">Gambar Potensi</label>
    <input id="img" type="file" name="gambar_potensi">
  </div>
  
<div class="textbox black">
    <label for="ad">admin</label>
    <div class="styled-select">
     <select id="ad" name="admin">
        <?php do{ ?>
          <option value="<?=$ad['id_admin'];?>" <?=$_SESSION['nama_admin'];?>>
            <?=$ad['nama_admin'];?>
          </option>
        <?php }while ($ad = $admin->fetch()); ?>
      </select>
    </div>
  </div>

  <input type="submit" name="edit_potensi" value="SIMPAN" class="btn">
  
</form>
