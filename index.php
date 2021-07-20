<?php
 session_start();

 if(isset($_SESSION) && isset($_SESSION['logueado']) == TRUE){
    header('Location: Secciones/');
}else{
    require_once 'Login/Login.php';
}

if(isset($_POST['passwordhidden'])){
    $pass = $_POST['passwordhidden'];
    if($pass == "expo2021"){
        $_SESSION['logueado'] = TRUE;
        header('Location: Secciones/');
    }else{
        $_SESSION['logueado'] == FALSE;
    }
}

?>