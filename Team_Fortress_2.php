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
   $resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 12");
   $variable_1 = mysqli_fetch_assoc($resultado_1);

   $resultado_3 = mysqli_query($conexion, "SELECT * FROM desarrollador WHERE ID = 12");
   $variable_3 = mysqli_fetch_assoc($resultado_3);
 ?>
 <h2 class = "titulos"><?php echo $variable_1["Nombre"]; ?></h2>

<article class="juegos">
    <div class="galeria">
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/Team_Fortress_2/Team_Fortress_2_1.jpg" alt="Imágen número 1 de Team Fortress 2"></li>
    <li id="slide2"><img src="images/Capturas/Team_Fortress_2/Team_Fortress_2_2.jpg" alt="Imágen número 2 de Team Fortress 2"></li>
    <li id="slide3"><img src="images/Capturas/Team_Fortress_2/Team_Fortress_2_3.jpg" alt="Imágen número 3 de Team Fortress 2"></li>
    <li id="slide4"><img src="images/Capturas/Team_Fortress_2/Team_Fortress_2_4.jpg" alt="Imágen número 4 de Team Fortress 2"></li>
    <li id="slide5"><img src="images/Capturas/Team_Fortress_2/Team_Fortress_2_5.jpg" alt="Imágen número 5 de Team Fortress 2"></li>
    <li id="slide6"><img src="images/Capturas/Team_Fortress_2/Team_Fortress_2_6.jpg" alt="Imágen número 6 de Team Fortress 2"></li>
    <li id="slide7"><img src="images/Capturas/Team_Fortress_2/Team_Fortress_2_7.jpg" alt="Imágen número 7 de Team Fortress 2"></li>
    <li id="slide8"><img src="images/Capturas/Team_Fortress_2/Team_Fortress_2_8.jpg" alt="Imágen número 8 de Team Fortress 2"></li>
    <li id="slide9"><img src="images/Capturas/Team_Fortress_2/Team_Fortress_2_9.jpg" alt="Imágen número 9 de Team Fortress 2"></li>
    <li id="slide10"><img src="images/Capturas/Team_Fortress_2/Team_Fortress_2_10.jpg" alt="Imágen número 10 de Team Fortress 2"></li>
    <li id="slide11"><img src="images/Capturas/Team_Fortress_2/Team_Fortress_2_11.jpg" alt="Imágen número 11 de Team Fortress 2"></li>
    <li id="slide12"><img src="images/Capturas/Team_Fortress_2/Team_Fortress_2_12.jpg" alt="Imágen número 12 de Team Fortress 2"></li>
    <li id="slide13"><img src="images/Capturas/Team_Fortress_2/Team_Fortress_2_13.jpg" alt="Imágen número 13 de Team Fortress 2"></li>
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
    <div class="info">
        <img src="images/Capturas/Team_Fortress_2/Team_Fortress_2_Portada.jpg" alt="Portada de Team Fortress 2">
        <p>Nueve clases diferentes ofrecen una amplia variedad de habilidades tácticas y personalidades. Constantemente actualizado con nuevos modos de juego, mapas, equipamiento y, lo que es más importante, ¡sombreros!.</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: <?php echo $variable_1["Lanzamiento"]; ?>
        <br>
        <br>
        DESARROLLADOR: <a href="https://www.valvesoftware.com/es/" target="_blank"><?php echo $variable_3["Desarrollador"]; ?></a> 
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
<p>¡El juego gratuito más valorado de todos los tiempos!
Uno de los juegos de acción online más popular, Team Fortress 2, publica constantemente actualizaciones gratuitas: nuevos modos de juego, mapas, equipamiento y lo que es más importante, sombreros. Nueve clases diferentes proporcionan un enorme abanico de habilidades tácticas y personalidades y se prestan a una gran variedad de habilidades del jugador.
<br><br>¿Nuevo en Team Fortress? ¡No te preocupes!
No importa cuál sea tu estilo o tu experiencia, tenemos un personaje para ti. El detallado entrenamiento y los modos de práctica individual te ayudarán a pulir tus habilidades antes dar el salto a uno de los muchos modos de juego de TF2, de entre los que se incluyen Capturar la Bandera, Puntos de Control, Carga Explosiva, Arena, Rey de la Colina y muchos más.
<br><br>¡Haz un personaje a tu medida!
Hay cientos de armas, sombreros y más para coleccionar, fabricar, comprar e intercambiar. Personaliza tu clase favorita para ajustarla a tu forma de jugar y a tu gusto personal. No necesitas pagar para conseguirlos, prácticamente todos los objetos de la Tienda Mann Co. pueden obtenerse mientras juegas.</p>
</div>


<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO:<br><br>
SO: Windows® 7 (32/64-bit)/Vista/XP<br>
Procesador: 1.7 GHz Processor or better<br>
Memoria: 512 MB de RAM<br>
DirectX: Versión 8.1<br>
Red: Conexión de banda ancha a Internet<br>
Almacenamiento: 15 GB de espacio disponible
<br><br>
<br><br>
RECOMENDADO:<br><br>
SO: Windows® 7 (32/64-bit)<br>
Procesador: Pentium 4 processor (3.0GHz, or better)<br>
Memoria: 1 GB de RAM<br>
DirectX: Versión 9.0c<br>
Red: Conexión de banda ancha a Internet<br>
Almacenamiento: 15 GB de espacio disponible</p>
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