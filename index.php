<?php

    session_start();

    require_once 'ClasesPHP/Clases.php';
    $Clases = new Clases();

    $revisa = $Clases->RevisarCambios();

    if(isset($_SESSION) && isset($_SESSION['logueado']) == TRUE){
        header('Location: secciones/');
    }

    #Debemos de verificar el envio del formulario
    if(isset($_POST['btnLogin'])){
        $idusuario = $_POST['idusuario'];
        $idpassword = $_POST['password'];

        $resultSet = $Clases->select($idusuario, $idpassword);

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