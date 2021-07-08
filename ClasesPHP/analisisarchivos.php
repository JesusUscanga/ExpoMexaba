<?php 


class analisisarchivos{

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
}


?>