<?php
	session_start();
	include '../function/connection.php';
	$act = $_POST['submit'];

	if($act=='Simpan' OR $act=='Simpan dan tambah baru'){
		$id = $_POST['id'];
		$tanggal = $_POST['tanggal'];
		$nama = $_POST['nama'];
		$divisi = $_POST['divisi'];
		$alamat = $_POST['alamat'];
		$kesehatan = $_POST['kesehatan'];
		$psikotes = $_POST['psikotes'];
		$tes_tulis = $_POST['tes_tulis'];
		if(($psikotes+$tes_tulis)/2>54 && $psikotes>54 && $tes_tulis>54){
			$hasil='Lulus';
		}else{
			$hasil='Tidak Lulus';
		};
		$tmp_cv = $_FILES['cv']['tmp_name'];
		$cv = $_FILES['cv']['name'];
		$created = $_SESSION['id'];
		
		if(move_uploaded_file($tmp_cv,'../uploads/cv/'.$cv.'')){
		$reg = mysql_query("INSERT INTO calonkaryawan VALUES ('$id','$tanggal','$nama','$divisi','$alamat','$kesehatan','$psikotes','$tes_tulis','$hasil','$cv','$created','')");
		
			if($reg){
				if($act=='Simpan'){
					header('location:../index.php?page=data');
				}elseif($act=='Simpan dan tambah baru'){
					header('location:../index.php?page=form');
				}
			}
		}else{
			echo('Fatal Error');
		}
	}elseif($act=='Edit'){
		$current_id=$_POST['current_id'];
		$id = $_POST['id'];
		$tanggal = $_POST['tanggal'];
		$nama = $_POST['nama'];
		$divisi = $_POST['divisi'];
		$alamat = $_POST['alamat'];
		$kesehatan = $_POST['kesehatan'];
		$psikotes = $_POST['psikotes'];
		$tes_tulis = $_POST['tes_tulis'];
		if(($psikotes+$tes_tulis)/2>54 && $psikotes>54 && $tes_tulis>54){
			$hasil='Lulus';
		}else{
			$hasil='Tidak Lulus';
		}
		$created = $_SESSION['id'];
		$edited = $_SESSION['id'];
		if(!empty($tmp_cv = $_FILES['cv']['tmp_name']) && !empty($cv = $_FILES['cv']['name'])){
			move_uploaded_file($tmp_cv,'../uploads/cv/'.$cv.'');
		}else{
			$dataquery=mysql_query("SELECT cv FROM calonkaryawan WHERE id='$current_id'");
			$datarow=mysql_fetch_array($dataquery);
			$cv=$datarow['cv'];
		}
		$update = mysql_query("UPDATE calonkaryawan SET id='$id',tgl_tes='$tanggal',nama='$nama',divisi='$divisi',alamat='$alamat',tes_kesehatan='$kesehatan',psikotes='$psikotes',tes_tertulis='$tes_tulis',hasil_akhir='$hasil',cv='$cv',created_by='$created',edited_by='$edited' WHERE id='$current_id'");
		
			if ($update){
				header('location:../index.php?page=data');
			}
		}elseif($_GET['act']=='delete'){
			$id=$_GET['id'];
			$delete="DELETE FROM calonkaryawan WHERE id='$id'";
			$delete_query=mysql_query($delete);
			
			if($delete_query){
				header('location:../index.php?page=data');
			}else{
				echo("Failed to delete");
			}
		}else{
			echo('Fatal Error');
			error_reporting();
		}
?>