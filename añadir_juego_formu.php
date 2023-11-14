<?php
	include("conexion.php");
	$_SESSION['VARIABLE'] = session_id();

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AÑADIR JUEGO</title>
</head>

<body>
<?php 

$resultado_2 = mysqli_query($conexion, "SELECT * FROM generos");

$resultado_3 = mysqli_query($conexion, "SELECT * FROM desarrollador");

$resultado_4 = mysqli_query($conexion, "SELECT * FROM editor");
?>

<article class="formu">
<section class="abm">
	<p>AÑADIR
	</p>
	<form action="añadir_juego.php" method="post" >
	<label>ID
		<input type="number" name="id" readonly="readonly" />
	</label><br />
	<label>Nombre
		<input type="text" name="nombre" />
	</label><br />
	<label>Lanzamiento
		<input type="date" name="lanzamiento" />
	</label><br />


	<label>Genero
	<select name="genero">
	<?php while($variable_2 = mysqli_fetch_assoc($resultado_2)){?>
		<option value="<?php echo $variable_2["id"]?>"><?php echo $variable_2["genero"]?></option>
	  <?php } ?>
	</select>
	</label><br />


	<label>Desarrollador
	<select name="desarrollador">
	<?php while($variable_3 = mysqli_fetch_assoc($resultado_3)){?>
		<option value="<?php echo $variable_3["ID"]?>"><?php echo $variable_3["Desarrollador"]?></option>
	  <?php }?>
	</select>
	</label><br />


	<label>Editor
	<select name="editor">
	<?php while($variable_4 = mysqli_fetch_assoc($resultado_4)){?>
		<option value="<?php echo $variable_4["ID"]?>"><?php echo $variable_4["Editor"]?></option>
	  <?php } ?>
	</select>
	</label><br />


	<label>Descripcion_Chica
		<input type="text" name="descripcion_chica"/>
	</label><br />
	<label>Descripcion_Grande
		<input type="text" name="descripcion_grande" type="text" />
	</label><br />
	<label>Requisitos
		<input type="text" name="requisitos" />
	</label><br />
	<label>Ruta_Imagenes
		<input type="text" name="ruta_imagenes" />
	</label><br />
	<input type="submit" value="AÑADIR"/>	


	
	<input type="submit" value="AÑADIR"/>	

</form>
</section>
</article>

    

</body>
</html>