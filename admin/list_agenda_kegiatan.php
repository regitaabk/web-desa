<<?php require 'layout/awal.php' ?>

<div class="judul_section">
  <h1>Daftar Agenda</h1>
  <hr>
</div>
<div class="nav-sisa kontak">
  <div class="kontak">
    <a href="tambah_agenda_kegiatan.php" class="tombolplus">
      <i class="fa fa-plus"></i> Tambah Agenda
    </a>
  </div>
</div>
<br>
<center>
  <div class="table">
    <table>
      <thead>
        <tr style="background: #c0c0c0">
          <th>No.</th>
          <th>Judul</th>
          <th>Tanggal</th>
          <th>Gambar</th>
          <th>Aksi</th>
        </tr>
      </thead>
        <tbody>
        <tr>
          <td>nomor </td>
          <td>judul_agenda</td>
          <td>Tanggal_agenda</td>
          <td><img src="assets/img/img-3.jpg" style="width:100px;"></td>
          <td>
            <a href="edit_agenda_kegiatan.php" class="edit">Edit</a> -
            <a href="hapus_agenda_kegiatan.php" class="delete">Hapus</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</center>
<<?php require 'layout/footer.php' ?>