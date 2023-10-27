<!DOCTYPE html>
<html lang="es">

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
    include("NAV.php");
    ?>
</header>

<article >
    <section class="formu">
        <p>REGISTRARSE
        </p>
        <form action="registro.php" method="post" >
    	<label>Nombre
        	<input type="text" name="nombre" required />
        </label><br />
		<label>Apellido
        	<input type="text" name="apellido" required />
        </label><br />
        <label>Email
        	<input type="email" name="email" required />
        </label><br />
        <label>Nombre de usuario
        	<input name="usuario" type="text" maxlength="12" />
        </label><br />
        <label>Contraseña
        	<input type="password" name="password" maxlength="12" />
        </label><br />
        <input type="submit" value="Registrarse"/>	

    </form>
    </section>
</article>

<footer>
<?php
    include("FOOTER.php");
    ?>
</footer>

<script type="text/javascript">
    function myFunction() {
      var x = document.getElementById("menu_hamburguesa");
      if (x.className === "") {
          x.className = "responsive";
        } 
      else {
          x.className = "";
        }
    }
</script>


<!-- Script de efecto zoom -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});
</script>
</body>

</html>