<html>

    <div>
        <a class="logo" href="index.php"><img src="images/Vapor_Logo_Png_2.png" alt="Logo página">
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
        <?php 
        if ($_SESSION["VARIABLE"] != NULL){
            echo ('            <ul>
                <li><a href = "iniciar_sesion.php">Iniciar Sesión</a></li>
            </ul>
        </div>');
        }
        
        else{
        echo '     
            <ul>
                <li><a href = "iniciar_sesion.php">Iniciar Sesión</a></li>
            </ul>
        </div>
        ';
        }
        ?>
        <div class="dropdown">
            <ul>
                <li><a href = "contacto.php">Contacto</a></li>
            </ul>
        </div>
    </nav>
</html>