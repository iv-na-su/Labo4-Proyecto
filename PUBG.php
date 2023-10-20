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
   $resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 5");
   $variable_1 = mysqli_fetch_assoc($resultado_1);

   $resultado_3 = mysqli_query($conexion, "SELECT * FROM desarrollador WHERE ID = 5");
   $variable_3 = mysqli_fetch_assoc($resultado_3);
 ?>
 <h2 class = "titulos"><?php echo $variable_1["Nombre"]; ?></h2>

<article class="juegos">
    <div class="galeria">
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/PUBG/PUBG_1.jpg" alt=""></li>
    <li id="slide2"><img src="images/Capturas/PUBG/PUBG_2.jpg" alt=""></li>
    <li id="slide3"><img src="images/Capturas/PUBG/PUBG_3.jpg" alt=""></li>
    <li id="slide4"><img src="images/Capturas/PUBG/PUBG_4.jpg" alt=""></li>
    <li id="slide5"><img src="images/Capturas/PUBG/PUBG_5.jpg" alt=""></li>
    <li id="slide6"><img src="images/Capturas/PUBG/PUBG_6.jpg" alt=""></li>
    <li id="slide7"><img src="images/Capturas/PUBG/PUBG_7.jpg" alt=""></li>
    <li id="slide8"><img src="images/Capturas/PUBG/PUBG_8.jpg" alt=""></li>
    <li id="slide9"><img src="images/Capturas/PUBG/PUBG_9.jpg" alt=""></li>
    <li id="slide10"><img src="images/Capturas/PUBG/PUBG_10.jpg" alt=""></li>
    <li id="slide11"><img src="images/Capturas/PUBG/PUBG_11.jpg" alt=""></li>
    <li id="slide12"><img src="images/Capturas/PUBG/PUBG_12.jpg" alt=""></li>
    <li id="slide13"><img src="images/Capturas/PUBG/PUBG_13.jpg" alt=""></li>
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
        <img src="images/Capturas/PUBG/PUBG_Portada.jpg" alt="">
        <p>Juega gratis a PUBG: BATTLEGROUNDS. Aterriza en posiciones estratégicas, saquea armas y suministros, y sobrevive para que vuestro equipo sea el único en pie en los distintos y variados campos de batalla.</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: <?php echo $variable_1["Lanzamiento"]; ?>
        <br>
        <br>
        DESARROLLADOR: <a href="https://krafton.com/en/" target="_blank"><?php echo $variable_3["Desarrollador"]; ?></a> 
        <br>
        EDITOR: <a href="https://krafton.com/en/" target="_blank"><?php echo $variable_3["Editor"]; ?></a>  
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
<p>¡ATERRIZA, SAQUEA Y SOBREVIVE!<br>
Juega gratis a PUBG: BATTLEGROUNDS.<br>
Aterriza en posiciones estratégicas, saquea armas y suministros, y sobrevive para que vuestro equipo sea el único en pie en los distintos y variados campos de batalla.
Forma equipo y participa en los campos de batalla para experimentar el Battle Royale original como solo existe en PUBG: BATTLEGROUNDS.
<br><br>
Con esta descarga de contenido, también podrás acceder al servidor de pruebas de BATTLEGROUNDS (para jugar, es necesario realizar una descarga independiente). 
Es posible realizar compras en el juego opcionales.</p>
</div>

<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO: <br><br>
Requiere un procesador y un sistema operativo de 64 bits<br>
SO: 64-bit Windows 10<br>
Procesador: Intel Core i5-4430 / AMD FX-6300<br>
Memoria: 8 GB de RAM<br>
Gráficos: NVIDIA GeForce GTX 960 2GB / AMD Radeon R7 370 2GB<br>
DirectX: Versión 11<br>
Red: Conexión de banda ancha a Internet<br>
Almacenamiento: 40 GB de espacio disponible
<br>
<br>
<br>
<br>
RECOMENDADO: <br><br>
Requiere un procesador y un sistema operativo de 64 bits<br>
SO: 64-bit Windows 10<br>
Procesador: Intel Core i5-6600K / AMD Ryzen 5 1600<br>
Memoria: 16 GB de RAM<br>
Gráficos: NVIDIA GeForce GTX 1060 3GB / AMD Radeon RX 580 4GB<br>
DirectX: Versión 11<br>
Red: Conexión de banda ancha a Internet<br>
Almacenamiento: 50 GB de espacio disponible</p>
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