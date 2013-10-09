<?php
function gl_insert_linea($nombre){
global $conn;
$inser="INSERT INTO aux_linea(nombre
					,fecha_entrada)
			  VALUES($'nombre',now())";
			  mysql_query($inser, $conn)
}
?>