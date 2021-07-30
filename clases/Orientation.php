
<?php


if(!isset($_GET['ancho']) && !isset($_GET['alto']) )
{
echo "<script language=\"JavaScript\">
<!-- 
document.location=\"$PHP_SELF?ancho=\"+screen.width+\"&alto=\"+screen.height;
//-->
</script>";
}
else {
if(isset($_GET['ancho']) && isset($_GET['alto'])) {
// Resolución de pantalla
 //echo "Esta es tu resolucion de pantalla: Ancho= ".$_GET['ancho']." y Alto= ".$_GET['alto'];
    if($_GET['ancho']<$_GET['alto']){
        //echo "Vertical";
        $_SESSION["orientation"]="Vertical";
    }else if($_GET['ancho']>$_GET['alto']){
        //echo "Horizontal";
        $_SESSION["orientation"]="Horizontal";
    }
 }
 else {
 // Error en la detección
 echo "Recarga tu página";
 }
}

?>