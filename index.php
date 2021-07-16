<?php
 session_start();

 if(isset($_SESSION) && isset($_SESSION['logueado']) == TRUE){
    header('Location: secciones/');
}else{
    require_once 'login/Login.php';
}

if(isset($_POST['passwordhidden'])){
    $pass = $_POST['passwordhidden'];
    if($pass == "expo2021"){
        $_SESSION['logueado'] = TRUE;
        header('Location: secciones/');
    }else{
        $_SESSION['logueado'] == FALSE;
    }
}

?>