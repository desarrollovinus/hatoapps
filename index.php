<?php
session_start();

//include "aplicacion/conexion.php";
if($_SESSION['exito'] != true){
    //Se redirecciona
    header ("Location: sesion.php");
}else{
    //Se muestra el boton de salir cuando este iniciada la sesion
    ?>
    <input type="button" class="salir" value="Salir" onclick="location.href='salir.php'"/>
    <?php
}
$_SESSION['ok'] = "Se ha validado correctamente.";
?>
<!DOCTYPE html>
<html lang="es">
    <?php require("aplicacion/cabecera.php"); ?>
    <body>
        <header>
            <h1>Suite de aplicaciones</h1>
        </header>
        <section>
            <div id="imagen_aplicacion">
                <table width="100%">
                    <?php
                    $resultado = aplicaciones();
                    $contador = 0;
                    echo '<tr>';
                    while ($fila = mysql_fetch_assoc($resultado)){
                        $contador++;
                        ?>
                        <td width="33%" align="center">
                            <div onClick="location.href='<?php echo $fila['Url']; ?>'" style="cursor: hand;">
                                <img id="logo" src="img/logos/<?php echo $fila['Imagen'].'.png'; ?>" height="70"  />
                                <p>
                                    <b><?php echo utf8_encode($fila['Nombre']); ?></b>
                                </p>
                            </div>
                        </td>
                        <?php
                        if($contador %3 == 0){
                            echo '</tr>';
                        }
                    }
                    ?>
                </table>
            </div>
            <div style="height: 25px;">
                <?php if(isset($_SESSION['ok'])){echo '<div class="exito">'.$_SESSION['ok'].'</div>';} ?>
            </div>
        </section>
        <footer>
            <?php require('aplicacion/pie.php'); ?>
            <span style="font-size: Times; font-size: 12px;"><b>Nota:</b> Este mensaje ha sido generado automáticamente. Por favor no lo responda</span>
        </footer>
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $("img").addClass('desaturada')
        removeAttr('href')
    });
</script>