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
                <div class="dropdown-content">
                </div>
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
   $resultado = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 8");
   $variable = mysqli_fetch_assoc($resultado);
 ?>
 <h2 class = "titulos"><?php echo $variable["Nombre"]; ?></h2>

<article class="juegos">
    <div class="galeria">
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/Fall_Guys/Fall_Guys_1.jpg" alt=""></li>
    <li id="slide2"><img src="images/Capturas/Fall_Guys/Fall_Guys_2.jpg" alt=""></li>
    <li id="slide3"><img src="images/Capturas/Fall_Guys/Fall_Guys_3.jpg" alt=""></li>
    <li id="slide4"><img src="images/Capturas/Fall_Guys/Fall_Guys_4.jpg" alt=""></li>
    <li id="slide5"><img src="images/Capturas/Fall_Guys/Fall_Guys_5.jpg" alt=""></li>
    <li id="slide6"><img src="images/Capturas/Fall_Guys/Fall_Guys_6.jpg" alt=""></li>
    <li id="slide7"><img src="images/Capturas/Fall_Guys/Fall_Guys_7.jpg" alt=""></li>
    <li id="slide8"><img src="images/Capturas/Fall_Guys/Fall_Guys_8.jpg" alt=""></li>
    <li id="slide9"><img src="images/Capturas/Fall_Guys/Fall_Guys_9.jpg" alt=""></li>
    <li id="slide10"><img src="images/Capturas/Fall_Guys/Fall_Guys_10.jpg" alt=""></li>
    <li id="slide11"><img src="images/Capturas/Fall_Guys/Fall_Guys_11.jpg" alt=""></li>
    <li id="slide12"><img src="images/Capturas/Fall_Guys/Fall_Guys_12.jpg" alt=""></li>
    <li id="slide13"><img src="images/Capturas/Fall_Guys/Fall_Guys_13.jpg" alt=""></li>
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
        <img src="images/Capturas/Fall_Guys/Fall_Guys_Portada.jpg" alt="">
        <p>Fall Guys es un party royale gratis y multiplataforma. Compite a lo torpe en absurdos circuitos de obstáculos con amigos o construye tu propio circuito caótico para compartirlo con la comunidad.</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: 3 AGO 2020
        <br>
        <br>
        DESARROLLADOR: <a href="https://www.mediatonicgames.com/" target="_blank">Mediatonic</a> 
        <br>
        EDITOR: <a href="https://store.epicgames.com/es-ES/" target="_blank">Epic Games</a>  
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
<p>Lánzate y esquiva hasta alcanzar la victoria en el panteón de la torpeza. ¿Principiante o profesional? ¿En solitario o en grupo? Fall Guys ofrece diversión e hilaridad en dosis concentradas y en constante evolución. ¿Prefieres ser el responsable de crear todo el caos? Construye tu propio circuito de obstáculos para compartirlo con amigos o con la comun<br><br>
Crea tu propio circuito: el modo Creativo de Fall Guys es un editor de niveles que te permite crear rondas personalizadas y compartirlas con la comunidad.<br><br>
Competitivo y cooperativo: avanza a trompicones en partidas competitivas, en formato todos contra todos, y desafíos cooperativos o conquista la Cúpula del Tropiezo con hasta 3 amigos.<br><br>
Juega con amigos: Fall Guys es compatible con el juego, los grupos y el progreso multiplataforma con una cuenta de Epic Games.<br><br>
Contenido en constante evolución: el juego rebosa de originalidad con nuevas colaboraciones y actualizaciones, que incluyen disfraces, obstáculos y formas de jugar diferentes.</p>
</div>

<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO: <br><br>
SO: Windows 10 de 64 bits<br>
Procesador: Intel Core i5 o AMD equivalente<br>
Memoria: 8 GB de RAM<br>
Gráficos: NVIDIA GTX 660 o AMD Radeon HD 7950<br>
Almacenamiento: 2 GB de espacio disponible
<br>
<br>
<br>
<br>
RECOMENDADO: <br><br>
SO: Windows 10 de 64 bits<br>
Procesador: Intel Core i5 o AMD equivalente<br>
Memoria: 8 GB de RAM<br>
Gráficos: NVIDIA GTX 660 o AMD Radeon HD 7950<br>
Almacenamiento: 2 GB de espacio disponible</p>
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