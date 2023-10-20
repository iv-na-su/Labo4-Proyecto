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
   $resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 15");
   $variable_1 = mysqli_fetch_assoc($resultado_1);

   $resultado_3 = mysqli_query($conexion, "SELECT * FROM desarrollador WHERE ID = 15");
   $variable_3 = mysqli_fetch_assoc($resultado_3);
 ?>
 <h2 class = "titulos"><?php echo $variable_1["Nombre"]; ?></h2>

<article class="juegos">
    <div class="galeria">
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/Dead_Cells/Dead_Cells_1.jpg" alt=""></li>
    <li id="slide2"><img src="images/Capturas/Dead_Cells/Dead_Cells_2.jpg" alt=""></li>
    <li id="slide3"><img src="images/Capturas/Dead_Cells/Dead_Cells_3.jpg" alt=""></li>
    <li id="slide4"><img src="images/Capturas/Dead_Cells/Dead_Cells_4.jpg" alt=""></li>
    <li id="slide5"><img src="images/Capturas/Dead_Cells/Dead_Cells_5.jpg" alt=""></li>
    <li id="slide6"><img src="images/Capturas/Dead_Cells/Dead_Cells_6.jpg" alt=""></li>
    <li id="slide7"><img src="images/Capturas/Dead_Cells/Dead_Cells_7.jpg" alt=""></li>
    <li id="slide8"><img src="images/Capturas/Dead_Cells/Dead_Cells_8.jpg" alt=""></li>
    <li id="slide9"><img src="images/Capturas/Dead_Cells/Dead_Cells_9.jpg" alt=""></li>
    <li id="slide10"><img src="images/Capturas/Dead_Cells/Dead_Cells_10.jpg" alt=""></li>
    <li id="slide11"><img src="images/Capturas/Dead_Cells/Dead_Cells_11.jpg" alt=""></li>
    <li id="slide12"><img src="images/Capturas/Dead_Cells/Dead_Cells_12.jpg" alt=""></li>
    <li id="slide13"><img src="images/Capturas/Dead_Cells/Dead_Cells_13.jpg" alt=""></li>
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
        <img src="images/Capturas/Dead_Cells/Dead_Cells_Portada.jpg" alt="">
        <p>Dead Cells es un juego de acción de plataformas de estilo roguelite e inspirado en juegos tipo metroidvania. Explorarás un castillo en constante cambio y expansión, si es que logras abrirte paso contra los guardianes en los combates 2D de estilo Dark Souls. No hay puntos de control: la cosa consiste en matar, morir, aprender y repetir.</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: <?php echo $variable_1["Lanzamiento"]; ?>
        <br>
        <br>
        DESARROLLADOR: <a href="https://motion-twin.com/en/" target="_blank"><?php echo $variable_3["Desarrollador"]; ?></a> 
        <br>
        EDITOR: <a href="https://motion-twin.com/en/" target="_blank"><?php echo $variable_3["Editor"]; ?></a>  
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
<p>Roguelite? Metroidvania? Roguevania!<br>
¿Creciste con los juegos de tipo roguelike, fuiste testigo de los juegos roguelite y hasta de los roguelite-lite? Pues te presentamos nuestro juego de estilo roguevania, el hijo ilegítimo de un roguelite moderno (Rogue Legacy, Binding of Isaac, Enter the Gungeon, Spelunky, etc.) y un metroidvania de la vieja escuela (Castlevania: SotN y similares).
<br><br>
Características:<br>
○ RogueVania: la exploración de un mundo interconectado con la rejugabilidad de un juego roguelite y la adrenalina que produce la amenaza de la muerte permanente<br>
○ Acción en 2D de tipo Dark Souls: combates duros pero justos, más de 50 armas y hechizos con un sistema de juego exclusivo y, por supuesto, la tirada de emergencia para salir de apuros.<br>
○ Progresión no lineal: ¿alcantarillas, osario o murallas? Una vez desbloqueadas, con las habilidades especiales permanentes podrás acceder a nuevas rutas para alcanzar tu objetivo. Opta por el camino que mejor se ajuste a tu estilo de juego o simplemente a tu estado de ánimo.<br>
○ Exploración: salas secretas, pasadizos ocultos, paisajes encantadores... Tómate un momento para pasear por las torres y respirar ese aire fresco empapado de bruma marina.
<br><br><br>

Los niveles interconectados y el desbloqueo progresivo del acceso a la isla te proporcionan un auténtico incentivo para explorar tus alrededores. Además, súmale un grado de evolución para tu personaje y las mejoras de armas permanentes para tener claro lo que Dead Cells ha tomado prestado del largo catálogo de metroidvanias que lo preceden.
<br><br>
Eso sí, ¡lo más importante será tu habilidad como jugador! Los juegos de tipo roguelite consisten en mejorar constantemente hasta que lo que antes era un obstáculo insalvable se convierte en un paseo militar. Los combates implacables, junto con la ausencia de cualquier tipo de red de seguridad, hace que vivas una aventura adrenalínica cada vez que juegas. Además, su rejugabilidad no tiene rival.
</p>
</div>

<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO: <br><br>
SO: Windows 7+<br>
Procesador: Intel i5+<br>
Memoria: 2 GB de RAM<br>
Gráficos: Nvidia 450 GTS / Radeon HD 5750 or better<br>
Almacenamiento: 500 MB de espacio disponible<br>
Notas adicionales: DirectX 9.1+ or OpenGL 3.2+<br>
<br><br>
<br><br>
RECOMENDADO: <br><br>
SO: Windows 7+<br>
Procesador: Intel i5+<br>
Memoria: 4 GB de RAM<br>
Gráficos: Nvidia GTX 460 / Radeon HD 7800 or better<br>
Almacenamiento: 500 MB de espacio disponible<br>
Notas adicionales: DirectX 9.1+ or OpenGL 3.2+</p>
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