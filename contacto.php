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
    <img class="fondo" src="images/fondo_formu.jpg" alt="">
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

<article >
    <section class="formu">
        <p>¿Quiere hacer algún comentario en cuanto a nuestra página web?<br>
                  ¡Todos sus mensajes son bienvenidos!<br>
            ¡Complete el formulario y envíelo!
        </p>
        <form action="contacto.php" method="post">
            <br><label for="nom">Nombre:</label>
            <input type="text" name="nombre" maxlength="10" id="identificador">

            <br><label for="contra">Contraseña:</label>
            <input type="password" name="contraseña" maxlength="10" id="identificador">

            <br><label for="email">Email:</label>
            <input type="email" name="email" maxlength="40" id="identificador">

            <br><label for="comentario">Haga su comentario <strong>aquí:</strong></label><br>
            <textarea arows="90" cols="40" maxlength="300" name="comentario"> 
            </textarea>

            <br><input type="submit" value="Enviar" id="identificador">
            <input type="reset" value="Resetear Información" id="identificador">
        </form>
    </section>
</article>
<footer>
    <div>
        <a href="index.php"><strong>Inicio</strong></a>
    </div>
    <div>
        <a href="juegos.php"><strong>Juegos</strong></a>
            <br><a href="juegos.php/#accion">Acción</a>
            <br><a href="juegos.php/#casual">Casual</a>
            <br><a href="juegos.php/#terror">Terror</a>
            <br><a href="juegos.php/#shooter">Shooter</a>
            <br><a href="juegos.php/#roguelike">Roguelike</a>
            <br><a href="juegos.php/#aventura">Aventura</a>
            <br><a href="juegos.php/#rpg">Rpg</a>


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