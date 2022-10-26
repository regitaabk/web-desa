<?php
include 'layout/awal.php';

// if (!$_SESSION['login']) {
//   header('location:login.php');
// }

if (isset($_POST['tambah_berita']) && $_POST['tambah_berita'] == "TAMBAH") {
  $judul    = $_POST['judul'];
  $kategori = $_POST['kategori'];
  $isi      = $_POST['isi'];
  $gambar   = $_FILES['img']['name'];

  move_uploaded_file($_FILES['img']['tmp_name'],"../image/".$gambar);

  $sql  = "INSERT INTO berita (judul_berita, isi_berita, id_kategori, gambar_berita) VALUES (:judul, :isi, :kat, :img)";
  $query  = $conn->prepare($sql);
  $query->execute(array(
    ':judul' => $judul,
    ':isi' => $isi,
    ':kat' => $kategori,
    ':img' => $gambar
  ));

  if ($query) {
    header('location:list_berita.php');
  }
}

$query  = $conn->query("SELECT * FROM kategori ORDER BY nama_kategori ASC",PDO::FETCH_ASSOC);
$data   = $query->fetch();

?>
<div class="judul_section">
  <h1>Tambah berita</h1>
  <hr>
</div>
<form action="" method="post" enctype="multipart/form-data">
  <div class="textbox black">
    <label for="judul" >Judul berita</label>
    <input type="text" name="judul" id="judul" required>
  </div>

  <div class="textbox black">
    <label for="kat">Kategori</label>
    <div class="styled-select">
      <select id="kat" name="kategori">
        <option value="">Pilih  Kategori</option>
        <?php do{ ?>
          <option value="<?=$data['id_kategori'];?>"><?=$data['nama_kategori'];?></option>
        <?php }while ($data = $query->fetch()); ?>
      </select>
    </div>
  </div>

  <div class="textbox black">
    <label for="isi">Isi</label>
    <textarea id="isi" name="isi" class="ckeditor" required></textarea>
  </div>

  <div class="textbox black">
    <label for="img">Gambar</label>
    <input type="file" name="img" required>
  </div>

  <input type="submit" name="tambah_berita" value="TAMBAH" class="btn">
</form>
