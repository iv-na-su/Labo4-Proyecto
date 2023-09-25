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




    <section class="generos">
        <h2>ACCION</h2>
        <div>
        <img src="images/Vapor_Logo_White.png" alt="">
        <h3>AAAAAA</h3>
        </div>

        <div>
        <img src="images/Vapor_Logo_White.png" alt="">
        <h3>AAAAAA</h3>
        </div>
        
        <div>
        <img src="images/Vapor_Logo_White.png" alt="">
        <h3>AAAAAA</h3>
        </div>

    </section>

    <section class="generos">
        <h2>AVENTURA</h2>

        <div>
        <img src="images/Vapor_Logo_White.png" alt="">
        <h3>AAAAAA</h3>
        </div>

        <div>
        <img src="images/Vapor_Logo_White.png" alt="">
        <h3>AAAAAA</h3>
        </div>

        <div>
        <img src="images/Vapor_Logo_White.png" alt="">
        <h3>AAAAAA</h3>
        </div>

    </section>

    <section class="generos">
        <h2>TERROR</h2>
        <div>
        <img src="images/Vapor_Logo_White.png" alt="">
        <h3>AAAAAA</h3>
        </div>

        <div>
        <img src="images/Vapor_Logo_White.png" alt="">
        <h3>AAAAAA</h3>
        </div>
        
        <div>
        <img src="images/Vapor_Logo_White.png" alt="">
        <h3>AAAAAA</h3>
        </div>
    </section>

    <section class="generos">
        <h2>SHOOTERS</h2>
        
        <div>
        <img src="images/Vapor_Logo_White.png" alt="">
        <h3>AAAAAA</h3>
        </div>

        <div>
        <img src="images/Vapor_Logo_White.png" alt="">
        <h3>AAAAAA</h3>
        </div>
        
        <div>
        <img src="images/Vapor_Logo_White.png" alt="">
        <h3>AAAAAA</h3>
        </div>
    </section>


    <footer>
        <div>
            <a href="index.html"><strong>Inicio</strong></a>
        </div>
        <div>
            <h7><strong>Personajes</strong></h7>
            <br><a href="protagonistas.html">Protagonistas</a>
            <br><a href="secundarios.html">Personajes Secundarios</a>
            <br><a href="cameos.html">Estrellas Invitadas</a>
        </div>
        <div>
            <h7><strong>¿Que es F·R·I·E·N·D·S?</strong></h7>
            <br><a href="resumen.html">Resumen</a>
            <br><a href="origen.html">Origen</a>
            <br><a href="derivados.html">Derivados</a>
        </div>
        <div>
            <h7><strong>Detrás de Cámaras</strong></h7>
            <br><a href="produccion.html">Producción</a>
            <br><a href="impacto.html">Impacto Cultural</a>
            <br><a href="temporadas.html">Temporadas</a>
            <br><a href="prensa.html">Datos de Prensa</a>
        </div>
        <div>
            <a href="galeria.html"><strong>Galería</strong></a>
        </div>
        <div>
            <a href="contacto.html"><strong>Contacto</strong></a>
        </div>
        <a href="https://es-la.facebook.com/"><img src="Imagenes/Iconos_Personajes/Icono_Facebook.png" alt="Facebook"></a>
        <a href="https://www.instagram.com/"><img src="Imagenes/Iconos_Personajes/Icono_Instagram.png" alt="Instagram"></a>
        <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZXMifQ%3D%3D%22%7D"><img src="Imagenes/Iconos_Personajes/Icono_Twitter.png" alt="Twitter"></a>
        <a href="https://www.tiktok.com/es/"><img src="Imagenes/Iconos_Personajes/Icono_TikTok.png" alt="TikTok"></a>
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