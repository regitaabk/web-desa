<?php
include 'layout/awal.php';

// if (!$_SESSION['login']) {
//   header('location:login.php');
// }

$id = $_GET['id'];
if (isset($_POST['simpan_admin']) && $_POST['simpan_admin'] == "SIMPAN") {
  $cond = "";
  $aparat  = $_POST['aparat'];
  $user = $_POST['user'];
  $cond .= "aparat = '$aparat', user_admin='$user'";

  if (!empty($_POST['pass'])) {
    $pass   = MD5($_POST['pass']);
    $cond .= ", pass_admin = '$pass'";
  }

  $query  = $conn->query("UPDATE admin SET id_aparat = '$aparat', user_admin = '$user', pass_admin = '$pass' WHERE id_admin = '$id'", PDO::FETCH_ASSOC);

  $query->execute(array(
    ':aparat' => $aparat,
    ':user' => $user,
    ':pass' => $pass,
  ));
  if ($query) {
    header('location:list_admin.php');
  }
}

$query  = $conn->query("SELECT * FROM admin WHERE id_admin = '$id'", PDO::FETCH_ASSOC);
$data   = $query->fetch();

$aparat = $conn->query("SELECT * FROM aparat ORDER BY nama_aparat ASC", PDO::FETCH_ASSOC);
$apr      = $aparat->fetch();

?>
<div class="judul_section">
  <h1>Edit Admin</h1>
  <hr>
</div>
<form action="" method="post">
  <div class="textbox black">
    <label for="apr">aparat</label>
    <div class="styled-select">
     <select id="apr" name="aparat">
        <?php do{ ?>
          <option value="<?=$apr['id_aparat'];?>" >
            <?=$apr['nama_aparat'];?>
          </option>
        <?php }while ($apr = $aparat->fetch()); ?>
      </select>
    </div>
  </div>


  <div class="textbox black">
    <i class="fa fa-user"></i>
    <input id="user" type="text" name="user" value="<?=$data['user_admin'];?>">
  </div>

  <div class="textbox black">
    <i class="fa fa-lock"></i>
    <input id="pass" type="password" name="pass" placeholder="password">
  </div>

  <input type="submit" name="simpan_admin" value="SIMPAN" class="btn">
</form>
