<?php
session_start();
include 'aplicacion/conexion.php';

//Se reciben los datos de usuario y clave
$usuario = $_POST['usuario'];
$password = md5($_POST['password']);

//Se realiza la consulta
$sql = 
"SELECT
    usuarios.Nombres,
    usuarios.Apellidos,
    usuarios.Usuario
FROM
    usuarios
WHERE
    usuarios.Usuario = '{$usuario}' AND
    usuarios.Password = '{$password}'";
    
//Se ejecuta la consulta
$resultado = mysql_query($sql, conexion()) or die(mysql_error());

//Se cuentan las filas que trae la consulta
$filas = mysql_num_rows($resultado);

//Se realiza la validacion
if($filas != 1){
    $_SESSION['error'] = "El usuario y/o la contrase&ntilde;a no existen en la base de datos";
    header ("Location: sesion.php");
}else{
    $_SESSION['exito'] = true;
    header ("Location: index.php");
}
//echo "Usuario: {$usuario}, contrasena: {$password}";
?>
