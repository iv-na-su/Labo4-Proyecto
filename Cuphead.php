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


<h2 class = "titulos">CUPHEAD</h2>

<article class="juegos">
    <div>
       <iframe width="800" height="500" src="https://www.youtube.com/embed/81zM_vg96VY" title="Cuphead | Tráiler de lanzamiento" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div>
        <img src="images/Capturas/Cuphead/Cuphead_Portada.jpg" alt="Portada de Cuphead">
        <p>Cuphead es un juego de acción clásico estilo "dispara y corre" que se centra en combates contra el jefe. Inspirado en los dibujos animados de los años 30, los aspectos visual y sonoro están diseñados con esmero empleando las mismas técnicas de la época, es decir, animación tradicional.</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: 29 SEP 2017
        <br>
        <br>
        DESARROLLADOR: <a href="http://studiomdhr.com/" target="_blank">Studio MDHR</a> 
        <br>
        EDITOR: <a href="http://studiomdhr.com/" target="_blank">Studio MDHR</a>  
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
<p>Cuphead es un juego de acción clásico estilo "dispara y corre" que se centra en combates contra el jefe. Inspirado en los dibujos animados de los años 30, los aspectos visual y sonoro están diseñados con esmero empleando las mismas técnicas de la época, es decir, animación tradicional a mano, fondos de acuarela y grabaciones originales de jazz.
<br><br>Juega como Cuphead o Mugman (en modo de un jugador o cooperativo) y cruza mundos extraños, adquiere nuevas armas, aprende poderosos supermovimientos y descubre secretos ocultos mientras procuras saldar tu deuda con el diablo.</p>
</div>


<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO: Requiere un procesador y un sistema operativo de 64 bits, SO: Windows 7, Procesador: Intel Core2 Duo, E8400, 3.0GHz or AMD Athlon 64 X2 6000+, 3.0GHz or higher, Memoria: 3 GB de RAM, Gráficos: Geforce 9600 GT or AMD HD 3870 512MB or higher, DirectX: Versión 11, Almacenamiento: 4 GB de espacio disponible.
<br>
<br>
RECOMENDADO: Requiere un procesador y un sistema operativo de 64 bits.</p>
</div>


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