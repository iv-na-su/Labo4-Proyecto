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
   $resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 16");
   $variable_1 = mysqli_fetch_assoc($resultado_1);

   $resultado_3 = mysqli_query($conexion, "SELECT * FROM desarrollador WHERE ID = 16");
   $variable_3 = mysqli_fetch_assoc($resultado_3);
 ?>
 <h2 class = "titulos"><?php echo $variable_1["Nombre"]; ?></h2>

<article class="juegos">
    <div class="galeria">
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/Core_Keeper/Core_Keeper_1.jpg" alt=""></li>
    <li id="slide2"><img src="images/Capturas/Core_Keeper/Core_Keeper_2.jpg" alt=""></li>
    <li id="slide3"><img src="images/Capturas/Core_Keeper/Core_Keeper_3.jpg" alt=""></li>
    <li id="slide4"><img src="images/Capturas/Core_Keeper/Core_Keeper_4.jpg" alt=""></li>
    <li id="slide5"><img src="images/Capturas/Core_Keeper/Core_Keeper_5.jpg" alt=""></li>
    <li id="slide6"><img src="images/Capturas/Core_Keeper/Core_Keeper_6.jpg" alt=""></li>
    <li id="slide7"><img src="images/Capturas/Core_Keeper/Core_Keeper_7.jpg" alt=""></li>
    <li id="slide8"><img src="images/Capturas/Core_Keeper/Core_Keeper_8.jpg" alt=""></li>
    <li id="slide9"><img src="images/Capturas/Core_Keeper/Core_Keeper_9.jpg" alt=""></li>
    <li id="slide10"><img src="images/Capturas/Core_Keeper/Core_Keeper_10.jpg" alt=""></li>
    <li id="slide11"><img src="images/Capturas/Core_Keeper/Core_Keeper_11.jpg" alt=""></li>
    <li id="slide12"><img src="images/Capturas/Core_Keeper/Core_Keeper_12.jpg" alt=""></li>
    <li id="slide13"><img src="images/Capturas/Core_Keeper/Core_Keeper_13.jpg" alt=""></li>
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
        <img src="images/Capturas/Core_Keeper/Core_Keeper_Portada.jpg" alt="">
        <p>Explora una caverna infinita llena de criaturas, reliquias y recursos en una aventura minera de tipo «sandbox» para 1-8 jugadores. Extrae recursos, construye, lucha, fabrica y cultiva para desentrañar el misterio del antiguo Núcleo.</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: <?php echo $variable_1["Lanzamiento"]; ?>
        <br>
        <br>
        DESARROLLADOR: <a href="https://pugstorm.eu/" target="_blank"><?php echo $variable_3["Desarrollador"]; ?></a> 
        <br>
        EDITOR: <a href="https://fireshinegames.co.uk/" target="_blank"><?php echo $variable_3["Editor"]; ?></a>  
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
<p>Atraído hacia una reliquia misteriosa, eres un explorador que despierta en una antigua caverna de criaturas, recursos y abalorios. Atrapado en las profundidades subterráneas, ¿estarán a la altura tus habilidades de supervivencia?
<br><br>
Extrae reliquias y recursos para construir tu base, fabricar nuevos utensilios, sobrevivir y alimentar el Núcleo. Vence a monstruos gigantes, descubre secretos ocultos, cultiva, cocina nuevas recetas y explora un mundo subterráneo generado de manera procedimental en una aventura de minería tipo «sandbox» para 1-8 jugadores.
<br><br>
Extrae recursos<br>
Explora una inmensa cueva subterránea de recursos infinitos. Extrae minerales, descubre cristales ocultos, fósiles y abalorios y sobrevive en un mundo subterráneo generado de manera procedimental.
<br><br>
Descubre un mundo antiguo<br>
Explora biomas vivos y lucha con criaturas cavernícolas en un gran sistema subterráneo. Peina el oscuro mundo que te rodea y enfréntate a los mastodontes del inframundo. Derrótalos y recoge el botín para ayudarte a desvelar el misterio del Núcleo.

<br><br>
Fabrica objetos y equipo<br>
Personaliza a tu personaje y fabrica nuevos objetos, armaduras y utensilios para adentrarte más en las cuevas. Fabrica un pico para explotar paredes y recursos, construye puentes para cruzar lagos subterráneos y coloca antorchas para iluminar la profunda y omnipresente oscuridad.
<br><br>

Cultiva, pesca y cocina<br>
Cultiva distintas plantas sembrando semillas que encontrarás en tus aventuras. Busca el sitio perfecto para pescar y captura una plétora de peces únicos. Combina en la olla el producto de tu duro trabajo cultivando y pescando para descubrir deliciosas recetas con efectos inesperados.
<br><br>

«Sandbox» para 1-8 jugadores<br>
Sobrevive en solitario o juega en línea con hasta 7 jugadores más. Colabora con ellos para extraer recursos, luchar, cultivar, fabricar y sobrevivir juntos. Especialízate en tu papel para ayudar a otros exploradores a dominar el díscolo paisaje en el que os encontráis.</p>
</div>

<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO: <br><br>
Requiere un procesador y un sistema operativo de 64 bits<br>
SO: Windows 10 64-bit<br>
Procesador: Intel Core i5-2300 / AMD Ryzen 3 1200<br>
Memoria: 8 GB de RAM<br>
Gráficos: GeForce GTX 460 / Radeon HD 5850
<br><br>
<br><br>
RECOMENDADO: <br><br>
Requiere un procesador y un sistema operativo de 64 bits<br>
SO: Windows 10 64-bit<br>
Procesador: Intel Core i5-8400 / AMD Ryzen 7 2700X<br>
Memoria: 8 GB de RAM<br>
Gráficos: GeForce GTX 1050 Ti / Radeon R9 280X</p>
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