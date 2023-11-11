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
    <?php
    include("NAV.php");
    ?>
</header>


<?php
   include("conexion.php");
   $resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 11");
   $variable_1 = mysqli_fetch_assoc($resultado_1);

   $resultado_2 = mysqli_query($conexion, "SELECT * FROM desarrollador WHERE ID = 11");
   $variable_2 = mysqli_fetch_assoc($resultado_2);

   $resultado_3 = mysqli_query($conexion, "SELECT * FROM editor WHERE ID = 11");
   $variable_3 = mysqli_fetch_assoc($resultado_3);

 ?>
 <h2 class = "titulos"><?php echo $variable_1["Nombre"]; ?></h2>

<article class="juegos">
    <div class="galeria">
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/SOMA/SOMA_1.jpg" alt=""></li>
    <li id="slide2"><img src="images/Capturas/SOMA/SOMA_2.jpg" alt=""></li>
    <li id="slide3"><img src="images/Capturas/SOMA/SOMA_3.jpg" alt=""></li>
    <li id="slide4"><img src="images/Capturas/SOMA/SOMA_4.jpg" alt=""></li>
    <li id="slide5"><img src="images/Capturas/SOMA/SOMA_5.jpg" alt=""></li>
    <li id="slide6"><img src="images/Capturas/SOMA/SOMA_6.jpg" alt=""></li>
    <li id="slide7"><img src="images/Capturas/SOMA/SOMA_7.jpg" alt=""></li>
    <li id="slide8"><img src="images/Capturas/SOMA/SOMA_8.jpg" alt=""></li>
    <li id="slide9"><img src="images/Capturas/SOMA/SOMA_9.jpg" alt=""></li>
    <li id="slide10"><img src="images/Capturas/SOMA/SOMA_10.jpg" alt=""></li>
    <li id="slide11"><img src="images/Capturas/SOMA/SOMA_11.jpg" alt=""></li>
    <li id="slide12"><img src="images/Capturas/SOMA/SOMA_12.jpg" alt=""></li>
    <li id="slide13"><img src="images/Capturas/SOMA/SOMA_13.jpg" alt=""></li>
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
        <img src="images/Capturas/SOMA/SOMA_Portada.jpg" alt="">
        <p>De los creadores de Amnesia: The Dark Descent, llega SOMA, un videojuego de terror y ciencia ficción ambientado bajo las olas del océano Atlántico. Lucha por sobrevivir en un mundo hostil que te hará cuestionar tu propia existencia.</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: <?php echo $variable_1["Lanzamiento"]; ?>
        <br>
        <br>
        DESARROLLADOR: <a href="https://frictionalgames.com/" target="_blank"><?php echo $variable_2["Desarrollador"]; ?></a> 
        <br>
        EDITOR: <a href="https://frictionalgames.com/" target="_blank"><?php echo $variable_3["Editor"]; ?></a>  
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
<p>SOMA es un videojuego de terror y ciencia ficción de Frictional Games, los creadores de Amnesia: the Dark Descent. Se trata de una historia inquietante sobre la identidad, la conciencia y lo que significa ser humano.
<br><br>
La radio no funciona, la comida escasea y las máquinas han comenzado a creerse que son personas. La instalación sumergida PATHOS-II ha sufrido un aislamiento terrible y se tendrán que tomar decisiones difíciles. ¿Qué hacer? ¿Qué tiene sentido? ¿Qué queda por lo que luchar?
<br><br>
Entra en el mundo de SOMA y enfréntate a los horrores sumergidos en las profundidades del océano. Hurga entre terminales cerradas y documentos secretos para descubrir la verdad que se oculta tras el caos. Busca a los últimos habitantes y participa en los sucesos que en último término darán forma al destino de la estación. Pero ten cuidado, el peligro se esconde en cada esquina: humanos corruptos, criaturas retorcidas, robots locos e incluso una I.A. inescrutable y omnipresente.<br>
Necesitarás averiguar cómo lidiar con cada uno. Recuerda simplemente que no hay marcha atrás, o vences a tus enemigos o prepárate para correr.</p>
</div>

<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO: <br><br>
SO: 64-bit Windows Vista<br>
Procesador: Core i3 / AMD A6 2.4Ghz<br>
Memoria: 4 GB de RAM<br>
Gráficos: NVIDIA GeForce GTX 260 / AMD Radeon HD 5750. OpenGL 3.3<br>
Almacenamiento: 25 GB de espacio disponible<br>
Notas adicionales: Tarjetas Intel Graphic integradas no admitidas.
<br>
<br>
<br>
<br>
RECOMENDADO:<br><br>
SO: 64-bit Windows 7<br>
Procesador: Core i5 / AMD FX 2.4Ghz<br>
Memoria: 8 GB de RAM<br>
Gráficos: NVIDIA GeForce GTX 480 / AMD Radeon HD 5970. OpenGL 3.3<br>
Almacenamiento: 25 GB de espacio disponible<br>
Notas adicionales: Tarjetas Intel Graphic integradas no admitidas.
 </p>
</div>


<footer>
<?php
    include("FOOTER.php");
    ?>
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