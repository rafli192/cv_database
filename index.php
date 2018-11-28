<html>
<?php
	session_start();
	include('function/connection.php');
	
?>
<head>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/base.css">
</head>
<body>
<?php
	include('module/navbar.php');
	
	$page='';
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}
	$adminstatus='';
	if(isset($_SESSION['id'])){
		$user_id=$_SESSION['id'];
	}
	$file = "module/$page.php";
	if(empty($page)){
		include 'module/home.php';
	}elseif(!file_exists($file)){
		echo("Page not found");
	}elseif(file_exists($file)){
		include $file;
	}
?>

</body>

</html>
