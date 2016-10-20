<?php
/*
 * Funcion que conecta a la base de datos
 */
function Conexion(){
    //Se conecta a la base de datos
    if(!($conexion = mysql_connect("databases",'root','hat0v1al'))){
        echo "<p>Error conectando a la base de datos.</p>";
        exit();
    }//Fin if
    
    //Se selecciona la base de datos
    if (!mysql_select_db("hatoapps",$conexion)){
        echo "<p>Error seleccionando la base de datos.</p>";
        exit();
    }//Fin if
    
    return $conexion;
}//Fin Conexion()

/*
 * Funcion que retorna las aplicaciones registradas en base de datos
 */
function aplicaciones(){
    //Se realiza la consulta
    $sql = "select * from tbl_aplicaciones order by Nombre";
    
    //Se ejecuta la consulta
    $resultado = mysql_query($sql, conexion()) or die(mysql_error());

    return $resultado;
}//Fin aplicaciones()