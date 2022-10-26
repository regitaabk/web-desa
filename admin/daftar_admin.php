<?php

session_start();
$server   = 'localhost';
$username = 'root';
$pass     = '';
$db_name  = 'desa_wates';
$message  = '';

if (isset($_POST['daftar_aparat']) && $_POST['daftar_aparat'] == "TAMBAH") {
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
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Admin</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.css">
  </head>
  <body>
    <div class="login-page">
      <div class="login-box">
        <?php
        if (isset($message)) {
          echo ' <label class="text-danger"><i>'.$message.'</i></label> ';
        }
        ?>
        <h1>Login Admin <i class="fa fa-user" style="font-size:25px;color:#024959;"></i></h1>
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

  <input type="submit" name="daftar_aparat" value="TAMBAH" class="btn">
</form>
      </div>
    </div>
  </body>
</html>

