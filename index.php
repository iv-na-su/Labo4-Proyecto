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

    <section>
        <article class="inicio">
            <h1>Vapor: La Página Web</h1>
        </article>
        <article class="inicio">
            <h3>¿Que es <i>"Vapor: La Página Web"</i>?</h3>
                <p><strong><i>Vapor</strong></i> es un sitio web <strong>no oficial</strong>, sin fines de lucro, inspirado en la famosa página de videojuegos <i>"Steam"</i>. Este sitio recopila información sobre múltiples juegos, y los enlista en distintos géneros.</p> 
        </article>

        <article class="inicio">
            <h3>¿Dónde puedo encontrar la página <i>"Steam"</i>?</h3>
                <p>Puede acceder a la página verdadera mediante el link:
                    <br><a href="https://store.steampowered.com/?l=spanish">Steam.</a>
                </p> 
        </article>  
    </section>
<footer>
    <div>
        <a href="index.php"><strong>Inicio</strong></a>
    </div>
    <div>
        <a href="juegos.php"><strong>Juegos</strong></a>
            <br><a href="juegos.php#accion">Acción</a>
            <br><a href="juegos.php#casual">Casual</a>
            <br><a href="juegos.php#terror">Terror</a>
            <br><a href="juegos.php#shooter">Shooter</a>
            <br><a href="juegos.php#roguelike">Roguelike</a>
            <br><a href="juegos.php#aventura">Aventura</a>
            <br><a href="juegos.php#rpg">Rpg</a>


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