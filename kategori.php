<?php
include 'layout/awal.php';

$id   = $_GET['id'];
$query  = $conn->query("SELECT kategori.* ,berita.* FROM berita INNER JOIN kategori USING(id_kategori) WHERE id_kategori = '$id'");
$data = $query->fetch();
?>
  <div class="container">
    <div class="berita">
      <div class="judul_section">
        <h1>berita <?=$data['nama_kategori'];?></h1>
        <hr>
      </div>
      <div class="berita_section">
        <?php do{ ?>
        <div class="grid">
          <div class="cover_grid_news">
            <img src="img/<?=$data['gambar_berita']?>" width="200px">
          </div>
          <div class="read-more">
            <div class="judul">
              <h3><a href="baca_berita.php?id=<?=$data['id_berita'];?>"><?=$data['judul_berita'];?></a></h3>
            </div>
            <div class="attr">
              <p><a href=""><?=$data['tanggal_berita'];?></a></p>
            </div>
            <div class="isi">
              <p><?=substr($data['isi_berita'],0,125);?>...</p>
            </div>
            <div class="tombol_lihat">
              <a href="baca_berita.php?id=<?=$data['id_artikel'];?>">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      <?php }while ($data = $query->fetch());?>
    </div>
    <div class="more_berita">
      <h3> <a href="berita.php">Lihat Artikel lainnya...</a></h3>
    </div>

    <?php require 'layout/footer.php'; ?>
