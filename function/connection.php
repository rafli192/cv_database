<?php
	$host='localhost';
	$username='root';
	$pass='';
	$db='cvmanunggal';

	$con = mysql_connect($host, $username, $pass) or die ('Failed to connect');
	
	mysql_select_db($db, $con) or die ('Failed to connect');
?>