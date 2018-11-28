<?php
	session_start();
	include '../function/connection.php';
	$act = $_POST['submit'];
	if(!isset($_POST['submit'])){
		$act = $_GET['act'];
	}

	if($act=='Login'){
		$name = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM admin WHERE username='$name' AND password='$password'";
		$res= mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_array($res);
		$count = mysql_num_rows($res);
		
		if ($count > 0){
			$_SESSION['id']=$row['id'];
			$_SESSION['username']=$row['username'];
			
			header('location:../index.php?page=form');

		}else{
			echo("Failed to login");
		}
	}elseif($act=='Logout'){
		session_destroy();
		header('location:../index.php');
	}
?>