<?php
include 'layout/awal.php';

// if (!$_SESSION['login']) {
//   header('location:login.php');
// } 
$id = $_GET['id'];
if (isset($_POST['edit_profil']) && $_POST['edit_profil'] == "SIMPAN") {
  $profil_wilayah     = $_POST['profil_wilayah'];
  $visi  = $_POST['visi'];
  $misi       = $_POST['misi'];
  $admin       = $_POST['admin'];


$query  = $conn->query("UPDATE profil SET profil_wilayah = '$profil_wilayah', visi = '$visi', misi = '$misi', id_admin = '$admin' WHERE id_profil = '$id'", PDO::FETCH_ASSOC);


  if ($query) {
    header('location:profil.php');
  }
}
//berita
$query  = $conn->query("SELECT * FROM profil WHERE id_profil = '$id'", PDO::FETCH_ASSOC);
$data   = $query->fetch();

//admin
$admin = $conn->query("SELECT * FROM admin ORDER BY nama_admin ASC", PDO::FETCH_ASSOC);
$ad      = $admin->fetch();

?>
<div class="judul_section">
  <h1>Edit Profil</h1>
  <hr>
</div>
<form action="" method="post" enctype="multipart/form-data">
  <div class="textbox black">
    <label for="profil_wilayah">profil wilayah</label>
    <textarea id="profil_wilayah" name="profil_wilayah" class="ckeditor"><?= $data['profil_wilayah']; ?></textarea><br>
  </div>


 <div class="textbox black">
    <label for="visi">visi</label>
    <textarea id="visi" name="visi" class="ckeditor"><?= $data['visi']; ?></textarea><br>
  </div>

  <div class="textbox black">
    <label for="misi">misi</label>
    <textarea id="misi" name="misi" class="ckeditor"><?= $data['misi']; ?></textarea><br>
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
  

  <input type="submit" name="edit_profil" value="SIMPAN" class="btn">



</form>
