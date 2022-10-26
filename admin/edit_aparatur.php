<?php
include 'layout/awal.php';

// if (!$_SESSION['login']) {
//   header('location:login.php');
// } 
$id = $_GET['id'];
if (isset($_POST['edit_aparatur']) && $_POST['edit_aparatur'] == "SIMPAN") {
  $nama_aparat     = $_POST['nama_aparat'];
  $foto    = $_FILES['foto']['name'];
  $jabatan  = $_POST['jabatan'];
  $priode       = $_POST['priode'];
if (!empty($foto)) {
    move_uploaded_file($_FILES['foto']['tmp_name'],"../image/".$foto);
    $query  = $conn->query("UPDATE aparat SET foto = '$foto' WHERE id_aparat = '$id'", PDO::FETCH_ASSOC);
  }
$query  = $conn->query("UPDATE aparat SET nama_aparat = '$nama_aparat', jabatan = '$jabatan', priode = '$priode' WHERE id_aparat = '$id'", PDO::FETCH_ASSOC);

  if ($query) {
    header('location:list_aparatur.php');
  }
}
//berita
$query  = $conn->query("SELECT * FROM aparat WHERE id_aparat = '$id'", PDO::FETCH_ASSOC);
$data   = $query->fetch();



?>
<div class="judul_section">
  <h1>Edit data aparat</h1>
  <hr>
</div>
<form action="" method="post" enctype="multipart/form-data">
  <div class="textbox black">
    <label for="nama_aparat" >nama aparat</label>
    <input id="nama_aparat" type="text" name="nama_aparat" value="<?=$data['nama_aparat'];?>"><br>
  </div>

  <div class="textbox black">
    <label for="img">foto</label>
    <input id="img" type="file" name="foto">
  </div>

 <div class="textbox black">
    <label for="jabatan" >jabatan</label>
    <input id="jabatan" type="text" name="jabatan" value="<?=$data['jabatan'];?>"><br>
  </div>

  <div class="textbox black">
    <label for="priode" >priode</label>
    <input id="priode" type="text" name="priode" value="<?=$data['priode'];?>"><br>
  </div>

  
  <input type="submit" name="edit_aparatur" value="SIMPAN" class="btn">
</form>
