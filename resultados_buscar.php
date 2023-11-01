<!doctype html>
<html>
<head>
    <link rel="icon" href="images/Vapor_Logo_Png.png" type="Images/png">
    <title>Vapor: The Proyect</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo_santi.css">
</head>

<body>

<header>
	<?php
	include('NAV.php');
?>
</header>
<section>

<article class="busqueda">
<h3>
<?php
	include('conexion.php');

	$buscar = $_GET['buscar'];
	echo "Resultados de búsqueda para: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM juegos WHERE Nombre LIKE '%$buscar%' ");
?>
</h3>
</article>
<article class="busqueda">
		<p>
		<h2>Cantidad de Resultados:
		<?php
			$nros=mysqli_num_rows($consulta);
			echo $nros;
		?>
		</h2> 
		</p>
	    
		<?php
			while($resultados=mysqli_fetch_array($consulta)) {
		?>

	    <p>
	    <?php	
			echo "<img src='images/Capturas/".$resultados['Archivo']."/".$resultados['Archivo']."_Portada.jpg'>"."</img>";
			echo "<br>";
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

	    <?php
			}

			mysqli_free_result($consulta);
			mysqli_close($conexion);
		?>
</article>
</section>
<footer>
<?php
    include("FOOTER.php");
    ?>
</footer>

</body>
</html>