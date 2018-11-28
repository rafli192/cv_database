<?php
	if(!isset($_SESSION['id'])){
		include('module/home.php');
	}else{
?>

  <div class="container" style="margin-top: 50px;background: #cecece !important;">
    <form class="" action="function/data_action.php" method="post" enctype="multipart/form-data">
      <table border="0" width="100%">
        <tr>
          <td>ID</td>
          <td><input class="form-input" type="text" name="id" required></td>
        </tr>
        <tr>
          <td>Tanggal Test</td>
          <td><input class="form-input" type="date" name="tanggal" required></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input class="form-input" type="text" name="nama" required></td>
        </tr>
        <tr>
          <td>Divisi</td>
          <td>
            <select name="divisi">
              <option>Koordinator Pemasaran</option>
              <option>Koordinator Operasional</option>
              <option>Koordinator Keuangan</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>
            <textarea style="width: 40%; height: 100px;" name="alamat"></textarea>
          </td>
        </tr>
        <tr>
          <td>Tes Kesehatan</td>
          <td>
            <input type="radio" name="kesehatan" value="lulus"> Lulus<br>
            <input type="radio" name="kesehatan" value="tidak lulus"> Tidak Lulus
          </td>
        </tr>
        <tr>
         <td>Tes Tulis</td>
          <td><input class="form-input" type="text" name="tes_tulis" required></td>
        </tr>
        <tr>
          <td>Psikotes</td>
          <td><input class="form-input" type="text" name="psikotes" required></td>
        </tr>
        <tr>
          <td>Upload CV</td>
          <td><input class="form-input" type="file" name="cv" required></td>
        </tr>

      </table><br><br>

      <input class="button" type="submit" name="submit" value="Simpan">
      <input class="button" type="submit" name="submit" value="Simpan dan tambah baru">
      <a class="button" href="index.php">Batal</a>

    </form>
  </div>

<?php
	}
?>
