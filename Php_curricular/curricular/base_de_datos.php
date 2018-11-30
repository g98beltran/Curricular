<?php
$hostu = "daupv_curricular";// Usario de la BBDD

$hostp = "[K-C~e&H@S(u";// Contraseña de la BBDD

$dbn = " daupv_curricular ";// Nombre de la BBDD

$host = "localhost";// localhost de la BBDD                                                                                                                                                                                       

$extension = "sim_";// prefijo de las tablas de la base de datos

 

/*
Dentro de esa base de datos 
hay una tabla “sim_bloques_2017” 
con los datos del Excel volcados
 */


//Conectando base de datos
$con = mysqli_connect($host,$hostu,$hostp,$dbn);
//Comprovar base de datos
if(mysqli_connect_error()){
    echo("No se pudo conectar: ".mysqli_connect_error());
}
?>