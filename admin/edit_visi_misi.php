<<?php require 'layout/awal.php' ?>

<div class="judul_section">
  <h1>Edit Visi & Misi</h1>
  <hr>
</div>
<div class="form1">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="textbox black">
      <label for="Kategori">Kategori</label>
      <div class="styled-select">
        <select id="Kategori" name="kategori">
          <option>Visi</option>
          <option>Misi</option>
        </select>
      </div>
    </div>
    <div class="textbox">
      <label for="isi">Isi</label>
      <textarea class="ckeditor" id="ckeditor" name="isi"></textarea><br>
        <center>
          <div class="tambah1">
            <input type="submit" name="edit_visi_misi" value="Edit" class="btn">
          </div>
        </center>
    </div>
  </form>
</div>

<<?php require 'layout/footer.php' ?>