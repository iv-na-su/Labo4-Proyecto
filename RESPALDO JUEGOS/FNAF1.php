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
   $resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 9");
   $variable_1 = mysqli_fetch_assoc($resultado_1);

   $resultado_2 = mysqli_query($conexion, "SELECT * FROM desarrollador WHERE ID = 9");
   $variable_2 = mysqli_fetch_assoc($resultado_2);

   $resultado_3 = mysqli_query($conexion, "SELECT * FROM editor WHERE ID = 9");
   $variable_3 = mysqli_fetch_assoc($resultado_3);

 ?>
 <h2 class = "titulos"><?php echo $variable_1["Nombre"]; ?></h2>

<article class="juegos">

    <div class="galeria">

    
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/FNAF1/FNAF1_1.jpg" alt="Imágen N°1 de Five Nights At Freddy's"></li>
    <li id="slide2"><img src="images/Capturas/FNAF1/FNAF1_2.jpg" alt="Imágen N°2 de Five Nights At Freddy's"></li>
    <li id="slide3"><img src="images/Capturas/FNAF1/FNAF1_3.jpg" alt="Imágen N°3 de Five Nights At Freddy's"></li>
    <li id="slide4"><img src="images/Capturas/FNAF1/FNAF1_4.jpg" alt="Imágen N°4 de Five Nights At Freddy's"></li>
    <li id="slide5"><img src="images/Capturas/FNAF1/FNAF1_5.jpg" alt="Imágen N°5 de Five Nights At Freddy's"></li>
    <li id="slide6"><img src="images/Capturas/FNAF1/FNAF1_6.jpg" alt="Imágen N°6 de Five Nights At Freddy's"></li>
    <li id="slide7"><img src="images/Capturas/FNAF1/FNAF1_7.jpg" alt="Imágen N°7 de Five Nights At Freddy's"></li>
    <li id="slide8"><img src="images/Capturas/FNAF1/FNAF1_8.jpg" alt="Imágen N°8 de Five Nights At Freddy's"></li>
    <li id="slide9"><img src="images/Capturas/FNAF1/FNAF1_9.jpg" alt="Imágen N°9 de Five Nights At Freddy's"></li>
    <li id="slide10"><img src="images/Capturas/FNAF1/FNAF1_10.jpg" alt="Imágen N°10 de Five Nights At Freddy's"></li>
    <li id="slide11"><img src="images/Capturas/FNAF1/FNAF1_11.jpg" alt="Imágen N°11 de Five Nights At Freddy's"></li>
    <li id="slide12"><img src="images/Capturas/FNAF1/FNAF1_12.jpg" alt="Imágen N°12 de Five Nights At Freddy's"></li>
    <li id="slide13"><img src="images/Capturas/FNAF1/FNAF1_13.jpg" alt="Imágen N°13 de Five Nights At Freddy's"></li>
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
        <img src="images/Capturas/FNAF1/FNAF1_Portada.jpg" alt="Portada de Five Nights At Freddy's">
        <p>¡Bienvenido a tu nuevo trabajo de verano en Freddy Fazbear's Pizza, donde tanto niños como padres vienen en busca de entretenimiento y comida! La atracción principal es Freddy Fazbear, por supuesto; y sus dos amigos. ¡Son robots animatrónicos, programados para complacer a las multitudes!.</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: <?php echo $variable_1["Lanzamiento"]; ?>
        <br>
        <br>
        DESARROLLADOR: <a href="http://www.scottgames.com/" target="_blank"><?php echo $variable_2["Desarrollador"]; ?></a> 
        <br>
        EDITOR: <a href="http://www.scottgames.com/" target="_blank"><?php echo $variable_3["Editor"]; ?></a>  
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
<p>¡Bienvenido a tu nuevo trabajo de verano en Freddy Fazbear's Pizza, donde tanto niños como padres vienen en busca de entretenimiento y comida hasta donde alcanza la vista! La atracción principal es Freddy Fazbear, por supuesto; y sus dos amigos. ¡Son robots animatrónicos, programados para complacer a las multitudes! Sin embargo, el comportamiento de los robots se ha vuelto algo impredecible por la noche, y era mucho más barato contratarte como guardia de seguridad que encontrar un reparador.
<br><br>Desde tu pequeña oficina debes vigilar atentamente las cámaras de seguridad. Tienes una cantidad muy limitada de electricidad que puedes usar por noche (recortes presupuestarios corporativos, ya sabes). Eso significa que cuando te quedas sin energía por la noche, ¡no más puertas de seguridad ni luces! Si algo no está bien, es decir, si el oso Freddy o sus amigos no están en sus lugares adecuados, ¡debes encontrarlos en los monitores y protegerte si es necesario!
<br><br>¿Podrás sobrevivir cinco noches en Freddy's?
<br><br>¡Este juego fue creado usando Clickteam Fusion!</p>
</div>


<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO: <br><br>
SO: XP,Vista,Windows7<br>
Procesador: 2 GHz Intel Pentium 4 or AMD Athlon or equivalent<br>
Memoria: 1 GB de RAM<br>
Gráficos: 1 GB<br>
DirectX: Versión 9.0<br>
Almacenamiento: 250 MB de espacio disponible.
<br><br>
<br><br>
RECOMENDADO: <br><br>
SO: XP,Vista,Windows7<br>
Procesador: 2 GHz Intel Pentium 4 or AMD Athlon or equivalent<br>
Memoria: 1 GB de RAM<br>
Gráficos: 1 GB<br>
DirectX: Versión 9.0<br>
Almacenamiento: 250 MB de espacio disponible.</p>
</div>


<footer>
<?php
    include("FOOTER.php");
    ?>
</footer>

<!-- Script de versión móvil -->
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