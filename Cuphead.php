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
   $resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 3");
   $variable_1 = mysqli_fetch_assoc($resultado_1);

   $resultado_3 = mysqli_query($conexion, "SELECT * FROM desarrollador WHERE ID = 3");
   $variable_3 = mysqli_fetch_assoc($resultado_2);

   $resultado_3 = mysqli_query($conexion, "SELECT * FROM editor WHERE ID = 3");
   $variable_3 = mysqli_fetch_assoc($resultado_3);

 ?>
 <h2 class = "titulos"><?php echo $variable_1["Nombre"]; ?></h2>

<article class="juegos">
    <div class="galeria">
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/Cuphead/Cuphead_1.jpg" alt="Imágen N°1 de Cuphead"></li>
    <li id="slide2"><img src="images/Capturas/Cuphead/Cuphead_2.jpg" alt="Imágen N°2 de Cuphead"></li>
    <li id="slide3"><img src="images/Capturas/Cuphead/Cuphead_3.jpg" alt="Imágen N°3 de Cuphead"></li>
    <li id="slide4"><img src="images/Capturas/Cuphead/Cuphead_4.jpg" alt="Imágen N°4 de Cuphead"></li>
    <li id="slide5"><img src="images/Capturas/Cuphead/Cuphead_5.jpg" alt="Imágen N°5 de Cuphead"></li>
    <li id="slide6"><img src="images/Capturas/Cuphead/Cuphead_6.jpg" alt="Imágen N°6 de Cuphead"></li>
    <li id="slide7"><img src="images/Capturas/Cuphead/Cuphead_7.jpg" alt="Imágen N°7 de Cuphead"></li>
    <li id="slide8"><img src="images/Capturas/Cuphead/Cuphead_8.jpg" alt="Imágen N°8 de Cuphead"></li>
    <li id="slide9"><img src="images/Capturas/Cuphead/Cuphead_9.jpg" alt="Imágen N°9 de Cuphead"></li>
    <li id="slide10"><img src="images/Capturas/Cuphead/Cuphead_10.jpg" alt="Imágen N°10 de Cuphead"></li>
    <li id="slide11"><img src="images/Capturas/Cuphead/Cuphead_11.jpg" alt="Imágen N°11 de Cuphead"></li>
    <li id="slide12"><img src="images/Capturas/Cuphead/Cuphead_12.jpg" alt="Imágen N°12 de Cuphead"></li>
    <li id="slide13"><img src="images/Capturas/Cuphead/Cuphead_13.jpg" alt="Imágen N°13 de Cuphead"></li>
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
        <img src="images/Capturas/Cuphead/Cuphead_Portada.jpg" alt="Portada de Cuphead">
        <p>Cuphead es un juego de acción clásico estilo "dispara y corre" que se centra en combates contra el jefe. Inspirado en los dibujos animados de los años 30, los aspectos visual y sonoro están diseñados con esmero empleando las mismas técnicas de la época, es decir, animación tradicional.</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: <?php echo $variable_1["Lanzamiento"]; ?>
        <br>
        <br>
        DESARROLLADOR: <a href="http://studiomdhr.com/" target="_blank"><?php echo $variable_2["Desarrollador"]; ?></a> 
        <br>
        EDITOR: <a href="http://studiomdhr.com/" target="_blank"><?php echo $variable_3["Editor"]; ?></a> 
        </h4>
    </div>

</article>

<?php 
    if ($_SESSION["VARIABLE"] == session_id()){
        echo ('<div class = "reseña">
        <h3>DEJA TU RESEÑA</h3>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>');
    }

?>


<div class= "acerca_de">
<h3>ACERCA DE ESTE JUEGO</h3>
<br>
<br>
<p>Cuphead es un juego de acción clásico estilo "dispara y corre" que se centra en combates contra el jefe. Inspirado en los dibujos animados de los años 30, los aspectos visual y sonoro están diseñados con esmero empleando las mismas técnicas de la época, es decir, animación tradicional a mano, fondos de acuarela y grabaciones originales de jazz.
<br><br>Juega como Cuphead o Mugman (en modo de un jugador o cooperativo) y cruza mundos extraños, adquiere nuevas armas, aprende poderosos supermovimientos y descubre secretos ocultos mientras procuras saldar tu deuda con el diablo.</p>
</div>


<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO:<br><br>
Requiere un procesador y un sistema operativo de 64 bits<br>
SO: Windows 7<br>
Procesador: Intel Core2 Duo E8400, 3.0GHz or AMD Athlon 64 X2 6000+, 3.0GHz or higher<br>
Memoria: 3 GB de RAM<br>
Gráficos: Geforce 9600 GT or AMD HD 3870 512MB or higher<br>
DirectX: Versión 11<br>
Almacenamiento: 4 GB de espacio disponible
<br><br>
<br><br>
RECOMENDADO:<br><br>
Requiere un procesador y un sistema operativo de 64 bits</p>
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