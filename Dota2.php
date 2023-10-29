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
   $resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 20");
   $variable_1 = mysqli_fetch_assoc($resultado_1);

   $resultado_2 = mysqli_query($conexion, "SELECT * FROM desarrollador WHERE ID = 1");
   $variable_2 = mysqli_fetch_assoc($resultado_2);

   $resultado_3 = mysqli_query($conexion, "SELECT * FROM editor WHERE ID = 1");
   $variable_3 = mysqli_fetch_assoc($resultado_3);

 ?>
 <h2 class = "titulos"><?php echo $variable_1["Nombre"]; ?></h2>

<article class="juegos">

    <div class="galeria">

    
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/Dota2/Dota2_1.jpg" alt="Imágen N°1 de Dota 2"></li>
    <li id="slide2"><img src="images/Capturas/Dota2/Dota2_2.jpg" alt="Imágen N°2 de Dota 2"></li>
    <li id="slide3"><img src="images/Capturas/Dota2/Dota2_3.jpg" alt="Imágen N°3 de Dota 2"></li>
    <li id="slide4"><img src="images/Capturas/Dota2/Dota2_4.jpg" alt="Imágen N°4 de Dota 2"></li>
    <li id="slide5"><img src="images/Capturas/Dota2/Dota2_5.jpg" alt="Imágen N°5 de Dota 2"></li>
    <li id="slide6"><img src="images/Capturas/Dota2/Dota2_6.jpg" alt="Imágen N°6 de Dota 2"></li>
    <li id="slide7"><img src="images/Capturas/Dota2/Dota2_7.jpg" alt="Imágen N°7 de Dota 2"></li>
    <li id="slide8"><img src="images/Capturas/Dota2/Dota2_8.jpg" alt="Imágen N°8 de Dota 2"></li>
    <li id="slide9"><img src="images/Capturas/Dota2/Dota2_9.jpg" alt="Imágen N°9 de Dota 2"></li>
    <li id="slide10"><img src="images/Capturas/Dota2/Dota2_10.jpg" alt="Imágen N°10 de Dota 2"></li>
    <li id="slide11"><img src="images/Capturas/Dota2/Dota2_11.jpg" alt="Imágen N°11 de Dota 2"></li>
    <li id="slide12"><img src="images/Capturas/Dota2/Dota2_12.jpg" alt="Imágen N°12 de Dota 2"></li>
    <li id="slide13"><img src="images/Capturas/Dota2/Dota2_13.jpg" alt="Imágen N°13 de Dota 2"></li>
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
        <img src="images/Capturas/Dota2/Dota2_Portada.jpg" alt="Portada de Dota 2">
        <p>Cada día, millones de jugadores de todo el mundo entran en batalla como uno de los más de cien héroes de Dota. Y no importa si es su décima hora de juego o la milésima, siempre hay algo nuevo que descubrir.</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: <?php echo $variable_1["Lanzamiento"]; ?>
        <br>
        <br>
        DESARROLLADOR: <a href="https://www.valvesoftware.com/es/" target="_blank"><?php echo $variable_2["Desarrollador"]; ?></a> 
        <br>
        EDITOR: <a href="https://www.valvesoftware.com/es/" target="_blank"><?php echo $variable_3["Editor"]; ?></a> 
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
<p><strong>El juego más jugado en Steam.</strong>
<br>Cada día, millones de jugadores de todo el mundo entran en batalla como uno de los más de cien héroes de Dota. Y no importa si es su décima hora de juego o la milésima, siempre hay algo nuevo que descubrir. Con frecuentes actualizaciones que garantizan una evolución constante de jugabilidad, características y héroes, Dota 2 realmente ha cobrado vida propia.
<br><br><strong>Un campo de batalla. Infinitas posibilidades.</strong>
<br>Cuando se trata de variedad de héroes, habilidades y poderosos objetos, Dota no tiene límite. No hay dos partidas iguales. Cada héroe puede desempeñar varios roles, y hay multitud de objetos para ayudar a satisfacer las necesidades de cada partida. Dota no pone límites a tu forma de jugar, te da el poder de expresar tu propio estilo.
<br><br><strong>Todos los héroes son gratuitos.</strong>
<br>El equilibrio competitivo es la joya de la corona de Dota, y para garantizar que todo el mundo juegue en un campo de batalla equilibrado, el contenido principal del juego —como el vasto grupo de héroes— está disponible para todos los jugadores. Los fans pueden coleccionar objetos cosméticos para los héroes y divertidos complementos para el mundo en que estos habitan, pero todo lo necesario para jugar ya está ahí antes de que te unas a tu primera partida.
<br><br><strong>Trae a tus amigos y forma un equipo.</strong>
<br>Dota es complejo y evoluciona constantemente, pero nunca es tarde para unirse.
Aprende los conceptos básicos jugando en modo cooperativo contra bots. Mejora tus habilidades en el modo de prueba de héroes. Entra en el sistema de emparejamiento basado en el comportamiento y la habilidad que se encarga de hacer que juegues con los jugadores adecuados en cada partida.</p>
</div>


<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO:<br><br>
SO: Windows 7 o posterior<br>
Procesador: Intel o AMD de doble núcleo a 2,8 GHz<br>
Memoria: 4 GB de RAM<br>
Gráficos: NVIDIA GeForce 8600/9600GT, ATI/AMD Radeon HD2600/3600<br>
DirectX: Versión 11<br>
Red: Conexión de banda ancha a Internet<br>
Almacenamiento: 60 GB de espacio disponible<br>
Tarjeta de sonido: Compatible con DirectX
<br><br>
<br><br>
RECOMENDADO:<br><br>
SO: Windows 7 o posterior<br>
Procesador: Intel o AMD de doble núcleo a 2,8 GHz<br>
Memoria: 4 GB de RAM<br>
Gráficos: NVIDIA GeForce 8600/9600GT, ATI/AMD Radeon HD2600/3600<br>
DirectX: Versión 11<br>
Red: Conexión de banda ancha a Internet<br>
Almacenamiento: 60 GB de espacio disponible<br>
Tarjeta de sonido: Compatible con DirectX

</p>
</div>


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
</body>

</html>