<<?php require 'layout/awal.php' ?>

<div class="judul_section">
  <h1>Edit Agenda</h1>
  <hr>
</div>
<div class="form1">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="textbox">
      <label for="judul_agenda" >Judul Agenda</label><br>
      <input type="text" name="judul_agenda" id="judul_agenda" required>
    </div>
      <div class="textbox">
        <label for="isi">Isi</label>
        <textarea class="ckeditor" id="ckeditor" name="isi"></textarea><br>
          <div class="textbox">
            <label for="img">Gambar</label>
            <input type="file" name="img" required>
          </div>
          <center>
            <div class="tambah1">
              <input type="submit" name="edit_agenda" value="EDIT" class="btn">
            </div>
          </center>
      </div>
  </form>
</div>

<<?php require 'layout/footer.php' ?>