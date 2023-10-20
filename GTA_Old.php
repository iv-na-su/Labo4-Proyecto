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
   $resultado = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 4");
   $variable = mysqli_fetch_assoc($resultado);
 ?>
 <h2 class = "titulos"><?php echo $variable["Nombre"]; ?></h2>

<article class="juegos">
    <div class="galeria">
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/GTA_Old/GTA_Old_1.jpg" alt="Imágen número 1 de Grand Theft Auto San Andreas 2005"></li>
    <li id="slide2"><img src="images/Capturas/GTA_Old/GTA_Old_2.jpg" alt="Imágen número 2 de Grand Theft Auto San Andreas 2005"></li>
    <li id="slide3"><img src="images/Capturas/GTA_Old/GTA_Old_3.jpg" alt="Imágen número 3 de Grand Theft Auto San Andreas 2005"></li>
    <li id="slide4"><img src="images/Capturas/GTA_Old/GTA_Old_4.jpg" alt="Imágen número 4 de Grand Theft Auto San Andreas 2005"></li>
    <li id="slide5"><img src="images/Capturas/GTA_Old/GTA_Old_5.jpg" alt="Imágen número 5 de Grand Theft Auto San Andreas 2005"></li>
    <li id="slide6"><img src="images/Capturas/GTA_Old/GTA_Old_6.jpg" alt="Imágen número 6 de Grand Theft Auto San Andreas 2005"></li>
    <li id="slide7"><img src="images/Capturas/GTA_Old/GTA_Old_7.jpg" alt="Imágen número 7 de Grand Theft Auto San Andreas 2005"></li>
    <li id="slide8"><img src="images/Capturas/GTA_Old/GTA_Old_8.jpg" alt="Imágen número 8 de Grand Theft Auto San Andreas 2005"></li>
    <li id="slide9"><img src="images/Capturas/GTA_Old/GTA_Old_9.jpg" alt="Imágen número 9 de Grand Theft Auto San Andreas 2005"></li>
    <li id="slide10"><img src="images/Capturas/GTA_Old/GTA_Old_10.jpg" alt="Imágen número 10 de Grand Theft Auto San Andreas 2005"></li>
    <li id="slide11"><img src="images/Capturas/GTA_Old/GTA_Old_11.jpg" alt="Imágen número 11 de Grand Theft Auto San Andreas 2005"></li>
    <li id="slide12"><img src="images/Capturas/GTA_Old/GTA_Old_12.jpg" alt="Imágen número 12 de Grand Theft Auto San Andreas 2005"></li>
    <li id="slide13"><img src="images/Capturas/GTA_Old/GTA_Old_13.jpg" alt="Imágen número 13 de Grand Theft Auto San Andreas 2005"></li>
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
        <img src="images/Capturas/GTA_Old/GTA_Old_Portada.jpg" alt="Portada de Grand Theft Auto San Andreas 2005">
        <p>Hace cinco años, Carl Johnson escapó de la presión de la vida en Los Santos, San Andreas, una ciudad desgarrada por los enfrentamientos entre bandas, las drogas y la corrupción. Donde las estrellas de cine y los millonarios hacen todo lo posible por evitar a los camellos y pandilleros armados.</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: 6 JUN 2005
        <br>
        <br>
        DESARROLLADOR: <a href="https://www.rockstargames.com/es/games/sanandreas" target="_blank">Rockstar Games</a> 
        <br>
        EDITOR: <a href="https://www.rockstargames.com/es/games/sanandreas" target="_blank">Rockstar Games</a> 
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
<p>Hace cinco años, Carl Johnson escapó de la presión de la vida en Los Santos, San Andreas, una ciudad desgarrada por los enfrentamientos entre bandas, las drogas y la corrupción. Donde las estrellas de cine y los millonarios hacen todo lo posible por evitar a los camellos y pandilleros armados.
Ahora estamos a comienzos de los 90. Carl ha vuelto a casa. Su madre ha sido asesinada, su familia se ha deshecho y sus amigos de la infancia se han visto arrastrados hacia el desastre.
En su regreso a su antiguo vecindario, una pareja de polis corruptos lo incriminan en un homicidio. CJ se ve forzado a emprender un viaje que lo llevará a través de todo el estado de San Andreas, para así salvar a su familia y recuperar el control de las calles.</p>
</div>


<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO: OS: Microsoft® Windows® 2000/XP, Processor: 1Ghz Pentium III or AMD Athlon Processor, Memory: 256MB of RAM
Graphics: 64MB Video Card (Geforce 3 or better), Hard Drive: 3.6GB of free hard disk space (minimal install), Other Requirements: Software installations required including DirectX and Sony DADC SecuROM, Partner Requirements: Please check the terms of service of this site before purchasing this software.
<br>
<br>
RECOMENDADO: Processor: Intel Pentium 4 or AMD Athlon XP Processor, Memory: 384MB of RAM (the more the better!)
Graphics: 128MB (or greater) Video Card (Geforce 6 Series Recommended), Hard Drive: 4.7GB of free hard disk space (full install), Sound Card: DirectX 9 compatible Sound Card (Sound Blaster Auidgy 2 Recommended)</p>
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