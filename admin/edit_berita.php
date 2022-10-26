<?php
include 'layout/awal.php';

// if (!$_SESSION['login']) {
//   header('location:login.php');
// }
$id = $_GET['id'];


if (isset($_POST['edit_berita']) && $_POST['edit_berita'] == "SIMPAN") {
  $judul     = $_POST['judul'];
  $kategori  = $_POST['kategori'];
  $isi       = $_POST['isi'];
  $gambar    = $_FILES['gambar']['name'];

  if (!empty($gambar)) {
    move_uploaded_file($_FILES['gambar']['tmp_name'],"../image/".$gambar);
    $query  = $conn->query("UPDATE berita SET gambar_berita = '$gambar' WHERE id_berita = '$id'", PDO::FETCH_ASSOC);
  }
  $query  = $conn->query("UPDATE berita SET judul_berita = '$judul', isi_berita = '$isi', id_kategori = '$kategori' WHERE id_berita = '$id'", PDO::FETCH_ASSOC);

  if ($query) {
    header('location:list_berita.php');
  }
}

//berita
$result  = $conn->query("SELECT * FROM berita WHERE id_berita = '$id'", PDO::FETCH_ASSOC);
$row    = $result->fetch();

//kategori
$kategori = $conn->query("SELECT * FROM kategori ORDER BY nama_kategori ASC", PDO::FETCH_ASSOC);
$kat      = $kategori->fetch();

?>
<div class="judul_section">
  <h1>Edit berita</h1>
  
  <hr>
</div>
<form action="" method="post" enctype="multipart/form-data">
  <div class="textbox black">
    <label for="judul" >Judul berita</label>
    <input id="judul" type="text" name="judul" value="<?=$row['judul_berita'];?>"><br>
  </div>

  <div class="textbox black">
    <label for="kat">Kategori</label>
    <div class="styled-select">
      <select id="kat" name="kategori">
        <?php do{ ?>
          <option value="<?=$kat['id_kategori'];?>" <?php if ($row['id_kategori'] == $kat['id_kategori']) {echo "Selected";}?>>
            <?=$kat['nama_kategori'];?>
          </option>
        <?php }while ($kat = $kategori->fetch()); ?>
      </select>
    </div>
  </div>

  <div class="textbox black">
    <label for="isi">Isi</label>
    <textarea id="isi" name="isi" class="ckeditor"><?= $row['isi_berita']; ?></textarea><br>
  </div>

  <div class="textbox black">
    <label for="img">Gambar</label>
    <input id="img" type="file" name="gambar">
  </div>
  <input type="submit" name="edit_berita" value="SIMPAN" class="btn">
</form>
