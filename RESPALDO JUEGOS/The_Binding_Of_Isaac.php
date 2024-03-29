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
   $resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 13");
   $variable_1 = mysqli_fetch_assoc($resultado_1);

   $resultado_2 = mysqli_query($conexion, "SELECT * FROM desarrollador WHERE ID = 13");
   $variable_2 = mysqli_fetch_assoc($resultado_2);

   $resultado_3 = mysqli_query($conexion, "SELECT * FROM editor WHERE ID = 12");
   $variable_3 = mysqli_fetch_assoc($resultado_3);

 ?>
 <h2 class = "titulos"><?php echo $variable_1["Nombre"]; ?></h2>

<article class="juegos">
    <div class="galeria">
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/The_Binding_Of_Isaac/The_Binding_Of_Isaac_1.jpg" alt=""></li>
    <li id="slide2"><img src="images/Capturas/The_Binding_Of_Isaac/The_Binding_Of_Isaac_2.jpg" alt=""></li>
    <li id="slide3"><img src="images/Capturas/The_Binding_Of_Isaac/The_Binding_Of_Isaac_3.jpg" alt=""></li>
    <li id="slide4"><img src="images/Capturas/The_Binding_Of_Isaac/The_Binding_Of_Isaac_4.jpg" alt=""></li>
    <li id="slide5"><img src="images/Capturas/The_Binding_Of_Isaac/The_Binding_Of_Isaac_5.jpg" alt=""></li>
    <li id="slide6"><img src="images/Capturas/The_Binding_Of_Isaac/The_Binding_Of_Isaac_6.jpg" alt=""></li>
    <li id="slide7"><img src="images/Capturas/The_Binding_Of_Isaac/The_Binding_Of_Isaac_7.jpg" alt=""></li>
    <li id="slide8"><img src="images/Capturas/The_Binding_Of_Isaac/The_Binding_Of_Isaac_8.jpg" alt=""></li>
    <li id="slide9"><img src="images/Capturas/The_Binding_Of_Isaac/The_Binding_Of_Isaac_9.jpg" alt=""></li>
    <li id="slide10"><img src="images/Capturas/The_Binding_Of_Isaac/The_Binding_Of_Isaac_10.jpg" alt=""></li>
    <li id="slide11"><img src="images/Capturas/The_Binding_Of_Isaac/The_Binding_Of_Isaac_11.jpg" alt=""></li>
    <li id="slide12"><img src="images/Capturas/The_Binding_Of_Isaac/The_Binding_Of_Isaac_12.jpg" alt=""></li>
    <li id="slide13"><img src="images/Capturas/The_Binding_Of_Isaac/The_Binding_Of_Isaac_13.jpg" alt=""></li>
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
        <img src="images/Capturas/The_Binding_Of_Isaac/The_Binding_Of_Isaac_Portada.jpg" alt="">
        <p>The Binding of Isaac: Rebirth is a randomly generated action RPG shooter with heavy Rogue-like elements. Following Isaac on his journey players will find bizarre treasures that change Isaac’s form giving him super human abilities and enabling him to fight off droves of mysterious creatures, discover secrets</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: <?php echo $variable_1["Lanzamiento"]; ?>
        <br>
        <br>
        DESARROLLADOR: <a href="https://www.nicalis.com/" target="_blank"><?php echo $variable_2["Desarrollador"]; ?>
        <br>
        EDITOR: <a href="https://www.nicalis.com/" target="_blank"><?php echo $variable_3["Editor"]; ?>.</a>  
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
<p>When Isaac’s mother starts hearing the voice of God demanding a sacrifice be made to prove her faith, Isaac escapes into the basement facing droves of deranged enemies, lost brothers and sisters, his fears, and eventually his mother.
<br><br>
Gameplay<br>
The Binding of Isaac is a randomly generated action RPG shooter with heavy Rogue-like elements. Following Isaac on his journey players will find bizarre treasures that change Isaac’s form giving him super human abilities and enabling him to fight off droves of mysterious creatures, discover secrets and fight his way to safety.
<br><br>
About the Binding Of Isaac: Rebirth<br>
The Binding of Isaac: Rebirth is the ultimate of remakes with an all-new highly efficient game engine (expect 60fps on most PCs), all-new hand-drawn pixel style artwork, highly polished visual effects, all-new soundtrack and audio by the the sexy Ridiculon duo Matthias Bossi + Jon Evans. Oh yeah, and hundreds upon hundreds of designs, redesigns and re-tuned enhancements by series creator, Edmund McMillen. Did we mention the poop?<br><br>
Key Features:<br>
○ Over 500 hours of gameplay<br>
○ 4 BILLION Seeded runs!<br>
○ 20 Challenge runs<br>
○ 450+ items, including 160 new unlockables<br>
○ Integrated controller support for popular control pads!<br>
○ Analog directional movement and speed<br>
○ Tons of feature film quality animated endings<br>
○ Over 100 specialized seeds<br>
○ 2-Player local co-op<br>
○ Over 100 co-op characters<br>
○ Dynamic lighting, visual effects and art direction<br>
○ All-new game engine @60FPS 24/7<br>
○ All-new soundtrack and sound design<br>
○ Multiple Save slots<br>
○ Poop physics!<br>
○ The ultimate roguelike<br>
○ A bunch of achievements<br>
<br><br>
Uber secrets including:<br>
○ 10 Playable Characters<br>
○ 100+ enemies, with new designs<br>
○ Over 50 bosses, including tons of new and rare bosses<br>
○ Rooms FULL OF POOP!<br>
○ Mystic Runes<br>
○ Upgradeable shops</p>
</div>

<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO: <br><br>
SO: XP<br>
Procesador: Core 2 Duo<br>
Memoria: 2 GB de RAM<br>
Gráficos: Discreet video card<br>
Almacenamiento: 449 MB de espacio disponible<br>
Tarjeta de sonido: Yes
<br><br>
<br><br>
RECOMENDADO: <br><br>
SO: Windows 8 / 7 / Vista / XP<br>
Procesador: 2.4 GHz Quad Core 2.0 (or higher)<br>
Memoria: 8 GB de RAM<br>
Gráficos: Intel HD Graphics 4000 and higher, ATI Radeon HD-Series 4650 and higher, Nvidia GeForce 2xx-Series and up<br>
Almacenamiento: 449 MB de espacio disponible<br>
Tarjeta de sonido: Yes</p>
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