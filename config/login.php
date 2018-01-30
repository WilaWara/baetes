<?php
	require("conexion.php");
	session_start();

	$username = $_POST["username"];
	$password = $_POST["password"];

	$query="SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
	$result=$Conexion->query($query);

	$row=$result->fetch_assoc();
	$nr = mysqli_num_rows($result); 

	try{
		if($nr == 1){ 
			echo "Welcome...";
	    }else if($nr <= 0) { 
			echo "Wrong username and/or password";
	   	} 
	}catch(Exception $e){
		echo "There was a problem trying to login: ",  $e->getMessage(), "\n";
	}
?>