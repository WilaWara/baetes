<?php
	require('conexion.php');
	session_start();

	$criterio = $_POST["criterio"];
	$data = "";

	$consulta="SELECT * FROM companies";
	
	if ($resultado = $Conexion->query($consulta)) {
	    while ($fila = $resultado->fetch_assoc()) {
	      	$data .= $fila["name"] . ",*" . $fila["url"] . ",*" . $fila['logo'] . ",*" . $fila['description'] . ",*";
	    }

	    echo $data;
	}else{
		echo "There is no records";
	}
	
	$Conexion->close();
?>