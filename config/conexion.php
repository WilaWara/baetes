<?php
	global $host,$user,$pass,$db;

	//HERE YOU REPLACE THIS DATA WITH YOUR HOST DATA
	$host = "sql111.epizy.com";
	$user = "epiz_21253003";
	$pass = "I811Cirka0Bb";
	$db = "epiz_21253003_baetes";

	/*$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "baetes";*/
	try{
		@$Conexion = mysqli_connect($host, $user, $pass) or die ("Error de conexion");
		mysqli_select_db($Conexion, $db) or die ("Hubo un problema al conectar a la base de datos".mysqli_error($Conexion));
	}catch(Exception $e){
		echo $e;
	}
?>
