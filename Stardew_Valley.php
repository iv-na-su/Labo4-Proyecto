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

<?php
   include("conexion.php");
   $resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 6");
   $variable_1 = mysqli_fetch_assoc($resultado_1);

   $resultado_3 = mysqli_query($conexion, "SELECT * FROM desarrollador WHERE ID = 6");
   $variable_3 = mysqli_fetch_assoc($resultado_3);
 ?>
 <h2 class = "titulos"><?php echo $variable_1["Nombre"]; ?></h2>

<article class="juegos">
    <div class="galeria">
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/Stardew_Valley/Stardew_Valley_1.jpg" alt="Imágen número 1 de Stardew Valley"></li>
    <li id="slide2"><img src="images/Capturas/Stardew_Valley/Stardew_Valley_2.jpg" alt="Imágen número 2 de Stardew Valley"></li>
    <li id="slide3"><img src="images/Capturas/Stardew_Valley/Stardew_Valley_3.jpg" alt="Imágen número 3 de Stardew Valley"></li>
    <li id="slide4"><img src="images/Capturas/Stardew_Valley/Stardew_Valley_4.jpg" alt="Imágen número 4 de Stardew Valley"></li>
    <li id="slide5"><img src="images/Capturas/Stardew_Valley/Stardew_Valley_5.jpg" alt="Imágen número 5 de Stardew Valley"></li>
    <li id="slide6"><img src="images/Capturas/Stardew_Valley/Stardew_Valley_6.jpg" alt="Imágen número 6 de Stardew Valley"></li>
    <li id="slide7"><img src="images/Capturas/Stardew_Valley/Stardew_Valley_7.jpg" alt="Imágen número 7 de Stardew Valley"></li>
    <li id="slide8"><img src="images/Capturas/Stardew_Valley/Stardew_Valley_8.jpg" alt="Imágen número 8 de Stardew Valley"></li>
    <li id="slide9"><img src="images/Capturas/Stardew_Valley/Stardew_Valley_9.jpg" alt="Imágen número 9 de Stardew Valley"></li>
    <li id="slide10"><img src="images/Capturas/Stardew_Valley/Stardew_Valley_10.jpg" alt="Imágen número 10 de Stardew Valley"></li>
    <li id="slide11"><img src="images/Capturas/Stardew_Valley/Stardew_Valley_11.jpg" alt="Imágen número 11 de Stardew Valley"></li>
    <li id="slide12"><img src="images/Capturas/Stardew_Valley/Stardew_Valley_12.jpg" alt="Imágen número 12 de Stardew Valley"></li>
    <li id="slide13"><img src="images/Capturas/Stardew_Valley/Stardew_Valley_13.jpg" alt="Imágen número 13 de Stardew Valley"></li>
 </ul>

 <nav class = "navsl">
    <ul class="galeriasl">
        <li><a href="#slide1">○</a></li>  <!--ES UN SIMBOLO DE UN CIRCULO "○" -->
        <li><a href="#slide2">○</a></li>
        <li><a href="#slide3">○</a></li>
        <li><a href="#slide4">○</a></li>
        <li><a href="#slide5">○</a></li>
        <li><a href="#slide6">○</a></li>
        <li><a href="#slide7">○</a></li>
        <li><a href="#slide8">○</a></li>
        <li><a href="#slide9">○</a></li>
        <li><a href="#slide10">○</a></li>
        <li><a href="#slide11">○</a></li>
        <li><a href="#slide12">○</a></li>
        <li><a href="#slide13">○</a></li>
    </ul>
</nav>
</div>

    <div>
        <img src="images/Capturas/Stardew_Valley/Stardew_Valley_Portada.jpg" alt="Portada de Stardew Valley">
        <p>Acabas de heredar la vieja parcela agrícola de tu abuelo de Stardew Valley. Decides partir hacia una nueva vida con unas herramientas usadas y algunas monedas. ¿Te ves capaz de vivir de la tierra y convertir estos campos descuidados en un hogar próspero?.</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: <?php echo $variable_1["Lanzamiento"]; ?>
        <br>
        <br>
        DESARROLLADOR: <a href="https://www.stardewvalley.net/" target="_blank"><?php echo $variable_3["Desarrollador"]; ?></a> 
        <br>
        EDITOR: <a href="https://www.stardewvalley.net/" target="_blank"><?php echo $variable_3["Editor"]; ?></a>  
        </h4>
    </div>

</article>

<div class = "reseña">
<h3>DEJA TU RESEÑA</h3>
<textarea name="" id="" cols="30" rows="10"></textarea>
</div>

<div class= "acerca_de">
<h3>ACERCA DE ESTE JUEGO</h3>
<br>
<br>
<p>Te vas a vivir al valle...
<br>Acabas de heredar la vieja parcela agrícola de tu abuelo de Stardew Valley. Decides partir hacia una nueva vida con unas herramientas usadas y algunas monedas. ¿Te ves capaz de vivir de la tierra y convertir estos campos descuidados en un hogar próspero?.
<br><br><strong>¡Crea la granja de tus sueños!</strong> Constrúyela desde cero en una de las cinco configuraciones del mapa.
<br><br><strong>¡Domina tu habilidad con la ganadería!</strong> Cría animales, siembra cultivos y fabrica maquinaria útil entre muchas más cosas.
<br><br><strong>¡Únete a la comunidad local!</strong> Entabla amistad con más de 30 habitantes de Pelican Town.
<br><br><strong>¡Personaliza a tu granjero!</strong> Podrás elegir entre cientos de opciones de personalización de personajes.
<br><br><strong>¡Instálate y empieza a formar una familia!</strong> Comparte tu vida en la granja con uno de los doce personajes con los que podrás tener una relación.
<br><br><strong>¡Explora grandes y misteriosas cuevas!</strong> Encuentra monstruos peligrosos y tesoros valiosos.</p>
</div>


<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO:<br><br>
SO: Windows Vista or greater<br>
Procesador: 2 Ghz<br>
Memoria: 2 GB de RAM<br>
Gráficos: 256 mb video memory, shader model 3.0+<br>
DirectX: Versión 10<br>
Almacenamiento: 500 MB de espacio disponible
<br><br>
<br><br>
RECOMENDADO:<br><br>
SO: Windows Vista or greater<br>
Procesador: 2 Ghz<br>
Memoria: 2 GB de RAM<br>
Gráficos: 256 mb video memory, shader model 3.0+<br>
DirectX: Versión 10<br>
Almacenamiento: 500 MB de espacio disponible
</p>
</div>


<footer>
    <div>
        <a href="index.php"><strong>Inicio</strong></a>
    </div>
    <div>
        <a href="juegos.php"><strong>Juegos</strong></a>
            <br><a href="#accion">Acción</a>
            <br><a href="#casual">Casual</a>
            <br><a href="#terror">Terror</a>
            <br><a href="#shooter">Shooter</a>
            <br><a href="#roguelike">Roguelike</a>
            <br><a href="#aventura">Aventura</a>
            <br><a href="#rpg">Rpg</a>
    </div>
    <div>
        <h7><strong>Perfil</strong></h7>
    </div>
    <div>
        <h7><strong>Contacto</strong></h7>
    </div>
    <br>
    <a href="https://es-la.facebook.com/" target="_blank"><img src="images/Icono_Facebook.png" alt="Facebook"></a>
    <a href="https://www.instagram.com/" target="_blank"><img src="images/Icono_Instagram.png" alt="Instagram"></a>
    <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZXMifQ%3D%3D%22%7D" target="_blank"><img src="images/Icono_Twitter.png" alt="Twitter"></a>
    <a href="https://www.tiktok.com/es/" target="_blank"><img src="images/Icono_TikTok.png" alt="TikTok"></a>
    <a href="https://web.snapchat.com/" target="_blank"><img src="images/Icono_Snapchat.png" alt="Snapchat"></a>
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
</body>

</html>