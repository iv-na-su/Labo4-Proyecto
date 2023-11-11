<?php
	include("conexion.php");
	$_SESSION['VARIABLE'] = session_id();

$id = $_GET['ID'];
$resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = '$id'");
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
	<p>Modificar
	</p>
	<form action="modificar.php" method="post" >
	<label>ID
		<input type="text" name="id" readonly="readonly" value="<?php echo $variable_1["ID"]?>" />
	</label><br />
	<label>Nombre
		<input type="text" name="nombre" value="<?php echo $variable_1["Nombre"]?>" />
	</label><br />
	<label>Lanzamiento
		<input type="text" name="lanzamiento" value="<?php echo $variable_1["Lanzamiento"]?>" />
	</label><br />
	<label>Descripcion_Chica
		<input type="text" name="descripcion_chica" value="<?php echo $variable_1["Descripcion_Chica"]?>"/>
	</label><br />
	<label>Descripcion_Grande
		<input type="text" name="descripcion_grande" type="text" value="<?php echo $variable_1["Descripcion_Grande"]?>"/>
	</label><br />
	<label>Requisitos
		<input type="text" name="requisitos"value="<?php echo $variable_1["Requisitos"]?>" />
	</label><br />
	<label>Portada
		<input type="text" name="portada" value='<?php echo $variable_1["Portada"]?>' />
	</label><br />
	<input type="submit" value="MODIFICAR"/>	

</form>
</section>
</article>

<?php
	

	





?>	
    

</body>
</html>