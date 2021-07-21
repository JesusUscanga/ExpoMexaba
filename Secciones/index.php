<?php
session_start();

if(isset($_SESSION) && isset($_SESSION['logueado']) == TRUE){
    //require_once 'completa.html';
    require_once 'header.php';
    require_once('../clases/Mobile_Detect.php');
    $detect = new Mobile_Detect();
    if ($detect->isMobile() || $detect->isTablet()) {  
        require_once 'bodyMovil.php';
    }else{
        require_once 'bodyEscritorio.php';
    }
    require_once 'footer.php';
}else{
   //require_once 'Login/Login.php';
   header('Location: ../index.php');
}

?>