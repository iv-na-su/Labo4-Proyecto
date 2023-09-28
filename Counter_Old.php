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
                    <li><a href="protagonistas.php">AAAAA</a></li>
                    <li><a href="secundarios.php">BBBBBBBBBBB</a></li>
                    <li><a href="cameos.php">CCCCCCCCCCCCC</a></li>
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

<section>
    <iframe src="https://www.youtube.com/watch?v=j71GvZ26H6c"></iframe>
</section>
<br>
<br>
<br>
<h2 class = "titulos">COUNTER STRIKE 1.6</h2>

<article class="juegos">
    <div>
        <iframe src="https://www.youtube.com/embed/j71GvZ26H6c" title="Counter-Strike 1.6 - Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div>
        <img src="images/Capturas/Counter_Old/Counter_Old_Portada.jpg" alt="">
        <h2>Disfruta del juego de acción en línea n° 1 en el mundo. Sumérgete en el fragor de la guerra antiterrorista más realista con este archiconocido juego por equipos. Alíate con compañeros para superar misiones estratégicas, asalta bases enemigas, rescata rehenes, y recuerda que tu personaje contribuye al éxito del equipo y viceversa.</h2>
    </div>

</article>



<footer>
    <div>
        <a href="index.php"><strong>Inicio</strong></a>
    </div>
    <div>
        <a href="juegos.php"><strong>Juegos</strong></a>
            <br><a href="#accion">Acción</a>
                <!--<br><a href=".php">Juego 1</a>
                <br><a href=".php">Juego 2</a>
                <br><a href=".php">Juego 3</a>-->
            <br><a href="#indie">Indie</a>
            <br><a href="#terror">Terror</a>
            <br><a href="#shooter">Shooter</a>
    </div>
    <div>
        <h7><strong>Perfil</strong></h7>
        <!--<br><a href="resumen.html">Resumen</a>
        <br><a href="origen.html">Origen</a>
        <br><a href="derivados.html">Derivados</a> -->
    </div>
    <div>
        <h7><strong>Contacto</strong></h7>
        <!--<br><a href="produccion.html">Producción</a>
        <br><a href="impacto.html">Impacto Cultural</a>
        <br><a href="temporadas.html">Temporadas</a>
        <br><a href="prensa.html">Datos de Prensa</a> -->
    </div>
    <br>
    <a href="https://es-la.facebook.com/"><img src="images/Icono_Facebook.png" alt="Facebook"></a>
    <a href="https://www.instagram.com/"><img src="images/Icono_Instagram.png" alt="Instagram"></a>
    <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZXMifQ%3D%3D%22%7D"><img src="images/Icono_Twitter.png" alt="Twitter"></a>
    <a href="https://www.tiktok.com/es/"><img src="images/Icono_TikTok.png" alt="TikTok"></a>
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