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
   $resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 4");
   $variable_1 = mysqli_fetch_assoc($resultado_1);

   $resultado_2 = mysqli_query($conexion, "SELECT * FROM desarrollador WHERE ID = 4");
   $variable_2 = mysqli_fetch_assoc($resultado_2);

   $resultado_3 = mysqli_query($conexion, "SELECT * FROM editor WHERE ID = 4");
   $variable_3 = mysqli_fetch_assoc($resultado_3);

 ?>
 <h2 class = "titulos"><?php echo $variable_1["Nombre"]; ?></h2>

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
        <h4>FECHA DE LANZAMIENTO: <?php echo $variable_1["Lanzamiento"]; ?>
        <br>
        <br>
        DESARROLLADOR: <a href="https://www.rockstargames.com/es/games/sanandreas" target="_blank"><?php echo $variable_2["Desarrollador"]; ?></a> 
        <br>
        EDITOR: <a href="https://www.rockstargames.com/es/games/sanandreas" target="_blank"><?php echo $variable_3["Editor"]; ?></a> 
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
<p>MÍNIMO:<br><br>
OS: Microsoft® Windows® 2000/XP<br>
Processor: 1Ghz Pentium III or AMD Athlon Processor<br>
Memory: 256MB of RAM<br>
Graphics: 64MB Video Card (Geforce 3 or better)<br>
Hard Drive: 3.6GB of free hard disk space (minimal install)<br>
Other Requirements: Software installations required including DirectX and Sony DADC SecuROM<br>
Partner Requirements: Please check the terms of service of this site before purchasing this software.
<br><br>
<br><br>
RECOMENDADO:<br><br>
Processor: Intel Pentium 4 or AMD Athlon XP Processor<br>
Memory: 384MB of RAM (the more the better!)<br>
Graphics: 128MB (or greater) Video Card (Geforce 6 Series Recommended)<br>
Hard Drive: 4.7GB of free hard disk space (full install)<br>
Sound Card: DirectX 9 compatible Sound Card (Sound Blaster Auidgy 2 Recommended)</p>
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