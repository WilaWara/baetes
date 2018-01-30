<?php
	require('conexion.php');
	session_start();

    $email = $_POST["email"];
    $safe_email = mysqli_real_escape_string($Conexion, $email);

	$query = "INSERT INTO subscribers (email) VALUES ('$safe_email')";
	$result = $Conexion->query($query);

	echo "Thank you, SOME MESSAGE HERE";
?>