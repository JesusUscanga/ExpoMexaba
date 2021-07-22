<?php
 session_start();
 if(isset($_GET["mapaSalon"])){
    $_SESSION["salon"]=$_GET["mapaSalon"];
    header('Location: index.php');
    //header('Location:'.$_SERVER['HTTP_REFERER']);
 }