<?php
include 'layout/awal.php';

// if (!$_SESSION['login']) {
//   header('location:login.php');
// }

if (isset($_POST['tambah_admin']) && $_POST['tambah_admin'] == "TAMBAH") {
  $aparat    = $_POST['aparat'];
  $user = $_POST['user'];
  $pass      = MD5($_POST['pass']);

$query  = "INSERT INTO admin (id_aparat, user_admin, pass_admin) VALUES (:aparat, :user, :pass)";
$query  = $conn->prepare($query);
  $query->execute(array(
    ':aparat' => $aparat,
    ':user' => $user,
    ':pass' => $pass,
  ));
  if ($query) {
    header('location:list_admin.php');
  }
}

$aparat  = $conn->query("SELECT * FROM aparat ORDER BY nama_aparat ASC",PDO::FETCH_ASSOC);
$apr   = $aparat->fetch();
?>


<div class="judul_section">
  <h1>Tambah Admin</h1>
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
    <input id="user" type="text" placeholder="Username" name="user" required>
  </div>

  <div class="textbox black">
    <i class="fa fa-lock"></i>
    <input id="pass" type="password" placeholder="Password" name="pass" required>
  </div>

  <input type="submit" name="tambah_admin" value="TAMBAH" class="btn">
</form>
