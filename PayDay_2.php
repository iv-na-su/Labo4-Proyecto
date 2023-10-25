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
   $resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 2");
   $variable_1 = mysqli_fetch_assoc($resultado_1);

   $resultado_3 = mysqli_query($conexion, "SELECT * FROM desarrollador WHERE ID = 2");
   $variable_3 = mysqli_fetch_assoc($resultado_3);
 ?>
 <h2 class = "titulos"><?php echo $variable_1["Nombre"]; ?></h2>

<article class="juegos">
    <div class="galeria">
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/PayDay_2/PayDay_1.jpg" alt="Imágen número 1 de PayDay 2"></li>
    <li id="slide2"><img src="images/Capturas/PayDay_2/PayDay_2.jpg" alt="Imágen número 2 de PayDay 2"></li>
    <li id="slide3"><img src="images/Capturas/PayDay_2/PayDay_3.jpg" alt="Imágen número 3 de PayDay 2"></li>
    <li id="slide4"><img src="images/Capturas/PayDay_2/PayDay_4.jpg" alt="Imágen número 4 de PayDay 2"></li>
    <li id="slide5"><img src="images/Capturas/PayDay_2/PayDay_5.jpg" alt="Imágen número 5 de PayDay 2"></li>
    <li id="slide6"><img src="images/Capturas/PayDay_2/PayDay_6.jpg" alt="Imágen número 6 de PayDay 2"></li>
    <li id="slide7"><img src="images/Capturas/PayDay_2/PayDay_7.jpg" alt="Imágen número 7 de PayDay 2"></li>
    <li id="slide8"><img src="images/Capturas/PayDay_2/PayDay_8.jpg" alt="Imágen número 8 de PayDay 2"></li>
    <li id="slide9"><img src="images/Capturas/PayDay_2/PayDay_9.jpg" alt="Imágen número 9 de PayDay 2"></li>
    <li id="slide10"><img src="images/Capturas/PayDay_2/PayDay_10.jpg" alt="Imágen número 10 de PayDay 2"></li>
    <li id="slide11"><img src="images/Capturas/PayDay_2/PayDay_11.jpg" alt="Imágen número 11 de PayDay 2"></li>
    <li id="slide12"><img src="images/Capturas/PayDay_2/PayDay_12.jpg" alt="Imágen número 12 de PayDay 2"></li>
    <li id="slide13"><img src="images/Capturas/PayDay_2/PayDay_13.jpg" alt="Imágen número 13 de PayDay 2"></li>
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
        <img src="images/Capturas/PayDay_2/PayDay_Portada.jpg" alt="Portada de Pay Day 2">
        <p>PAYDAY 2 es un juego de acción cooperativo para cuatro jugadores que, una vez más, permite a los jugadores ponerse en la piel del equipo original de PAYDAY - Dallas, Hoxton, Wolf y Chains - mientras descienden por Washington DC en una épica ola de crímenes.</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: <?php echo $variable_1["Lanzamiento"]; ?>
        <br>
        <br>
        DESARROLLADOR: <a href="https://www.starbreeze.com/" target="_blank"><?php echo $variable_3["Desarrollador"]; ?></a> 
        <br>
        EDITOR: <a href="https://www.starbreeze.com/" target="_blank"><?php echo $variable_3["Editor"]; ?></a>  
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
<p>PAYDAY 2 es un juego de acción cooperativo para cuatro jugadores que, una vez más, permite a los jugadores ponerse en la piel del equipo original de PAYDAY - Dallas, Hoxton, Wolf y Chains - mientras descienden por Washington DC en una épica ola de crímenes.
<br><br>La red CRIMENET ofrece una amplia gama de contratos dinámicos, y los jugadores son libres de elegir cualquier cosa, desde pequeños atracos a tiendas de conveniencia o secuestros, hasta grandes ciberdelitos o vaciar importantes cámaras acorazadas para ese épico PAYDAY. Y mientras estás en DC, ¿por qué no participas en la comunidad local y haces algunos encargos políticos?
<br><br>Hasta cuatro amigos cooperan en los golpes y, a medida que el equipo avanza, los trabajos se hacen más grandes, mejores y más gratificantes. Además de ganar más dinero y convertirse en un criminal legendario, existe un sistema de personalización y creación de personajes que permite a los equipos construir y personalizar sus propias armas y equipamiento.</p>
</div>


<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO:<br><br>
SO: Windows 7<br>
Procesador: 2 GHz Intel Dual Core Processor<br>
Memoria: 4 GB de RAM<br>
Gráficos: Nvidia & AMD (512MB VRAM)<br>
DirectX: Versión 9.0c<br>
Almacenamiento: 83 GB de espacio disponible<br>
Compatibilidad con RV: SteamVR. Standing or Room Scale<br>
<br><br>
<br><br>
RECOMENDADO:<br><br>
SO: Windows 10<br>
Procesador: 2.3 GHz Intel Quad Core Processor<br>
Memoria: 8 GB de RAM<br>
Gráficos: Nvidia & AMD (1GB VRAM)<br>
DirectX: Versión 9.0c<br>
Almacenamiento: 83 GB de espacio disponible<br>
Compatibilidad con RV: SteamVR. Standing or Room Scale</p>
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