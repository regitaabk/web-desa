<<?php require 'layout/awal.php';

$query  = $conn->query("SELECT * FROM pesan ORDER BY id_pesan DESC", PDO::FETCH_ASSOC);
$data   = $query->fetch();

if (isset($_POST['kontak_masuk']) && $_POST['kontak_masuk'] == "TAMBAH") {
  $nama_pengirim    = $_POST['nama_pengirim'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $pesan = $_POST['pesan'];

  $sql    = "INSERT INTO pesan (nama_pengirim,email,subject,pesan) VALUES (:nama_pengirim, :email, :subject, :pesan)";
  $query  = $conn->prepare($sql);
  $query->execute(array(
    ':nama_pengirim' => $nama_pengirim,
    ':email' => $email,
    ':subject' => $subject,
    ':pesan' => $pesan,
  ));
  if ($query) {
    header('location:index.php');
  }
}
 ?>

<div class="mainContent">
  <div class="judul_section">
    <h1>Kontak Desa</h1>
    <hr>
  </div>
    <div class="contactFrm">
        
        <form action="" method="post">
            <h4>Nama *</h4>
            <input type="text" name="nama_pengirim" id="nama_pengirim" placeholder="masukan nama" required>
            <h4>Email *</h4>
            <input type="email" name="email" id="email" placeholder="email@example.com" required>
            <h4>Subject *</h4>
            <input type="text" name="subject" id="subject" placeholder="masukan subject" required>
            <h4>Pesan *</h4>
            <textarea name="pesan" placeholder="Tulis pesan Anda disini" id="pesan" required> </textarea>
            <input type="submit" name="kontak_masuk" value="TAMBAH">
            <div class="clear"> </div>
        </form>
    </div>
</div>
<?php require 'layout/footer.php'; ?>