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
   $resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos WHERE ID = 14");
   $variable_1 = mysqli_fetch_assoc($resultado_1);

   $resultado_2 = mysqli_query($conexion, "SELECT * FROM desarrollador WHERE ID = 14");
   $variable_2 = mysqli_fetch_assoc($resultado_2);

   $resultado_3 = mysqli_query($conexion, "SELECT * FROM editor WHERE ID = 13");
   $variable_3 = mysqli_fetch_assoc($resultado_3);

 ?>
 <h2 class = "titulos"><?php echo $variable_1["Nombre"]; ?></h2>

<article class="juegos">
    <div class="galeria">
    <ul class="slider">
    <li id="slide1"><img src="images/Capturas/Voidigo/Voidigo_1.jpg" alt=""></li>
    <li id="slide2"><img src="images/Capturas/Voidigo/Voidigo_2.jpg" alt=""></li>
    <li id="slide3"><img src="images/Capturas/Voidigo/Voidigo_3.jpg" alt=""></li>
    <li id="slide4"><img src="images/Capturas/Voidigo/Voidigo_4.jpg" alt=""></li>
    <li id="slide5"><img src="images/Capturas/Voidigo/Voidigo_5.jpg" alt=""></li>
    <li id="slide6"><img src="images/Capturas/Voidigo/Voidigo_6.jpg" alt=""></li>
    <li id="slide7"><img src="images/Capturas/Voidigo/Voidigo_7.jpg" alt=""></li>
    <li id="slide8"><img src="images/Capturas/Voidigo/Voidigo_8.jpg" alt=""></li>
    <li id="slide9"><img src="images/Capturas/Voidigo/Voidigo_9.jpg" alt=""></li>
    <li id="slide10"><img src="images/Capturas/Voidigo/Voidigo_10.jpg" alt=""></li>
    <li id="slide11"><img src="images/Capturas/Voidigo/Voidigo_11.jpg" alt=""></li>
    <li id="slide12"><img src="images/Capturas/Voidigo/Voidigo_12.jpg" alt=""></li>
    <li id="slide13"><img src="images/Capturas/Voidigo/Voidigo_13.jpg" alt=""></li>
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
        <img src="images/Capturas/Voidigo/Voidigo_Portada.jpg" alt="">
        <p>A vividly animated action roguelite focused on boss hunting. Unleash an array of diverse weapons and powerups to combat the corruption of the Void.</p>
        <br>
        <h4>FECHA DE LANZAMIENTO: <?php echo $variable_1["Lanzamiento"]; ?>
        <br>
        <br>
        DESARROLLADOR: <a href="https://semiwork.se/" target="_blank"><?php echo $variable_2["Desarrollador"]; ?></a> 
        <br>
        EDITOR: <a href="https://semiwork.se/" target="_blank"><?php echo $variable_3["Editor"]; ?></a>  
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
<p>Unleash chaos in Voidigo, a vividly animated roguelite shooter packed with dynamic boss battles, zany weapons, and playful humor.
<br><br>
Select from an array of ranged and melee weapons to combat the looming corruption. Master the art of dodging and stun your enemies with stomps to tip the balance in your favor.
<br><br>
Voidigo's numerous bosses, corrupted by the void, offer fierce resistance. They may flee mid-battle, giving you a choice: pursue or regroup. However, hesitate too long, and they'll begin hunting you.
<br><br>
In your battle, collect diverse power-ups for exciting synergies. Trade weapons and resources to customize your playstyle.
</p>
</div>

<div class= "acerca_de">
<h3>REQUISITOS DEL JUEGO</h3>
<br>
<br>
<p>MÍNIMO: <br><br>
SO: Windows 7 (32-bit) or above<br>
Procesador: i3-530 or equivalent<br>
Memoria: 4 GB de RAM<br>
Gráficos: GeForce GT 425M<br>
DirectX: Versión 11<br>
Almacenamiento: 1 GB de espacio disponible
<br><br>
<br><br>
RECOMENDADO: <br><br>
SO: Windows 10<br>
Procesador: i7-4770 or equivalent<br>
Memoria: 8 GB de RAM<br>
Gráficos: GeForce GTX 870M or equivalent<br>
DirectX: Versión 11<br>
Almacenamiento: 1 GB de espacio disponible</p>
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