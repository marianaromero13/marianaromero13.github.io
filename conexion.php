<?php
$host = 'localhost';
$usuario = 'caninos';
$contrasena = '';
$basedatos = 'caninos';
 
$conexion = mysqli_connect($host, $usuario, $contrasena, $basedatos);
 
if (!$conexion) {
    die('Error al conectar: ' . mysqli_connect_error());
}
 
echo 'Conexión exitosa!';
?>