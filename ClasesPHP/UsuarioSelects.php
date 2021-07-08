<?php 


class UsuariosSelects{

    function select($usuario, $contraseña){
       
        require_once 'Conexion.php';
        $sqlSelect = "SELECT * FROM clientes 
        WHERE user = '$usuario' and pass = '$contraseña'";

        $resultSet = $conn->query($sqlSelect);
        return $resultSet;

    }
}


?>