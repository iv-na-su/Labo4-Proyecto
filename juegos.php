<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="icon" href="images/Vapor_Logo_Png.png" type="Images/png">
    <title>Vapor: The Proyect</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo_santi.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
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

   $cont = 1;
   $variable_2 = [];
while ($cont <= 7) {
   $resultado_2 = mysqli_query($conexion, "SELECT * FROM generos WHERE ID = $cont");
   $variable_2 = mysqli_fetch_row($resultado_2);
   $cont++;
}
 ?>


<div class="cajabuscar"><form method="get" id="buscarform" action="resultados_buscar.php">
    <fieldset>
        <input type="search" id="s" name="buscar" placeholder="Buscar..." required />
        <input class="button" type="submit" value="" >
        <i class="search"></i>
    </fieldset>
    </form></div>




<section class="generos" id="accion">
    <h2>ACCIÓN</h2>
    <div>
        <a href="Cuphead.php"><img src="images/Capturas/Cuphead/Cuphead_Portada.jpg" alt="Portada de Cuphead" class="zoom"></a>
        <h3>CUPHEAD</h3>
    </div>
    <div>
        <a href="GTA_Old.php"><img src="images/Capturas/GTA_Old/GTA_Old_Portada.jpg" alt="Portada de Grand Theft Auto San Andreas 2005" class="zoom"></a>
        <h3>GTA SAN ANDREAS</h3>
    </div>
    <div>
        <a href="PUBG.php"><img src="images/Capturas/PUBG/PUBG_Portada.jpg" alt="Portada de Pubg: Battlegrounds" class="zoom"></a>
        <h3>PUBG: BATTLEGROUNDS</h3>
    </div>
</section>

<section class="generos" id="casual">
    <h2>CASUAL</h2>
    <div>
        <a href="Stardew_Valley.php"><img src="images/Capturas/Stardew_Valley/Stardew_Valley_Portada.jpg" alt="Portada de Stardew Valley" class="zoom"></a>
        <h3>STARDEW VALLEY</h3>
    </div>
    <div>
        <a href="The_Sims_4.php"><img src="images/Capturas/The_Sims_4/The_Sims_4_Portada.jpg" alt="Portada de The Sims 4" class="zoom"></a>
        <h3>THE SIMS 4</h3>
    </div>
    <div>
        <a href="Fall_Guys.php"><img src="images/Capturas/Fall_Guys/Fall_Guys_Portada.jpg" alt="Portada de Fall Guys" class="zoom"></a>
        <h3>FALL GUYS</h3>
    </div>
</section>

<section class="generos" id="terror">
    <h2>TERROR</h2>
        <div>
        <a href="FNAF1.php"><img src="images/Capturas/FNAF1/FNAF1_Portada.jpg" alt="Portada de Five Nights At Freddy's" class="zoom"></a>
        <h3>FIVE NIGHT AT FREDDY'S</h3>
    </div>
    <div>
        <a href="RE4_Old.php"><img src="images/Capturas/RE4_Old/RE4_Old_Portada.jpg" alt="Portada de Resident Evil 4 2005" class="zoom">
        <h3>RESIDENT EVIL 4</h3>
    </div>
    <div>
        <a href="SOMA.php"><img src="images/Capturas/SOMA/SOMA_Portada.jpg" alt="Portada de Soma" class="zoom"></a>
        <h3>SOMA</h3>
    </div>
</section>

<section class="generos" id="shooter">
    <h2>SHOOTER</h2>

    <div>
        <a href="PayDay_2.php"><img src="images/Capturas/PayDay_2/PayDay_2_Portada.jpg" alt="Portada de Pay Day 2" class="zoom"></a>
        <h3>PAY DAY 2</h3>
    </div>

    <div>
        <a href="Counter_Old.php"><img src="images/Capturas/Counter_Old/Counter_Old_Portada.jpg" href="Counter_Old.php" alt="Portada de Counter Strike 1.6" class="zoom"></a>
        <h3>COUNTER STRIKE 1.6</h3>
    </div>
    
    <div>
        <a href="Team_Fortress_2.php"><img src="images/Capturas/Team_Fortress_2/Team_Fortress_2_Portada.jpg" alt="Portada de Team Fortress 2" class="zoom"></a>
        <h3>TEAM FORTRESS 2</h3>
    </div>
</section>

<section class="generos" id="roguelike">
    <h2>ROGUELIKE</h2>
        <div>
        <a href="The_Binding_Of_Isaac.php"><img src="images/Capturas/The_Binding_Of_Isaac/The_Binding_Of_Isaac_Portada.jpg" alt="" class="zoom">
        <h3>THE BINDING OF ISAAC: REBIRTH</h3>
    </div>
    <div>
        <a href="Voidigo.php"><img src="images/Capturas/Voidigo/Voidigo_Portada.jpg" alt="Portada de Voidigo" class="zoom">
        <h3>VOIDIGO</h3>
    </div>
    <div>
        <a href="Dead_Cells.php"><img src="images/Capturas/Dead_Cells/Dead_Cells_Portada.jpg" alt="Portada de Dead Cells" class="zoom">
        <h3>DEAD CELLS</h3>
    </div>
</section>

<section class="generos" id="aventura">
    <h2>AVENTURA</h2>
    <div>
        <a href="Core_Keeper.php"><img src="images/Capturas/Core_Keeper/Core_Keeper_Portada.jpg" alt="Portada de Core Keeper" class="zoom"></a>
        <h3>CORE KEEPER</h3>
    </div>
    <div>
        <a href="Dont_Starve.php"><img src="images/Capturas/Dont_Starve/Dont_Starve_Portada.jpg" alt="Portada de Don't Starve" class="zoom"></a>
        <h3>DON'T STARVE</h3>
    </div>
    <div>
        <a href="Terraria.php"><img src="images/Capturas/Terraria/Terraria_Portada.jpg" alt="Portada de Terraria" class="zoom"></a>
        <h3>TERRARIA</h3>
    </div>
    <div>
        <a href="SW_TFU1.php"><img src="images/Capturas/SW_TFU1/SW_TFU1_Portada.jpg" alt="Portada de Star Wars The Force Unleashed" class="zoom"></a>
        <h3>THE FORCE UNLEASHED</h3>
    </div>
</section>

<section class="generos" id="rpg">
    <h2>RPG</h2>
    <div>
        <a href="Dota2.php"><img src="images/Capturas/Dota2/Dota2_Portada.jpg" alt="Portada de Dota 2" class="zoom"></a>
        <h3>DOTA 2</h3>
    </div>
    <div>
        <a href="Darkest_Dungeon.php"><img src="images/Capturas/Darkest_Dungeon/Darkest_Dungeon_Portada.jpg" alt="Portada de Darkest Dungeon®" class="zoom"></a>
        <h3>DARKEST DUNGEON®</h3>
    </div>
    <div>
        <a href="South_Park_TSOT.php"><img src="images/Capturas/South_Park_TSOT/South_Park_TSOT_Portada.jpg" alt="Portada de South Park The Stick Of Truth" class="zoom"></a>
        <h3>SOUTH PARK: THE STICK OF TRUTH</h3>
    </div>
</section>

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


<!-- Script de efecto zoom -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});
</script>
</body>

</html>