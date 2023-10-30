<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MySQL</title>
</head>

<body>
<section>
<?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM juegos WHERE Nombre LIKE '%$buscar%' ");
?>
<article style="width:60%;margin:0 auto;border:solid;padding:10px">
	<p>Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p>
    <?php	
			echo "<img src='images/Capturas/".$resultados['Archivo']."".$resultados['Archivo']."_Portada.jpg'>"."</img>";
			echo "<a href='".$resultados['Archivo'].".php'>".$resultados['Nombre']."</a>";
			$genero = $resultados['codigo_genero'];
			echo "<br>";
			echo "FECHA DE LANZAMIENTO: ".$resultados['Lanzamiento'];
			echo "<br>";
			$consulta_genero = mysqli_query($conexion, "SELECT * FROM generos WHERE id LIKE '%$genero%'");

			while($resultado_genero=mysqli_fetch_array($consulta_genero)){
				echo "GENERO: ".$resultado_genero['genero'];
			}
			


			
	?>
    </p>
    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>
</article>
</section>

</body>
</html>