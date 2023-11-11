<?php
	include("conexion.php");
	$_SESSION['VARIABLE'] = session_id();

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AÑADIR EDITOR</title>
</head>

<body>
<?php 


?>

<article >
<section class="abm">
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

    

</body>
</html>