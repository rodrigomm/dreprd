<?php 
	$host = "localhost";
	$dbname = "sistema_rd";
	$user = "root";
	$password = "";

	try {
		$con = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8",$user,$password);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (Exception $e) {
		echo "Error de conexion ".$e->getMessage();
	}
	

 ?>