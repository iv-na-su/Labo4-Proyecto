<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login de Usuarios</title>
</head>

<body>

<?php
$usuario=$_POST['usuario'];
$clave=md5($_POST['clave']);

include("conexion.php");

$consulta=mysqli_query($conexion, "SELECT usuario, clave, nombre FROM usuarios WHERE usuario='$usuario' AND clave='$clave'");

$resultado=mysqli_num_rows($consulta);

if($resultado!=0){
	$respuesta=mysqli_fetch_array($consulta);
	include("perfil.php");
	$_SESSION['VARIABLE'] = session_id();
	$_SESSION['NOMBRE'] = $respuesta['nombre'];
	header("Location:perfil.php");

}else{
	echo"NO ES UN USUARIO REGISTRADO ";
	echo("<a href='form_registro.php'>REGISTRATE</a>");
}








?>

</body>
</html>