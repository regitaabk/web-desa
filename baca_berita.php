<?php
include 'layout/awal.php';

$id=$_GET['id'];
$query  = $conn->query("SELECT kategori.*,berita.* FROM berita LEFT JOIN kategori on berita.id_kategori = kategori.id_kategori WHERE berita.id_berita = '$id'", PDO::FETCH_ASSOC);
$data   = $query->fetch();

?>
<br><br><br>
<div class="container">
  <div class="content">
    <div class="berita-section">
      <div class="judul">
        <h3><?=$data['judul_berita'];?></h3>
      </div>
      <div class="attr">
        <p>
          <?=$data['tanggal_berita'];?>/
          <a href="kategori.php?id=<?=$data['id_kategori'];?>">
            <?=$data['nama_kategori'];?>
          </a>
        </p>
      </div>
      <div class="cover_grid_news">
        <img src="image/<?=$data['gambar_berita'];?>">
      </div>
      <div class="isi">
        <p><?=$data['isi_berita'];?></p>
      </div>
    </div>
  </div>
</div>

<?php require 'layout/footer.php'; ?>
