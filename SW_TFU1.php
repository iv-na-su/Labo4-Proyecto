<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="icon" href="Imagenes/Marco_PC.png" type="Images/png">
    <title>Vapor: The Proyect</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo_santi.css">
</head>

<body>
<header>
    <div>
        <a class="logo" href="index.php"><img src="images/Vapor_Logo_Png.png" alt="Logo página">
    </div>
    
    <nav id="menu_hamburguesa">
    <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    <div class="dropdown">
        <ul>
            <li><a href="index.php">Inicio</a></li>
        </ul>
    </div>
        <div class="dropdown">
            <ul>
                <li><a href = "juegos.php">Juegos</a></li>
            </ul> 
        </div>
        <div class="dropdown">
            <ul>
                <li><a href = "perfil.php">Perfil</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <ul>
                <li><a href = "contacto.php">Contacto</a></li>
            </ul>
        </div>
</header>


<?php
   include("conexion.php");
   $resultado = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 19");
   $variable = mysqli_fetch_assoc($resultado);
 ?>
 <h2 class = "titulos"><?php echo $variable["Nombre"]; ?></h2>

<article class="juegos">
    <div class="galeria">
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/SW_TFU1/SW_TFU1_1.jpg" alt="Imágen N°1 de Star Wars The Force Unleashed"></li>
    <li id="slide2"><img src="images/Capturas/SW_TFU1/SW_TFU1_2.jpg" alt="Imágen N°2 de Star Wars The Force Unleashed"></li>
    <li id="slide3"><img src="images/Capturas/SW_TFU1/SW_TFU1_3.jpg" alt="Imágen N°3 de Star Wars The Force Unleashed"></li>
    <li id="slide4"><img src="images/Capturas/SW_TFU1/SW_TFU1_4.jpg" alt="Imágen N°4 de Star Wars The Force Unleashed"></li>
    <li id="slide5"><img src="images/Capturas/SW_TFU1/SW_TFU1_5.jpg" alt="Imágen N°5 de Star Wars The Force Unleashed"></li>
    <li id="slide6"><img src="images/Capturas/SW_TFU1/SW_TFU1_6.jpg" alt="Imágen N°6 de Star Wars The Force Unleashed"></li>
    <li id="slide7"><img src="images/Capturas/SW_TFU1/SW_TFU1_7.jpg" alt="Imágen N°7 de Star Wars The Force Unleashed"></li>
    <li id="slide8"><img src="images/Capturas/SW_TFU1/SW_TFU1_8.jpg" alt="Imágen N°8 de Star Wars The Force Unleashed"></li>
    <li id="slide9"><img src="images/Capturas/SW_TFU1/SW_TFU1_9.jpg" alt="Imágen N°9 de Star Wars The Force Unleashed"></li>
    <li id="slide10"><img src="images/Capturas/SW_TFU1/SW_TFU1_10.jpg" alt="Imágen N°10 de Star Wars The Force Unleashed"></li>
    <li id="slide11"><img src="images/Capturas/SW_TFU1/SW_TFU1_11.jpg" alt="Imágen N°11 de Star Wars The Force Unleashed"></li>
    <li id="slide12"><img src="images/Capturas/SW_TFU1/SW_TFU1_12.jpg" alt="Imágen N°12 de Star Wars The Force Unleashed"></li>
    <li id="slide13"><img src="images/Capturas/SW_TFU1/SW_TFU1_13.jpg" alt="Imágen N°13 de Star Wars The Force Unleashed"></li>
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
        <img src="images/Capturas/SW_TFU1/SW_TFU1_Portada.jpg" alt="Portada de Star Wars The Force Unleashed">
        <p>Star Wars: The Force Unleashed recrea de una nueva forma el alcance y la escala de la Fuerza y los jugadores se ponen en el papel del "Aprendiz Secreto" de Darth Vader, desvelando nuevas revelaciones sobre la galaxia Star Wars vistas a través de los ojos de un nuevo personaje misterioso armado con poderes
        sin precedentes.</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: 16 SEP 2008
        <br>
        <br>
        DESARROLLADOR: <a href="https://www.lucasfilm.com/what-we-do/games/" target="_blank">LucasArts</a> 
        <br>
        EDITOR: <a href="https://www.lucasfilm.com/what-we-do/games/" target="_blank">LucasArts, Lucasfilm, Disney</a>  
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
<p>Star Wars: The Force Unleashed recrea de una nueva forma el alcance y la escala de la Fuerza y los jugadores se ponen en el papel del "Aprendiz Secreto" de Darth Vader, desvelando nuevas revelaciones sobre la galaxia Star Wars vistas a través de los ojos de un nuevo personaje misterioso armado con poderes
sin precedentes.
<br><br>DESCUBRE PODERES DE FUERZA ÉPICOS y combos devastadores.
<br><br>DESCUBRE LA HISTORIA NUNCA CONTADA del aprendiz de Darth
Vader acontencida entre los Episodios III y IV.
<br><br>REACCIONES COMO EN LA VIDA MISMA de los personajes y
entornos que son diferentes cada vez que juegues.</p>
</div>

<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO:<br><br>
SO: Win XP SP3, Windows Vista SP2 o Windows 7<br>
Procesador: Intel Core 2 Duo 2.4 GHz o AMD Athlon X2 5200+<br>
Memoria: 2 GB de RAM<br>
Gráficos: Tarjeta Aceleradora 3D Requerida - Compatible 100% con DirectX 9.0c con 256 MB de memoria de video con soporte para Shader 2.0 (Radeon HD 2900 o Geforce 8600)<br>
DirectX®: Compatible con Directx 9.0c<br>
Disco Duro: 30GB<br>
Sonido: Compatible con Directx 9.0c<br>
Controlador Soportado: XBox 360 Controller para Windows<br>
Chipsets ATI compatibles: ATI Radeon HD 2600, 2900, 3650, 3690, 3850, 3870, 4550, 4650, 4770, 4850, 4870, 5890<br>
Chipsets NVIDIA compatibles: NVIDIA GeForce 8600, 8800, 9400, 9500, 9600, 9800, 250, 260, 275, 280, 285, 295<br>
<br><br>
<br><br>
RECOMENDADO:<br><br>
Procesador: Intel Core 2 Duo 2.8 GHz o AMD Athlon X2 Dual-Core 6000+<br>
Gráficos: Tarjeta Aceleradora 3D con 512 MB (GeForce 9800 GT)<br>
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