<?php
session_start();

if(isset($_SESSION) && isset($_SESSION['logueado']) == TRUE){
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
}