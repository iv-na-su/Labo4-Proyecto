<html>
    <head>
            <link rel="shortcut icon" href="images/logo mini.png" type="image/png" />
            <link rel="stylesheet" href="css/estilos.css">    
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC&family=Righteous&display=swap" rel="stylesheet">
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     </head>
    <body>

        <img class="fondo"  src="images/fondo negro.jpg">
    </img>



<header>
    <div>
        <a title="inicio" href="index.html"><img src = "images/logo mini.png" type= "image/png" alt ="Vapor_logo_png" /></a>
    </div>

    <nav id = "menu">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>                
        <ul>
            <li><a href="juegos.html">JUEGOS</a>
        <ul>
            <li><a href="AVENTURA.html">Aventura</a></li>
            <li><a href="ACCION.html">Acción</a></li>
            <li><a href="SHOOTER.html">Shooter</a></li>
        </ul>
            </li>
            <li><a href="reparto.html">Reparto</a>
        <ul>
            <li><a href="personajes_principales.html">Personajes principales</a></li>
            <li><a href="personajes_secundarios.html">Personajes secundarios</a></li>
        </ul>
            </li>
            <li><a href= "INICIAR SESION.html">Galeria</a></li>
        </ul>
    </nav>
</header>
        <div class="espacio"></div>

        <script type="text/javascript">
            function myFunction() {
              var x = document.getElementById("menu");
              if (x.className === "") {
                  x.className = "responsive";
                } 
              else {
                  x.className = "";
                  }
            }

        </script>

    </body>

    
    <footer>

        <div>
        <a title="facebook" href="https://www.facebook.com/TheOANetflix/?locale=es_LA"><img src = "images/redes/facebook.png" type= "image/png" alt ="facebook" /></a>
        <a title="twitter" href="https://twitter.com/The_OA"><img src = "images/redes/twitter.png" type= "image/png" alt ="twitter" /></a>
        <a title="netflix" href="https://www.netflix.com/title/80044950"><img src = "images/redes/netflix.png" type= "image/png" alt ="netflix" /></a>
        <a title="instagram" href="https://www.instagram.com/the_oa/?hl=es"><img src = "images/redes/instagram.png" type= "image/png" alt ="instagram" /></a>
        </div>

        
        <a id="contacto" href="contacto.html">CONTACTENOS</a>

    </footer>
</html>