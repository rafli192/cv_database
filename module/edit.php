<?php
	if(!isset($_SESSION['id'])){
		include('module/home.php');
	}else{
		$id=$_GET['id'];
		$query="SELECT * FROM calonkaryawan WHERE id='$id'";
		$data=mysql_query($query);
		if($data){
			$datarow=mysql_fetch_array($data);
?>

  <div class="container" style="margin-top: 50px;background: #cecece !important;">
    <form class="" action="function/data_action.php" method="post" enctype="multipart/form-data">
     	<input type="hidden" name="current_id" value="<?php echo($id) ?>"?>
      <table border="0" width="100%">
        <tr>
          <td>ID</td>
          <td><input class="form-input" type="text" name="id" value="<?php echo($datarow['id']) ?>" required></td>
        </tr>
        <tr>
          <td>Tanggal Test</td>
          <td><input class="form-input" type="date" name="tanggal" value="<?php echo($datarow['tgl_tes']) ?>" required></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input class="form-input" type="text" name="nama" value="<?php echo($datarow['nama']) ?>" required></td>
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
            <textarea style="width: 40%; height: 100px;" name="alamat"><?php echo($datarow['alamat']) ?></textarea>
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
          <td><input class="form-input" type="text" name="tes_tulis" value="<?php echo($datarow['tes_tertulis']) ?>" required></td>
        </tr>
        <tr>
          <td>Psikotes</td>
          <td><input class="form-input" type="text" name="psikotes" value="<?php echo($datarow['psikotes']) ?>" required></td>
        </tr>
        <tr>
          <td>Upload CV</td>
          <td><input class="form-input" type="file" name="cv"></td>
        </tr>

      </table><br><br>

      <input class="button" type="submit" name="submit" value="Edit">
      <a class="button" href="index.php?page=data">Exit</a>

    </form>
  </div>

<?php
		}else{
			echo('Invalid ID');
		}
	}
?>
