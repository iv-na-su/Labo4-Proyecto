<?php  
session_start ();
 session_destroy();
 $consulta_3 = mysqli_query($conexion, "UPDATE usuarios SET id_sesion='NULL' WHERE usuario='$usuario' AND clave='$clave'");
 include("iniciar_sesion.php");
?>