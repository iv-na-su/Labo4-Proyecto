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
   $resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 22");
   $variable_1 = mysqli_fetch_assoc($resultado_1);

   $resultado_2 = mysqli_query($conexion, "SELECT * FROM desarrollador WHERE ID = 22");
   $variable_2 = mysqli_fetch_assoc($resultado_2);

   $resultado_3 = mysqli_query($conexion, "SELECT * FROM editor WHERE ID = 20");
   $variable_3 = mysqli_fetch_assoc($resultado_3);

 ?>
 <h2 class = "titulos"><?php echo $variable_1["Nombre"]; ?></h2>

<article class="juegos">
    <div class="galeria">
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/South_Park_TSOT/South_Park_TSOT_1.jpg" alt=""></li>
    <li id="slide2"><img src="images/Capturas/South_Park_TSOT/South_Park_TSOT_2.jpg" alt=""></li>
    <li id="slide3"><img src="images/Capturas/South_Park_TSOT/South_Park_TSOT_3.jpg" alt=""></li>
    <li id="slide4"><img src="images/Capturas/South_Park_TSOT/South_Park_TSOT_4.jpg" alt=""></li>
    <li id="slide5"><img src="images/Capturas/South_Park_TSOT/South_Park_TSOT_5.jpg" alt=""></li>
    <li id="slide6"><img src="images/Capturas/South_Park_TSOT/South_Park_TSOT_6.jpg" alt=""></li>
    <li id="slide7"><img src="images/Capturas/South_Park_TSOT/South_Park_TSOT_7.jpg" alt=""></li>
    <li id="slide8"><img src="images/Capturas/South_Park_TSOT/South_Park_TSOT_8.jpg" alt=""></li>
    <li id="slide9"><img src="images/Capturas/South_Park_TSOT/South_Park_TSOT_9.jpg" alt=""></li>
    <li id="slide10"><img src="images/Capturas/South_Park_TSOT/South_Park_TSOT_10.jpg" alt=""></li>
    <li id="slide11"><img src="images/Capturas/South_Park_TSOT/South_Park_TSOT_11.jpg" alt=""></li>
    <li id="slide12"><img src="images/Capturas/South_Park_TSOT/South_Park_TSOT_12.jpg" alt=""></li>
    <li id="slide13"><img src="images/Capturas/South_Park_TSOT/South_Park_TSOT_13.jpg" alt=""></li>
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
        <img src="images/Capturas/South_Park_TSOT/South_Park_TSOT_Portada.jpg" alt="">
        <p>De entre los mortíferos campos de batalla del patio de recreo de cuarto curso, un joven héroe se alzará, destinado a ser el salvador de South Park. De los creadores de South Park, Trey Parker y Matt Stone, llega una épica aventura para llegar a ser... guay. Presentamos: South Park™: The Stick of Truth™.</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: <?php echo $variable_1["Lanzamiento"]; ?>
        <br>
        <br>
        DESARROLLADOR: <a href="https://www.obsidian.net/" target="_blank"><?php echo $variable_2["Desarrollador"]; ?></a> 
        <br>
        EDITOR: <a href="https://www.ubisoft.com/es-mx/" target="_blank"><?php echo $variable_3["Editor"]; ?></a>  
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
<p>ADe entre los mortíferos campos de batalla del patio de recreo de cuarto curso, un joven héroe se alzará, destinado a ser el salvador de South Park. De los creadores de South Park, Trey Parker y Matt Stone, llega una épica aventura para llegar a ser... guay. Presentamos: South Park™: The Stick of Truth™.<br>
Comienzas como el niño nuevo del pueblo enfrentándote a un escalofriante reto: hacer amigos. A la vez que tú comienzas esta aventura, los chicos de South Park están envueltos en un enorme juego de rol por toda la ciudad, conjurando hechizos imaginarios y blandiendo espadas de juguete. Con el tiempo, este simple juego de niños se tornará en una batalla entre el bien y el mal que amenazará con consumir el mundo.<br>
Equípate con armas de leyenda para derrotar a hombres cangrejo, gnomos de los calzoncillos, hippies y otras fuerzas del mal. Descubre el Stick of Truth y gánate tu sitio como amigo al lado de Stan, Kyle, Cartman y Kenny. Triunfa y serás el salvador de South Park, consolidando tu estatus social en la escuela de primaria de South Park. Fracasa y serás para siempre conocido como... un perdedor.<br>

<br><br><br>
Características principales:<br><br>

○ La experiencia South Park definitiva<br>
Escrito y doblado por Trey Parker y Matt Stone, The Stick of Truth lleva su humor único al videojuego.
<br><br>
○ Una épica aventura para llegar a ser... guay<br>
Gánate tu sitio junto Stan, Kyle, Cartman y Kenny y únete a ellos en una histérica aventura para salvar South Park.
<br><br>
○ Amigos con beneficios<br>
Recluta a personajes clásicos de South Park para tu causa.
<br><br>
○ Combate intenso<br>
Ármate hasta los dientes con todo un arsenal de armas mágicas y místicas armaduras.
<br><br>
○ Personalización marca South Park<br>
Retrátate a ti mismo en South Park con cosa de un billón de combinaciones entre personajes, ropa y armas.</p>
</div>

<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO: <br><br>
SO: WindowsXP SP3, Windows Vista SP2, Windows 8 (both 32/64bit versions)<br>
Procesador: Intel Pentium Dual-Core E2180 @ 2.0 GHz or AMD Athlon64 X2 3800+ @ 2.0 GHz<br>
Memoria: 2 GB GB de RAM<br>
Gráficos: nVidia GeForce 8800GT or AMD Radeon HD2600XT (512MB VRAM with Shader Model 4.0 or higher)<br>
DirectX: Versión 9.0c<br>
Almacenamiento: 6 GB de espacio disponible<br>
Tarjeta de sonido: DirectX Compatible Sound Card with latest drivers<br>
Notas adicionales: Originally released for Windows 7, the game can be played on Windows 10 and Windows 11 OS
<br><br>
<br><br>
RECOMENDADO: <br><br>
SO: Windows 7<br>
Procesador: Core i5 750 a 2.67 GHz o equivalente<br>
Memoria: 4 GB de RAM<br>
Gráficos: ATI Radeon HD 4870 o nVidia GTX 260<br>
DirectX: Versión 9.0c<br>
Almacenamiento: 6 GB de espacio disponible<br>
Tarjeta de sonido: DirectX Compatible Sound Card with latest drivers<br>
Notas adicionales: Originally released for Windows 7, the game can be played on Windows 10 and Windows 11 OS</p>
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