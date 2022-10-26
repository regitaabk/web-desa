<?php
include 'layout/awal.php';

// if (!$_SESSION['login']) {
//   header('location:login.php');
// }

if (isset($_POST['tambah_aparatur']) && $_POST['tambah_aparatur'] == "TAMBAH") {
  $nama_aparat    = $_POST['nama_aparat'];
  $foto    = $_FILES['img']['name'];
  move_uploaded_file($_FILES['img']['tmp_name'],"../image/".$foto);
  $jabatan = $_POST['jabatan'];
  $priode  = $_POST['priode'];
  

  $sql  = "INSERT INTO aparat (nama_aparat, foto, jabatan, priode) VALUES (:nama_aparat, :img, :jabatan, :priode)";
  $query  = $conn->prepare($sql);
  $query->execute(array(
    ':nama_aparat' => $nama_aparat,
    ':img' => $foto,
    ':jabatan' => $jabatan,
    ':priode' => $priode
  ));

  if ($query) {
    header('location:list_aparatur.php');
  }
}

$query  = $conn->query("SELECT * FROM aparat ORDER BY nama_aparat ASC",PDO::FETCH_ASSOC);
$data   = $query->fetch();

?>
<div class="judul_section">
  <h1>Tambah aparat</h1>
  <hr>
</div>
<form action="" method="post" enctype="multipart/form-data">
  <div class="textbox black">
    <label for="nama_aparat" >nama aparat</label>
    <input type="text" name="nama_aparat" id="nama_aparat" required>
  </div>

 <div class="textbox black">
    <label for="img">Gambar</label>
    <input type="file" name="img" required>
  </div>

  <div class="textbox black">
    <label for="jabatan" >aparat</label>
    <input type="text" name="jabatan" id="jabatan" required>
  </div>

  <div class="textbox black">
    <label for="priode" >priode</label>
    <input type="text" name="priode" id="priode" required>
  </div>

  <input type="submit" name="tambah_aparatur" value="TAMBAH" class="btn">
</form>
