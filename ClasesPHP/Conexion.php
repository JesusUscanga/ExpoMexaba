<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbdata = 'expomexaba';
$prueba = 'prueba';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbdata);
if($conn->connect_error){
    die('Error de Conexion ... Cancelado proceso ');
} 
?>