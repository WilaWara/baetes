<?php
	require('conexion.php');
	session_start();

	$criterio = $_POST["criterio"];
	$criterio_filtrado = mysqli_real_escape_string($Conexion, $criterio);
	$datos = "";

	if($criterio_filtrado == "All"){
		$consulta="SELECT * FROM companies";
	}else{
		$consulta="SELECT * FROM companies WHERE INSTR(name, '$criterio_filtrado') > 0";
	}
	
	if ($resultado = $Conexion->query($consulta)) {
	    while ($fila = $resultado->fetch_assoc()) {
	      	$datos .= $fila["id"] . ",*" . $fila["name"] . ",*" . $fila["url"] . ",*" . $fila['logo'] . ",*" . $fila['description'] . ",*";
	    }

	    echo $datos;
	}else{
		echo "There is no records";
	}
	
	$Conexion->close();
?>