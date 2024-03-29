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
   $resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 18");
   $variable_1 = mysqli_fetch_assoc($resultado_1);

   $resultado_2 = mysqli_query($conexion, "SELECT * FROM desarrollador WHERE ID = 18");
   $variable_2 = mysqli_fetch_assoc($resultado_2);

   $resultado_3 = mysqli_query($conexion, "SELECT * FROM editor WHERE ID = 17");
   $variable_3 = mysqli_fetch_assoc($resultado_3);

 ?>
 <h2 class = "titulos"><?php echo $variable_1["Nombre"]; ?></h2>

<article class="juegos">
    <div class="galeria">
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/Terraria/Terraria_1.jpg" alt="Imágen N°1 de Terraria"></li>
    <li id="slide2"><img src="images/Capturas/Terraria/Terraria_2.jpg" alt="Imágen N°2 de Terraria"></li>
    <li id="slide3"><img src="images/Capturas/Terraria/Terraria_3.jpg" alt="Imágen N°3 de Terraria"></li>
    <li id="slide4"><img src="images/Capturas/Terraria/Terraria_4.jpg" alt="Imágen N°4 de Terraria"></li>
    <li id="slide5"><img src="images/Capturas/Terraria/Terraria_5.jpg" alt="Imágen N°5 de Terraria"></li>
    <li id="slide6"><img src="images/Capturas/Terraria/Terraria_6.jpg" alt="Imágen N°6 de Terraria"></li>
    <li id="slide7"><img src="images/Capturas/Terraria/Terraria_7.jpg" alt="Imágen N°7 de Terraria"></li>
    <li id="slide8"><img src="images/Capturas/Terraria/Terraria_8.jpg" alt="Imágen N°8 de Terraria"></li>
    <li id="slide9"><img src="images/Capturas/Terraria/Terraria_9.jpg" alt="Imágen N°9 de Terraria"></li>
    <li id="slide10"><img src="images/Capturas/Terraria/Terraria_10.jpg" alt="Imágen N°10 de Terraria"></li>
    <li id="slide11"><img src="images/Capturas/Terraria/Terraria_11.jpg" alt="Imágen N°11 de Terraria"></li>
    <li id="slide12"><img src="images/Capturas/Terraria/Terraria_12.jpg" alt="Imágen N°12 de Terraria"></li>
    <li id="slide13"><img src="images/Capturas/Terraria/Terraria_13.jpg" alt="Imágen N°13 de Terraria"></li>
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
        <img src="images/Capturas/Terraria/Terraria_Portada.jpg" alt="Portada de Terraria">
        <p>¡Cava, lucha, explora, construye! Con este juego de aventuras repleto de acción nada es imposible. ¡Pack de Cuatro también disponible!</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: <?php echo $variable_1["Lanzamiento"]; ?>
        <br>
        <br>
        DESARROLLADOR: <a href="https://re-logic.com/" target="_blank"><?php echo $variable_2["Desarrollador"]; ?></a> 
        <br>
        EDITOR: <a href="https://re-logic.com/" target="_blank"><?php echo $variable_3["Editor"]; ?></a>  
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
<p>¡Cava, lucha, explora, construye! Nada es imposible en este juego de aventuras repleto de acción. El mundo es tu lienzo y la tierra misma es tu pintura.
¡Coge tus herramientas y adelante! Crea armas para deshacerte de una gran variedad de enemigos en numerosos ecosistemas. Excava profundo bajo tierra para encontrar accesorios, dinero y otras cosas muy útiles. Reúne recursos para crear todo lo que necesites y conformar así tu propio mundo. Construye una casa, un fuerte o incluso un castillo. La gente se mudará a vivir ahí e incluso quizás te vendan diferentes mercancías que te ayuden en tu viaje.
Pero ten cuidado, aún te aguardan más desafíos... ¿Estás preparado para la tarea?
<br><br><strong>Características principales:</strong>
<br>Jugabilidad "sandbox" (juega libremente en un mundo a tu disposición)
<br>Mundos generados de forma aleatoria
<br>Actualizaciones gratuitas de contenido</p>
</div>

<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO:<br><br> SO: Windows XP / Vista / 7<br>Procesador: 1.6 GHz<br>Memoria: 512 MB de RAM<br> Disco Duro: 200 MB de espaciolibre<br> Gráficos: Shader Model 1.1 con 128 MB de VRAM<br> DirectX®: 9.0c o posterior 
<br><br>
<br><br>
RECOMENDADO:<br><br> SO: Windows 7, 8/8.1, 10<br> Processor: Dual Core 3.0 Ghz<br>Memory: 4GB<br> Hard Disk Space: 200 MB<br> Video Card: 256mb Video Memory, capable of Shader Model 2.0+<br> DirectX®: 9.0c or Greater </p>
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