<?php
//Se establece la conexión a la base de datos.
$mysql_usuario = "daupv_curricular";
$mysql_password = "[K-C~e&H@S(u";
$mysql_host = "localhost";
$mysql_database = "daupv_curricular";

$conexion = mysql_connect($mysql_host, $mysql_usuario, $mysql_password, true);

//Seleccionar la base datos y la conexión, si existe un error se captura el error con die.
mysql_select_db($mysql_database, $conexion) || die('No pudo conectarse: '.mysql_error());

$sql = "SELECT DISTINCT $GLOBALS['Tipo'] FROM sim_bloques_2017"

?>
select
<?php

$count = 0;
while($row=mysql_fetch_array()){
	<option> $row[$count] </option>
	$count = $count + 1;
}

?>