<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>EDITAR</title>
</head>

<body>
<?php 
	include("conexion.php");

	$_SESSION['VARIABLE'] = session_id();


?>



<?php
	$id = $_GET['ID'];

	$consulta = mysqli_query($conexion, "DELETE FROM juegos WHERE ID = '$id'");

	header("Location:perfil.php");

?>	
    

</body>
</html>