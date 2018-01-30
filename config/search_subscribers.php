<?php
	require('conexion.php');
	session_start();

	$criterio = $_POST["criterio"];
	$criterio_filtrado = mysqli_real_escape_string($Conexion, $criterio);
	$datos = "";
	$consulta="SELECT * FROM subscribers";
	
	if ($resultado = $Conexion->query($consulta)) {
	    //ARRAY ASOCIATIVO
	    while ($fila = $resultado->fetch_assoc()) {
	      	//$datos .= $fila["id"] . ",*" . $fila["nombre"] . ",*" . $fila["jerarquia"] . ",*" . $fila['nombre_usuario'] . ",*" . $fila['contrasena'] . ",*";
	      	$datos .= $fila["id"] . ",*" . $fila["email"] . ",*";
	    }

	    echo $datos;
	}else{
		echo "There is no records";
	}
	
	//CERRAR LA CONEXION
	$Conexion->close();
?>