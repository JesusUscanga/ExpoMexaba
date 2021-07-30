<?php

session_start();

if(isset($_SESSION) && isset($_SESSION['logueado']) == TRUE){
    require_once('../clases/Mobile_Detect.php');
    $detect = new Mobile_Detect();
    
        if ($detect->isMobile() || $detect->isTablet()) {  
            switch ($_SESSION["salon"]) {
                case "Salon1":
                    require_once 'MapasVerticales/salon1.html';
                    break;
                case "Salon2":
                    require_once 'MapasVerticales/salon2.html';
                    break;
                case "Salon3":
                    require_once 'MapasVerticales/salon3.html';
                    break;
                case "Salon4":
                    require_once 'MapasVerticales/salon4.html';
                    break;
                default:
                    header('Location: ../Secciones/');
            }
        }else{
            switch ($_SESSION["salon"]) {
                case "Salon1":
                    require_once 'MapasHorizontales/salon1.html';
                    break;
                case "Salon2":
                    require_once 'MapasHorizontales/salon2.html';
                    break;
                case "Salon3":
                    require_once 'MapasHorizontales/salon3.html';
                    break;
                case "Salon4":
                    require_once 'MapasHorizontales/salon4.html';
                    break;
                default:
                    header('Location: ../Secciones/');
            }
            
        }
        
}else{
   //require_once 'Login/Login.php';
   header('Location: ../index.php');
}
/*if(isset($_SESSION) && isset($_SESSION['logueado']) == TRUE){
    require_once('../clases/Orientation.php');
    if($_SESSION["orientation"] == "Vertical"){
        switch ($_SESSION["salon"]) {
            case "Salon1":
                require_once 'MapasVerticales/salon1.html';
                break;
            case "Salon2":
                require_once 'MapasVerticales/salon2.html';
                break;
            case "Salon3":
                require_once 'MapasVerticales/salon3.html';
                break;
            case "Salon4":
                require_once 'MapasVerticales/salon4.html';
                break;
            default:
                header('Location: ../Secciones/');
        }
    }else if($_SESSION["orientation"] == "Horizontal")
    switch ($_SESSION["salon"]) {
        case "Salon1":
            require_once 'MapasHorizontales/salon1.html';
            break;
        case "Salon2":
            require_once 'MapasHorizontales/salon2.html';
            break;
        case "Salon3":
            require_once 'MapasHorizontales/salon3.html';
            break;
        case "Salon4":
            require_once 'MapasHorizontales/salon4.html';
            break;
        default:
            header('Location: ../Secciones/');
    }
}else{
   //require_once 'Login/Login.php';
   header('Location: ../index.php');
}*/
?>