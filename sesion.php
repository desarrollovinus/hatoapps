<?php
//include 'aplicacion/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
    <?php require('aplicacion/cabecera.php'); ?>
    <body>
        <header>
            <h1>Suite de aplicaciones</h1>
        </header>
        <section>
            <form action="login.php" method="post">
                <input id="usuario" name="usuario" type="text" placeholder="Usuario" autofocus/>
                <input id="password" name="password" type="password" placeholder="Contraseña"/>
                <input type="submit" value="Ingresar"/>
            </form><br/><br/>
            <div style="height: 25px;">
                <?php if(isset($_SESSION['error'])){echo '<div class="error">'.$_SESSION['error'].'</div>';} ?>
            </div><br/><br/>
        </section>
        <footer>
            <?php require('aplicacion/pie.php'); ?>
        </footer>
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
    });
</script>