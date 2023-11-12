<?php
	include("conexion.php");
	$_SESSION['VARIABLE'] = session_id();

$id = $_GET['ID'];
$resultado_1 = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id = '$id'");
$variable_1 = mysqli_fetch_array($resultado_1);
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modificar</title>
</head>

<body>
<article >
<section class="abm">
	<p>Modificar Usuario
	</p>
	<form action="modificar_usuario.php" method="post" >
	<label>
		<input type="hidden" name="id" readonly="readonly" value="<?php echo $variable_1["id"]?>" />
	</label><br />
	<label>Nombre
		<input type="text" name="nombre" value="<?php echo $variable_1["nombre"]?>" />
	</label><br />
	<label>Apellido
		<input type="text" name="apellido" value="<?php echo $variable_1["apellido"]?>" />
	</label><br />
	<label>Mail
		<input type="email" name="mail" value="<?php echo $variable_1["mail"]?>" />
	</label><br />
	<label>Usuario
		<input type="text" name="usuario" value="<?php echo $variable_1["usuario"]?>" required />
	</label><br />
	<label>clave
		<input type="password" name="clave" value="" required/>
	</label><br />
	<input type="submit" value="MODIFICAR"/>	

</form>
</section>
<p>SE CERRARA SU SESION AL MODIFICAR SUS DATOS</p>
</article>

    

</body>
</html>