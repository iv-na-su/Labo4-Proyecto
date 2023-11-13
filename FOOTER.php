<html>
<div>
    <a href="index.php">Inicio</a>
</div>
<div>
    <a href="juegos.php">Juegos</a>
</div>
<div>
<?php 
if ($_SESSION["VARIABLE"] != NULL){
    echo ('            
    <ul>
        <li><a href = "perfil.php">Perfil</a></li>
    </ul>');
    }
        
    else{
            
    echo ('     
    <ul>
        <li><a href = "iniciar_sesion.php">Ingresar</a></li>
    </ul>');
    }
?>
</div>
<div>
    <a href="contacto.php">Contacto</a>
</div>

    <a href="https://es-la.facebook.com/" target="_blank"><img src="images/Icono_Facebook.png" alt="Facebook" class="redes"></a>
    <a href="https://www.instagram.com/" target="_blank"><img src="images/Icono_Instagram.png" alt="Instagram" class="redes"></a>
    <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZXMifQ%3D%3D%22%7D" target="_blank"><img src="images/Icono_Twitter.png" alt="Twitter" class="redes"></a>

    <!-- Script de efecto zoom -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $('.redes').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});
</script>
</html>