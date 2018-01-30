<?php
    require('conexion.php');
    session_start();

    $id_delete = $_POST["id_delete"];

    $consulta = "DELETE FROM companies WHERE id='$id_delete'";
    $resultado=$Conexion->query($consulta);

    echo "Company data successfully deleted";
?>