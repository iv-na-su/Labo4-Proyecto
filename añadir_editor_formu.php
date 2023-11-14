<?php
	include("conexion.php");
	$_SESSION['VARIABLE'] = session_id();

?>


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
<img class="fondo" src="images/fondo_formu.jpg" alt="">
<header>
    <?php
    include("NAV.php");
    ?>
</header>

<article class="formu">
<section >
	<p>AÑADIR
	</p>
	<form action="añadir_editor.php" method="post" >
	<label>ID
		<input type="text" name="id" readonly="readonly" />
	</label><br />
	<label>Editor
		<input type="text" name="editor" />
	</label><br />

	
	<input type="submit" value="AÑADIR"/>	

</form>
</section>
</article>

<footer>
<?php
    include("FOOTER.php");
    ?>
</footer>

</body>
</html>