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
   $resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 21");
   $variable_1 = mysqli_fetch_assoc($resultado_1);

   $resultado_3 = mysqli_query($conexion, "SELECT * FROM desarrollador WHERE ID = 21");
   $variable_3 = mysqli_fetch_assoc($resultado_3);
 ?>
 <h2 class = "titulos"><?php echo $variable_1["Nombre"]; ?></h2>

<article class="juegos">
    <div class="galeria">
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/Darkest_Dungeon/Darkest_Dungeon_1.jpg" alt=""></li>
    <li id="slide2"><img src="images/Capturas/Darkest_Dungeon/Darkest_Dungeon_2.jpg" alt=""></li>
    <li id="slide3"><img src="images/Capturas/Darkest_Dungeon/Darkest_Dungeon_3.jpg" alt=""></li>
    <li id="slide4"><img src="images/Capturas/Darkest_Dungeon/Darkest_Dungeon_4.jpg" alt=""></li>
    <li id="slide5"><img src="images/Capturas/Darkest_Dungeon/Darkest_Dungeon_5.jpg" alt=""></li>
    <li id="slide6"><img src="images/Capturas/Darkest_Dungeon/Darkest_Dungeon_6.jpg" alt=""></li>
    <li id="slide7"><img src="images/Capturas/Darkest_Dungeon/Darkest_Dungeon_7.jpg" alt=""></li>
    <li id="slide8"><img src="images/Capturas/Darkest_Dungeon/Darkest_Dungeon_8.jpg" alt=""></li>
    <li id="slide9"><img src="images/Capturas/Darkest_Dungeon/Darkest_Dungeon_9.jpg" alt=""></li>
    <li id="slide10"><img src="images/Capturas/Darkest_Dungeon/Darkest_Dungeon_10.jpg" alt=""></li>
    <li id="slide11"><img src="images/Capturas/Darkest_Dungeon/Darkest_Dungeon_11.jpg" alt=""></li>
    <li id="slide12"><img src="images/Capturas/Darkest_Dungeon/Darkest_Dungeon_12.jpg" alt=""></li>
    <li id="slide13"><img src="images/Capturas/Darkest_Dungeon/Darkest_Dungeon_13.jpg" alt=""></li>
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
        <img src="images/Capturas/Darkest_Dungeon/Darkest_Dungeon_Portada.jpg" alt="">
        <p>Darkest Dungeon es un desafiante juego de rol gótico en mazmorras y por turnos que gira en torno al esfuerzo psicológico de la aventura. Recluta, entrena y lidera a un equipo de héroes imperfectos a través de enrevesados bosques, laberintos olvidados, criptas en ruinas y más allá.</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: <?php echo $variable_1["Lanzamiento"]; ?>
        <br>
        <br>
        DESARROLLADOR: <a href="https://www.redhookgames.com/" target="_blank"><?php echo $variable_3["Desarrollador"]; ?></a> 
        <br>
        EDITOR: <a href="https://www.redhookgames.com/" target="_blank"><?php echo $variable_3["Editor"]; ?></a>  
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
<p>Darkest Dungeon es un desafiante juego de rol gótico en mazmorras y por turnos que gira en torno al esfuerzo psicológico de la aventura.
<br>
Recluta, entrena y lidera a un equipo de héroes imperfectos a través de enrevesados bosques, laberintos olvidados, criptas en ruinas y más allá. Te enfrentarás no solo a enemigos inimaginables, sino al esfuerzo, el hambre, la enfermedad y la siempre acechante oscuridad. Descubre extraños misterios y enfrenta a los héroes a una serie de temibles monstruos con un innovador sistema de combate estratégico por turnos.
<br><br><br>
○ 3 modos de juego y más de 80 horas de duración<br>
○ Compatibilidad con Steam Workshop para uso de modificaciones<br>
○ Sistema de aflicción: ¡enfréntate no solo a monstruos, sino al esfuerzo! ¡Lidia con la paranoia, el masoquismo, el miedo, la irracionalidad y una serie de peculiaridades que afectarán a la dinámica de juego!<br>
○ Impresionante estilo de ilustraciones góticas dibujadas a mano.<br>
○ El innovador combate por turnos te enfrenta a una horda de monstruos diabólicos.<br>
○ ¡16 clases de héroes seleccionables (¡y más que se añadirán!), entre ellos la doctora de plagas, la diabla e incluso un leproso!<br>
○ Acampa para curar heridas o dar discursos inspiradores.<br>
○ Permite que tus agotados personajes descansen en la ciudad, la taberna o la abadía para que el esfuerzo no les afecte.<br>
○ Características de los clásicos juegos de rol y mazmorras, como la muerte permanente, las mazmorras generadas por procedimientos e increíbles posibilidades de volver a jugar<br>
<br><br>
¿Puedes contener la horda de horrores y espíritus que están surgiendo en el feudo ancestral de tu familia?<br>
<br>
¡Desciende bajo tu propio riesgo!</p>
</div>

<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO: <br><br>
SO: Windows XP<br>
Memoria: 2 GB de RAM<br>
Gráficos: Open GL 3.2+ Compliant<br>
Almacenamiento: 2 GB de espacio disponible<br>
Notas adicionales: 1080p, 16:9 recommended
<br>
<br>
<br>
<br>
RECOMENDADO:<br><br>
SO: Windows 7+<br>
Memoria: 4 GB de RAM<br>
Gráficos: Open GL 3.2+ Compliant<br>
Almacenamiento: 2 GB de espacio disponible<br>
Notas adicionales: 1080p, 16:9 recommended </p>
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