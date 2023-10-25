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
   $resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 17");
   $variable_1 = mysqli_fetch_assoc($resultado_1);

   $resultado_3 = mysqli_query($conexion, "SELECT * FROM desarrollador WHERE ID = 17");
   $variable_3 = mysqli_fetch_assoc($resultado_3);
 ?>
 <h2 class = "titulos"><?php echo $variable_1["Nombre"]; ?></h2>

<article class="juegos">
    <div class="galeria">
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/Dont_Starve/Dont_Starve_1.jpg" alt=""></li>
    <li id="slide2"><img src="images/Capturas/Dont_Starve/Dont_Starve_2.jpg" alt=""></li>
    <li id="slide3"><img src="images/Capturas/Dont_Starve/Dont_Starve_3.jpg" alt=""></li>
    <li id="slide4"><img src="images/Capturas/Dont_Starve/Dont_Starve_4.jpg" alt=""></li>
    <li id="slide5"><img src="images/Capturas/Dont_Starve/Dont_Starve_5.jpg" alt=""></li>
    <li id="slide6"><img src="images/Capturas/Dont_Starve/Dont_Starve_6.jpg" alt=""></li>
    <li id="slide7"><img src="images/Capturas/Dont_Starve/Dont_Starve_7.jpg" alt=""></li>
    <li id="slide8"><img src="images/Capturas/Dont_Starve/Dont_Starve_8.jpg" alt=""></li>
    <li id="slide9"><img src="images/Capturas/Dont_Starve/Dont_Starve_9.jpg" alt=""></li>
    <li id="slide10"><img src="images/Capturas/Dont_Starve/Dont_Starve_10.jpg" alt=""></li>
    <li id="slide11"><img src="images/Capturas/Dont_Starve/Dont_Starve_11.jpg" alt=""></li>
    <li id="slide12"><img src="images/Capturas/Dont_Starve/Dont_Starve_12.jpg" alt=""></li>
    <li id="slide13"><img src="images/Capturas/Dont_Starve/Dont_Starve_13.jpg" alt=""></li>
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
        <img src="images/Capturas/Dont_Starve/Dont_Starve_Portada.jpg" alt="">
        <p>Don’t Starve is an uncompromising wilderness survival game full of science and magic. Enter a strange and unexplored world full of strange creatures, dangers, and surprises. Gather resources to craft items and structures that match your survival style.</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: <?php echo $variable_1["Lanzamiento"]; ?>
        <br>
        <br>
        DESARROLLADOR: <a href="https://www.klei.com/" target="_blank"><?php echo $variable_3["Desarrollador"]; ?></a> 
        <br>
        EDITOR: <a href="https://www.klei.com/" target="_blank"><?php echo $variable_3["Editor"]; ?></a>  
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
<p>Don’t Starve es un implacable juego de supervivencia en la naturaleza repleto de ciencia y magia.<br>
Juegas como Wilson, un intrépido caballero científico que ha sido atrapado por un demonio y transportado a un misterioso mundo en estado salvaje. Wilson deberá aprender a explotar su entorno y a sus habitantes si quiere albergar alguna esperanza de escapar y encontrar la forma de regresar a casa.
Entra en un mundo extraño e inexplorado repleto de misteriosas criaturas, peligros y sorpresas. Recolecta recursos para fabricar objetos y estructuras que se adapten a tu estilo de supervivencia. Juega a tu manera mientras desentrañas los misterios de esta inhóspita tierra.
<br><br>

Características Principales:<br><br>
○ Supervivencia implacable y exploración del mundo:<br>
Sin instrucciones. Sin ayuda. Sin que te lleven de la mano. Comienza sin nada y fabrica, caza, investiga, cultiva y lucha para sobrevivir
<br><br>
○ Actualizaciones constantes:<br>
¡Únete a una activa comunidad que está ayudando a dar forma al juego antes del lanzamiento! Opina y únete a las discusiones con los desarrolladores y la comunidad
<br><br>
○ Gráficos oscuros y enigmáticos:<br>
Personajes y extrañas criaturas en 2D pueblan un mundo único en 3D
<br><br>
○ Nuevos mundos generados al azar:<br>
¿Quieres un mapa nuevo? ¡Sin problemas! En cualquier momento puedes generar un mundo vivo que te odia con pasión y desea tu muerte</p>
</div>

<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO: <br><br>
SO: Windows XP / Vista / Windows 7 / Windows 8<br>
Procesador: 1.7 GHz o superior<br>
Memoria: 1 GB de RAM<br>
Gráficos: Radeon HD5450 o superior<br>
DirectX®: 9.0c<br>
Disco Duro: 500 MB de espacio libre<br>
Sonido: 100% compatible con DirectX9.0c<br>
<br><br>
<br><br>
RECOMENDADO: <br><br>
SO: Windows XP / Vista / Windows 7 / Windows 8<br>
Procesador: 1.7 GHz o superior<br>
Memoria: 1 GB de RAM<br>
Gráficos: Radeon HD5450 o superior<br>
DirectX®: 9.0c<br>
Disco Duro: 500 MB de espacio libre<br>
Sonido: 100% compatible con DirectX9.0c</p>
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