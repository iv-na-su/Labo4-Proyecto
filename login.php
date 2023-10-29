<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login de Usuarios</title>
</head>

<body>

<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

include("conexion.php");

$consulta=mysqli_query($conexion, "SELECT usuario, clave FROM usuarios WHERE usuario='$usuario' AND clave='$clave'");

$resultado=mysqli_num_rows($consulta);

if($resultado!=0){
	$respuesta=mysqli_fetch_array($consulta);
	
	include("perfil.php");
	$_SESSION['VARIABLE'] = session_id();

}else{
	echo "No es un usuario registrado";
	include ("form_registro.php");
}








?>

</body>
</html>