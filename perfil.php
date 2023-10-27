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
        <p>¿Quiere hacer algún comentario en cuanto a nuestra página web?<br>
                  ¡Todos sus mensajes son bienvenidos!<br>
            ¡Complete el formulario y envíelo!
        </p>
        <form action="perfil.php" method="post">
            <br><label for="nom">Nombre:</label>
            <input type="text" name="nombre" maxlength="10" id="identificador">

            <br><label for="ape">Apellido:</label>
            <input type="text" name="apellido" maxlength="10" id="identificador">

            <br><label for="email">Email:</label>
            <input type="email" name="email" maxlength="40" id="identificador">

            <br><label for="contra">Contraseña:</label>
            <input type="password" name="contraseña" maxlength="10" id="identificador">

            <br><label for="username">Nombre de usuario:</label>
            <input type="text" name="username" maxlength="20" id="identificador">

            <br><input type="submit" value="Enviar" id="identificador">
            <input type="reset" value="Resetear Información" id="identificador">
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