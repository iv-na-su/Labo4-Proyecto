<?php
	include("conexion.php");
	$_SESSION['VARIABLE'] = session_id();

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AÑADIR GENERO</title>
</head>

<body>
<?php 


?>

<article >
<section class="abm">
	<p>AÑADIR
	</p>
	<form action="añadir_genero.php" method="post" >
	<label>ID
		<input type="number" name="id" readonly="readonly" />
	</label><br />
	<label>Genero
		<input type="text" name="genero" />
	</label><br />

	
	<input type="submit" value="AÑADIR"/>	

</form>
</section>
</article>

    

</body>
</html>