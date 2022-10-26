<<?php require 'layout/awal.php';
$query  = $conn->query("SELECT kategori.* ,berita.* FROM berita LEFT JOIN kategori on berita.id_kategori = kategori.id_kategori ORDER BY berita.id_berita DESC LIMIT 3");
$data   = $query->fetch();
?>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
<!-- slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/kolamikan.jpg" alt="Gambar - 1" width="10px" height="2px">
      <div class="carousel-caption">
        <h3>DESA WATES</h3>
        <p>kec. BUMI RATU NUBAN kab. Lampung Tengah, prov. Lampung</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/watestpboong.jpg" alt="Gambar - 2" width="5px" height="2px">
      <div class="carousel-caption">
        <h3>DESA WATES</h3>
        <p>kec. BUMI RATU NUBAN kab. Lampung Tengah, prov. Lampung</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/img-3.jpg" alt="Gambar - 3" width="5%" height="2%">
      <div class="carousel-caption">
        <h3>DESA WATES</h3>
        <p>kec. BUMI RATU NUBAN kab. Lampung Tengah, prov. Lampung</p>
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="wates">
  <center>
     <h1>WATES <b>"TERSENYUM"</b></h1></div>
  </center>
</div>
<div class="nav-sisa">
  <div class="kontak">
    <a href="kontak_masuk.php"><i class="fa fa-envelope"></i> Kontak Desa</a>
  </div>
</div>
<center>
<div class="judul_section"><h1>PROFIL DESA WATES</h1><hr></div>  
  <div class="con post">
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="assets/img/profil_wilayah.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Profil Wilayah</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group"><a href="profil_wilayah.php">
                <button type="button" class="btn btn-sm btn-outline-secondary"> Tampil</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="assets/img/visi_misi.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Visi & Misi</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group"><a href="visi_misi.php">
                <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="assets/img/aparatur_desa.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Aparatur Desa</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group"><a href="aparat.php">
                <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</center>
<center>
<div class="judul_section"><h1>POTENSI DAN GALERI</h1><hr></div>  
  <div class="con post">
    <div class="row">
      <div class="col-md-6">
        <div class="card2">
          <img class="card-img-top" src="assets/img/img-2.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Potensi</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group"><a href="potensi.php">
                <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card2">
          <img class="card-img-top" src="assets/img/img-2.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Galeri</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group"><a href="galeri.php">
                <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</center>
<div class="container">
  <div class="content">
	 <div class="berita">
		<div class="judul_section">
      <h1>BERITA TERBARU</h1>
        <hr>
			<div class="berita_section">
        <?php do{ ?>
          <div class="grid">
            <div class="cover_grid_news">
              <img src="image/<?=$data['gambar_berita']?>">
            </div>
            <div class="read-more">
              <div class="judul">
                <h3><a href="baca_berita.php?id=<?=$data['id_berita'];?>"><?=$data['judul_berita'];?></a></h3>
              </div>
              <div class="attr">
                <p>
                  <?=$data['tanggal_berita'];?>/
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
      <div class="more_berita">
        <h3> <a href="berita.php">Lihat Berita dan Agenda Lainnya...</a></h3>
      </div>
    </div>
  </div>
</div>
</div>

 
			
<!-- FOOTER -->
  <?php require 'layout/footer.php' ?>

