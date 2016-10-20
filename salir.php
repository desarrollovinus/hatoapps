<?php
//Se incluye la conexion
include 'aplicacion/conexion.php';

session_start();
$conexion = Conexion();

//Se destruyen conexiones y sesiones
mysql_close($conexion);
session_destroy();

//Se redirecciona
header ("Location: index.php");
?>
