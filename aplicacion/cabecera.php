<?php
include 'conexion.php';
?>
<head>
    <title>Hatovial Apps.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!--Estilos-->
    <link rel="stylesheet" href="css/estilos.css" />

    <!--Favicon-->
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon" />
    
    <!--Scripts-->
    <script language="javascript" type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    
    <!--Logo-->
    <center><img src="img/logo.png" width="249" height="94"/></center>
    
    <script type='text/javascript'>
        $(document).ready(function(){
            /************************Este script establece el efecto para los mensajes de error, de informacion, de alerta y de exito************************/
            setTimeout(function(){
                $(".info, .error, .exito, .alerta").fadeOut(1200);
            }, 3000);
        })
    </script>
</head>
