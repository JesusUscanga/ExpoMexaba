<?php 


class Clases{

    function comparar($contenidoFichero1, $contenidoFichero2, $tamanioFichero1, $tamanioFichero2){
       
        if ($tamanioFichero1 === $tamanioFichero2 && $contenidoFichero1 === $contenidoFichero2) {
            //$resultado = "TAMAÑO IGUAL\nTamaño: " . $tamanioFichero1 . " bytes\nCONTENIDO IGUAL\nContenido 1 y 2: " . $contenidoFichero1;
            $result = false;
        } else if ($tamanioFichero1 === $tamanioFichero2 && $contenidoFichero1 !== $contenidoFichero2) {
            //$resultado = "TAMAÑO IGUAL\nTamaño: " . $tamanioFichero1 . " bytes\nCONTENIDO DIFERENTE\nContenido 1: " . $contenidoFichero1 . "\nContenido 2: " . $contenidoFichero2;
            $result = true;
        } else {
            //$resultado = "TAMAÑO DIFERENTE\nTamaño: " . $tamanioFichero1 . "bytes - " . $tamanioFichero2 . "bytes\nCONTENIDO DIFERENTE\nContenido 1: " . $contenidoFichero1 . "\nContenido 2: " . $contenidoFichero2;
            $result = true;
        }
        return $result;
    }

    function select($usuario, $contraseña){
       
        require_once 'Conexion.php';
        $sqlSelect = "SELECT * FROM clientes 
        WHERE user = '$usuario' and pass = '$contraseña'";

        $resultSet = $conn->query($sqlSelect);
        return $resultSet;

    }

    function RevisarCambios(){
        $source =("https://www.eqns.com.mx/ConfiguracionesPHP/ExpoMexaba/Conexion.txt");
        $destination = 'ClasesPHP/Conexion.php';

        $data = @file_get_contents($source);
        $datadestination = @file_get_contents($destination);

        $sizedata= strlen($data);
        $sizedatadestination= strlen($datadestination);

        if($data === false){
            //Avisar que está fallando
        }else{
            $results = $this->comparar($data, $datadestination, $sizedata, $sizedatadestination);
            if($results === true){
                $handle = fopen($destination, "w");
                fwrite($handle, $data);
                fclose($handle);
            }else if($results === false){
                //No se reescribe el archivo
            }
            
        }
    }
}


?>