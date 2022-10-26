<?php
require 'layout/awal.php';

$query  = $conn->query("SELECT kategori.* ,berita.* FROM berita LEFT JOIN kategori on berita.id_kategori = kategori.id_kategori ORDER BY berita.id_berita DESC");
$data   = $query->fetch();
?>
<br><br><br>
<div class="container">
  <div class="content">
    <div class="berita">
      <div class="judul_section">
        <h1>BERITA</h1>
        <hr>
      </div>
      <div class="berita_section">
        <?php do{ ?>
          <div class="grid">
            <div class="cover_grid_news">
              <img src="image/<?=$data['gambar_berita']?>">
            </div>
            <div class="read-more">
              <div class="judul">
                <h3><a href="lihat_berita.php?id=<?=$data['id_berita'];?>"><?=$data['judul_berita'];?></a></h3>
              </div>
              <div class="attr">
                <p>
                  <?=$data['tanggal_berita'];?> /
                  <a href="kategori.php?id=<?=$data['id_kategori'];?>">
                    <?=$data['nama_kategori'];?>
                  </a>
                </p>
              </div>
              <div class="isi">
                <p><?=substr($data['isi_berita'],0,125);?>...</p>
              </div>
              <div class="tombol_lihat">
                <a href="baca_berita.php?id=<?=$data['id_berita'];?>">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        <?php }while ($data = $query->fetch());?>
      </div>
    </div>
  </div>
</div>

    <?php require 'layout/footer.php'; ?>
