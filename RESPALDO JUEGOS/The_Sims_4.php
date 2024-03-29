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
   $resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 7");
   $variable_1 = mysqli_fetch_assoc($resultado_1);

   $resultado_2 = mysqli_query($conexion, "SELECT * FROM desarrollador WHERE ID = 7");
   $variable_2 = mysqli_fetch_assoc($resultado_2);

   $resultado_3 = mysqli_query($conexion, "SELECT * FROM editor WHERE ID = 7");
   $variable_3 = mysqli_fetch_assoc($resultado_3);

 ?>
 <h2 class = "titulos"><?php echo $variable_1["Nombre"]; ?></h2>

<article class="juegos">
    <div class="galeria">
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/The_Sims_4/The_Sims_4_1.jpg" alt="Imágen número 1 de The Sims 4"></li>
    <li id="slide2"><img src="images/Capturas/The_Sims_4/The_Sims_4_2.jpg" alt="Imágen número 2 de The Sims 4"></li>
    <li id="slide3"><img src="images/Capturas/The_Sims_4/The_Sims_4_3.jpg" alt="Imágen número 3 de The Sims 4"></li>
    <li id="slide4"><img src="images/Capturas/The_Sims_4/The_Sims_4_4.jpg" alt="Imágen número 4 de The Sims 4"></li>
    <li id="slide5"><img src="images/Capturas/The_Sims_4/The_Sims_4_5.jpg" alt="Imágen número 5 de The Sims 4"></li>
    <li id="slide6"><img src="images/Capturas/The_Sims_4/The_Sims_4_6.jpg" alt="Imágen número 6 de The Sims 4"></li>
    <li id="slide7"><img src="images/Capturas/The_Sims_4/The_Sims_4_7.jpg" alt="Imágen número 7 de The Sims 4"></li>
    <li id="slide8"><img src="images/Capturas/The_Sims_4/The_Sims_4_8.jpg" alt="Imágen número 8 de The Sims 4"></li>
    <li id="slide9"><img src="images/Capturas/The_Sims_4/The_Sims_4_9.jpg" alt="Imágen número 9 de The Sims 4"></li>
    <li id="slide10"><img src="images/Capturas/The_Sims_4/The_Sims_4_10.jpg" alt="Imágen número 10 de The Sims 4"></li>
    <li id="slide11"><img src="images/Capturas/The_Sims_4/The_Sims_4_11.jpg" alt="Imágen número 11 de The Sims 4"></li>
    <li id="slide12"><img src="images/Capturas/The_Sims_4/The_Sims_4_12.jpg" alt="Imágen número 12 de The Sims 4"></li>
    <li id="slide13"><img src="images/Capturas/The_Sims_4/The_Sims_4_13.jpg" alt="Imágen número 13 de The Sims 4"></li>
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
        <img src="images/Capturas/The_Sims_4/The_Sims_4_Portada.jpg" alt="Portada de The Sims 4">
        <p>Disfruta del poder de crear y controlar a personas en un mundo virtual donde no hay reglas. ¡Ejerce tu poder con total libertad, diviértete y juega a la vida!.</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: <?php echo $variable_1["Lanzamiento"]; ?>
        <br>
        <br>
        DESARROLLADOR: <a href="https://www.ea.com/es-mx/ea-studios/maxis" target="_blank"><?php echo $variable_2["Desarrollador"]; ?></a> 
        <br>
        EDITOR: <a href="https://www.ea.com/" target="_blank"><?php echo $variable_3["Editor"]; ?></a>  
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
<p>Da rienda suelta a tu imaginación y crea un mundo único de Sims a tu imagen y semejanza. Descárgalo gratis y personaliza todos los detalles, desde tus Sims a sus hogares y mucho más. Elige el aspecto, la personalidad y la ropa de tus Sims y decide cómo van a vivir día a día. Diseña y construye casas increíbles para cada familia y luego decóralas con tus muebles y elementos decorativos favoritos.
<br>Desplázate a distintos barrios donde podrás conocer diferentes Sims y enterarte de sus vidas. Descubre bellos lugares con entornos característicos y embárcate en aventuras espontáneas. Gestiona los altibajos de la vida cotidiana de tus Sims y observa qué pasa cuando recreas situaciones de tu vida real. Cuenta tus historias como quieras desarrollando relaciones, asignando profesiones y aspiraciones y sumergiéndote en este extraordinario juego en el que las posibilidades son infinitas.</p>
</div>

<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO:<br><br>
Requiere un procesador y un sistema operativo de 64 bits<br>
SO: (64 bits) Windows 10<br>
Procesador: Intel Core i3-3220 a 3,3 GHz (2 núcleos, 4 hilos), AMD Ryzen 3 1200 a 3,1 GHz (4 núcleos) o superior<br>
Memoria: 4 GB de RAM<br>
Gráficos: 128 MB de memoria gráfica y compatibilidad con Pixel Shader 3.0 Tarjetas de vídeo compatibles: Tarjetas gráficas compatibles: NVIDIA GeForce 6600 o superior, ATI Radeon X1300 o superior, Intel GMA X4500 o superior<br>
DirectX: Versión 11<br>
Red: Conexión de banda ancha a Internet<br>
Almacenamiento: 26 GB de espacio disponible</p>
<br><br>
<br><br>
RECOMENDADO:<br><br>
Requiere un procesador y un sistema operativo de 64 bits<br>
SO: Windows 10 de 64 bits<br>
Procesador: Intel Core i5 (4 núcleos) o AMD Ryzen 5 o superior<br>
Memoria: 8 GB de RAM<br>
Gráficos: 1 GB de RAM de vídeo, NVIDIA GTX 650, AMD Radeon HD 7750 o superior<br>
DirectX: Versión 11<br>
Red: Conexión de banda ancha a Internet<br>
Almacenamiento: 51 GB de espacio disponible

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