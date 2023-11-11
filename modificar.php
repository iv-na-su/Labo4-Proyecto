<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
</head>

<body>

<?php
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$lanzamiento = $_POST['lanzamiento'];
	$descripcion_chica = $_POST['descripcion_chica'];
	$descripcion_grande = $_POST['descripcion_grande'];
	$requisitos = $_POST['requisitos'];
	$portada = $_POST['portada'];


	include("conexion.php");

	$_SESSION['VARIABLE'] = session_id();

	$consulta = mysqli_query($conexion, "UPDATE juegos
							 SET Nombre = '$nombre', Lanzamiento = '$lanzamiento', Descripcion_Chica = '$descripcion_chica',
							Descripcion_Grande = '$descripcion_grande', Requisitos = '$requisitos', Portada = '$portada' 
							 WHERE ID = '$id'");

	header("Location:perfil.php");

?>	
    

</body>
</html>