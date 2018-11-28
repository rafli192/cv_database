	<style>
		body{background:#cecece !important};
		.form{margin: 0px !important;
				background-color:#fff !important};
		
	</style>
	
	<?php
	if(isset($_POST['id']) || isset($_POST['nama']) || isset($_POST['tanggal'])){
		include('module/cari-idk.php');
	}
	?>
	<div class="container" style="margin-top: 50px;">
    <table border="1" cellspacing="0" cellpadding="0" width="100%" style="background: #FFF">
      <tr>
        <th>ID</th>
        <th>Tanggal Tes</th>
        <th>Nama</th>
        <th>Divisi</th>
        <th>Alamat</th>
        <th>Tes Kesehatan</th>
        <th>Nilai Tulis</th>
        <th>Nilai Psikotes</th>
        <th>Hasil Akhir</th>
		<th>Action</th>
      </tr>
      
<?php
	if(!isset($_POST['id']) && !isset($_POST['nama']) && !isset($_POST['tanggal'])){
		$dataquery=mysql_query("SELECT * FROM calonkaryawan");
		while($datarow=mysql_fetch_array($dataquery)){
			echo('
		  <tr>
			<td>'.$datarow['id'].'</td>
			<td>'.$datarow['tgl_tes'].'</td>
			<td>'.$datarow['nama'].'</td>
			<td>'.$datarow['divisi'].'</td>
			<td>'.$datarow['alamat'].'</td>
			<td>'.$datarow['tes_kesehatan'].'</td>
			<td>'.$datarow['tes_tertulis'].'</td>
			<td>'.$datarow['psikotes'].'</td>
			<td>'.$datarow['hasil_akhir'].'</td>
			<td><a href="index.php?page=edit&id='.$datarow['id'].'">Edit</a> | <a href="function/data_action.php?act=delete&id='.$datarow['id'].'">Hapus</a></td>
		  </tr>
			');
		}
	}elseif(isset($_POST['id']) || isset($_POST['nama']) || isset($_POST['tanggal'])){
		$id=$_POST['id'];
		$nama=$_POST['nama'];
		$tanggal=$_POST['tanggal'];
		$sql = "SELECT * FROM calonkaryawan WHERE ";
		if(!empty($_POST['id'])){
			$sql .= " id='$id'";
		}
		if(!empty($_POST['nama'])){
			if(!empty($_POST['id'])){
				$sql .= ' AND ';
			}
			$sql .= " nama like '%$nama%' ";
		}
		if(!empty($_POST['tanggal'])){
			if(!empty($_POST['id']) || !empty($_POST['nama'])){
				$sql .= ' AND ';
			}
			$sql .= " tgl_tes='$tanggal' ";
		}
		$dataquery=mysql_query($sql);
		if($dataquery){
			while($datarow=mysql_fetch_array($dataquery)){
				echo('
			  <tr>
				<td>'.$datarow['id'].'</td>
				<td>'.$datarow['tgl_tes'].'</td>
				<td>'.$datarow['nama'].'</td>
				<td>'.$datarow['divisi'].'</td>
				<td>'.$datarow['alamat'].'</td>
				<td>'.$datarow['tes_kesehatan'].'</td>
				<td>'.$datarow['tes_tertulis'].'</td>
				<td>'.$datarow['psikotes'].'</td>
				<td>'.$datarow['hasil_akhir'].'</td>
				<td><a href="index.php?page=edit&id='.$datarow['id'].'">Edit</a> | <a href="function/data_action.php?act=delete&id='.$datarow['id'].'">Hapus</a></td>
			  </tr>
				');
			}
		}else{
			echo('Data tidak ditemukan');
		}
	}
?>
		</table>
  </div>
