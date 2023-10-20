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
   $resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 10");
   $variable_1 = mysqli_fetch_assoc($resultado_1);

   $resultado_3 = mysqli_query($conexion, "SELECT * FROM desarrollador WHERE ID = 10");
   $variable_3 = mysqli_fetch_assoc($resultado_3);
 ?>
 <h2 class = "titulos"><?php echo $variable_1["Nombre"]; ?></h2>

<article class="juegos">
    <div class="galeria">
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/RE4_Old/RE4_Old_1.jpg" alt="Imágen N°1 de Resident Evil 4 2005"></li>
    <li id="slide2"><img src="images/Capturas/RE4_Old/RE4_Old_2.jpg" alt="Imágen N°2 de Resident Evil 4 2005"></li>
    <li id="slide3"><img src="images/Capturas/RE4_Old/RE4_Old_3.jpg" alt="Imágen N°3 de Resident Evil 4 2005"></li>
    <li id="slide4"><img src="images/Capturas/RE4_Old/RE4_Old_4.jpg" alt="Imágen N°4 de Resident Evil 4 2005"></li>
    <li id="slide5"><img src="images/Capturas/RE4_Old/RE4_Old_5.jpg" alt="Imágen N°5 de Resident Evil 4 2005"></li>
    <li id="slide6"><img src="images/Capturas/RE4_Old/RE4_Old_6.jpg" alt="Imágen N°6 de Resident Evil 4 2005"></li>
    <li id="slide7"><img src="images/Capturas/RE4_Old/RE4_Old_7.jpg" alt="Imágen N°7 de Resident Evil 4 2005"></li>
    <li id="slide8"><img src="images/Capturas/RE4_Old/RE4_Old_8.jpg" alt="Imágen N°8 de Resident Evil 4 2005"></li>
    <li id="slide9"><img src="images/Capturas/RE4_Old/RE4_Old_9.jpg" alt="Imágen N°9 de Resident Evil 4 2005"></li>
    <li id="slide10"><img src="images/Capturas/RE4_Old/RE4_Old_10.jpg" alt="Imágen N°10 de Resident Evil 4 2005"></li>
    <li id="slide11"><img src="images/Capturas/RE4_Old/RE4_Old_11.jpg" alt="Imágen N°11 de Resident Evil 4 2005"></li>
    <li id="slide12"><img src="images/Capturas/RE4_Old/RE4_Old_12.jpg" alt="Imágen N°12 de Resident Evil 4 2005"></li>
    <li id="slide13"><img src="images/Capturas/RE4_Old/RE4_Old_13.jpg" alt="Imágen N°13 de Resident Evil 4 2005"></li>
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
        <img src="images/Capturas/RE4_Old/RE4_Old_Portada.jpg" alt="Portada de Resident Evil 4 2005">
        <p>Al agente especial Leon S. Kennedy se le asigna la misión de rescatar a la hija del presidente de los EUA, que ha sido secuestrada.</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: <?php echo $variable_1["Lanzamiento"]; ?>
        <br>
        <br>
        DESARROLLADOR: <a href="https://www.residentevil.com/re4/es/" target="_blank"><?php echo $variable_3["Desarrollador"]; ?></a> 
        <br>
        EDITOR: <a href="https://www.residentevil.com/re4/es/" target="_blank"><?php echo $variable_3["Editor"]; ?></a> 
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
<p>En resident evil 4, al agente especial Leon S. Kennedy se le asigna la misión de rescatar a la hija del presidente de los EUA, que ha sido secuestrada. Tras llegar a una aldea rural europea, se enfrenta a nuevas amenazas que suponen retos totalmente diferentes de los clásicos enemigos zombis de pesados movimientos de las primeras entregas de esta serie. Leon lucha contra terroríficas criaturas nuevas infestadas con una nueva amenaza denominada «Las Plagas» y se enfrenta a una agresiva horda de enemigos que incluye aldeanos bajo control mental conectados a Los Iluminados, la misteriosa secta detrás del rapto.</p>
</div>


<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO:<br><br>
SO: Windows® 8 / Windows® 10<br>
Procesador: Intel® CoreTM2 Duo 2,4 GHz o superior, AMD AthlonTM X2 2,8 GHz o superior<br>
Memoria: 2 GB de RAM<br>
Gráficos: NVIDIA® GeForce® 8800GTS o superior, ATI RadeonTM HD 4850 o superior<br>
DirectX: Versión 9.0c<br>
Almacenamiento: 15 GB de espacio disponible<br>
Tarjeta de sonido: Dispositivo de sonido estándar
<br><br>
<br><br>
RECOMENDADO:<br><br>
SO: Windows 8.1 / Windows® 10<br>
Procesador: Intel® CoreTM 2 Quad 2,7 GHz o superior, AMD PhenomTM II X4 3 GHz o superior<br>
Memoria: 4 GB de RAM<br>
Gráficos: NVIDIA® GeForce® GTX 560 o superior<br>
DirectX: Versión 9.0c<br>
Almacenamiento: 15 GB de espacio disponible
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