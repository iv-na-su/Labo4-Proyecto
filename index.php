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
        <article class="fondo">
            <div>
                <img src="Imagenes/Logo_White_PC.png" alt="Logo FRIENDS">
                <h1>F·R·I·E·N·D·S:</h1>
                <h2>The One With The Fan Page</h2>
            </div>
        </article>
    <article class="title_logo">
        <div>
            <img src="Imagenes/Ini_Logo.png" alt="Sección Inicio">
        </div>
    </article>
        <article>
            <h3>Sinopsis:</h3>
                <p><b>F·R·I·E·N·D·S</b> es una serie que narra las aventuras y desventuras de seis jóvenes veinteañeros de Nueva York: <i>Rachel</i>, <i>Monica</i>, <i>Phoebe</i>, <i>Ross</i>, <i>Chandler</i> y <i>Joey</i>. A pesar de los numerosos cambios que se producen en sus vidas, su amistad es inquebrantable en la dura batalla por salir adelante en sus periplos profesionales y personales.</p>
        </article>

        <article>
            <h3>¿Que es <i>"F·R·I·E·N·D·S: The One With The Fan Page"</i>?</h3>
                <p><strong><i>F·R·I·E·N·D·S: The One With The Fan Page</strong></i> es un sitio web <strong>no oficial</strong>, hecha de un fan para fans, sin fines de lucro. Este sitio recopila información sobre la serie, así como curiosidades de la misma, su historia y detalles del detrás de cámaras de esta mítica sitcom de los 90's.</p> 
        </article>

        <article>
            <h3>¿Dónde puedo ver <i>"F·R·I·E·N·D·S"</i>?</h3>
                <p>Actualmente la serie puede verse completa en la plataforma de HBO Max:
                    <br><a href="https://www.hbomax.com/ar/es/series/urn:hbo:series:GXdbR_gOXWJuAuwEAACVH">Link aquí.</a>
                </p> 
        </article>  
    </section>
<footer>
    <div>
        <a href="index.php"><strong>Inicio</strong></a>
    </div>
    <div>
        <a href="juegos.php"><strong>Juegos</strong></a>
            <br><a href="juegos.php/#accion">Acción</a>
            <br><a href="juegos.php/#indie">Indie</a>
            <br><a href="juegos.php/#terror">Terror</a>
            <br><a href="juegos.php/#shooter">Shooter</a>
    </div>
    <div>
        <h7><strong>Perfil</strong></h7>
    </div>
    <div>
        <h7><strong>Contacto</strong></h7>
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