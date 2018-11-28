<?php
	if(!isset($_SESSION['id'])){
		header('location:index.php');
	}
	
	if(!isset($_GET['tanggal']) && !isset($_GET['status'])){
		$dataquery=mysql_query("SELECT * FROM calonkaryawan");
		$report="Report Tampil Semua";
	}elseif(isset($_GET['tanggal'])){
		$tanggal=$_GET['tanggal'];
		$report="Report by Date";
		$dataquery=mysql_query("SELECT * FROM calonkaryawan WHERE tgl_tes='$tanggal'");
	}elseif(isset($_GET['status']) && $_GET['status']=='lulus'){
		$report="Report by Lulus";
		$dataquery=mysql_query("SELECT * FROM calonkaryawan WHERE hasil_akhir='Lulus'");
	}elseif(isset($_GET['status']) && $_GET['status']=='tdk_lulus'){
		$report="Report by Tidak Lulus";
		$dataquery=mysql_query("SELECT * FROM calonkaryawan WHERE hasil_akhir='Tidak Lulus'");
	}
?>
	<style>
		body{background:#cecece !important}
	</style>
	<div class="container" style="margin-top: 50px;">
	<h2><?php echo($report)?></h2>
<!--		<a href="module/report-excel.php?status=<?php echo $_GET['status']; ?>">Export to Excel</a>-->
	<?php 
	if(!isset($_GET['tanggal']) && !isset($_GET['status'])){
		echo('<a href="module/report-excel.php">Export to Excel</a>'); 
	}elseif(isset($_GET['status'])){
		echo('<a href="module/report-excel.php?status='.$_GET['status'].'">Export to Excel</a>'); 
	}if(isset($_GET['tanggal'])){
		echo('<a href="module/report-excel.php?tanggal='.$_GET['tanggal'].'">Export to Excel</a>'); 
	}
	?>
    <table border="1" cellspacing="0" cellpadding="0" width="100%" style="background: #FFF">
      <tr>
        <th>ID</th>
        <th>Tanggal Tes</th>
        <th>Nama</th>
        <th>Divisi</th>
        <th>Alamat</th>
        <th>Tes Kesehatan</th>
		<th>Hasil Tulis</th>
        <th>Nilai Psikotes</th>
        <th>Nilai Akhir</th>
        <th>CV</th>
      </tr>
      
<?php
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
			<td><a href="uploads/cv/'.$datarow['cv'].'">Download</a></td>
		  </tr>
			');
		}
	}
?>
		</table>
  </div>
