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

<article>
    <?php
   include("conexion.php");
   $usuario=$_POST['usuario'];

    $consulta=mysqli_query($conexion, "SELECT usuario FROM usuarios WHERE usuario='$usuario'");

    $resultado=mysqli_num_rows($consulta);

    $resultado_1 = mysqli_query($conexion, "SELECT * FROM juegos");

    
    


    ?>
</article>


<article >
    <h2> <?php echo $_SESSION['NOMBRE']; ?> </h2>

</article>



<table>
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Genero</th>
        <th>Desarrollador</th>
        <th>Editor</th>
        <th>Lanzamiento</th>
        <th>Descripcion_Chica</th>
        <th>Descripcion_Grande</th>
        <th>Requisitos</th>
        <th>Portada</th>
        <th>Opciones</th>
    </thead>
    <?php while($variable_1 = mysqli_fetch_assoc($resultado_1)){?>
    <tr>
        <td><?php echo $variable_1["ID"];?></td>
        <td><?php echo $variable_1["Nombre"];?></td>

        <?php $resultado_2 = mysqli_query($conexion, "SELECT * FROM generos");?>
        <?php while($variable_2 = mysqli_fetch_assoc($resultado_2)){?>
            <?php if($variable_1["codigo_genero"] == $variable_2["id"]){?>
                <td><?php echo $variable_2["genero"];?></td>
                <?php }?>
         <?php }?>


         <?php $resultado_3 = mysqli_query($conexion, "SELECT * FROM desarrollador");?>
        <?php while($variable_3 = mysqli_fetch_assoc($resultado_3)){?>
            <?php if($variable_1["codigo_desarrollador"] == $variable_3["ID"]){?>
                <td><?php echo $variable_3["Desarrollador"];?></td>
                <?php }?>
         <?php }?>


         <?php $resultado_4 = mysqli_query($conexion, "SELECT * FROM editor");?>
        <?php while($variable_4 = mysqli_fetch_assoc($resultado_4)){?>
            <?php if($variable_1["codigo_editor"] == $variable_4["ID"]){?>
                <td><?php echo $variable_4["Editor"];?></td>
                <?php }?>
         <?php }?>

        <td><?php echo $variable_1["Lanzamiento"];?></td>
        <td><?php echo $variable_1["Descripcion_Chica"];?></td>
        <td><?php echo $variable_1["Descripcion_Grande"];?></td>
        <td><?php echo $variable_1["Requisitos"];?></td>
        <td><?php echo $variable_1["Portada"];?></td>
        <td><a href="modificar_formu.php?ID=<?php echo $variable_1["ID"];?>">Editar</a></td>

    </tr>
    <?php }?>
</table>




<article >
<a class="boton_cerrar" href="cerrar_sesion.php">Cerrar Sesión</a>
</article>

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