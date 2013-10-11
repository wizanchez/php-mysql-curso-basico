<?php

function gl_marca_insert($nombre){

global $conn;

$insert_sql= "insert into aux_marca (nombre, fecha_entrada)
				values ('$nombre', now())
				";

	mysql_query($insert, $conn)or die ('Error de Conexion'.mysql_error());
}


function gl_get_marca($val, $type=''){

global $conn;

	switch ($type) {
		case 'id':
					$v_valig=' AND id="'.$val.'"';
			break;
		case 'nombre':
					$v_valig=' AND nombre="'.$val.'"';
			break;
		default:
			# code...
			break;
	}

$consul_sql= "select 
					id,
					nombre,
					fecha_entrada,
					fecha_actualizacion
				from 
					aux_marca
				where 
					cancel=0".$v_valig.'

			ORDER BY nombre 
					';
$a_resp=mysql_query($consul_sql,$conn) or die('<br>No hay conexion:'." ".mysql_error());

$i=0;
		while($a_resp2 = mysql_fetch_array($a_resp)){


	$a_vect[$i]['id']					=$a_resp2['id'];
	$a_vect[$i]['nombre']				=$a_resp2['nombre'];
	$a_vect[$i]['fecha_entrada']		=$a_resp2['fecha_entrada'];
	$a_vect[$i]['fecha_actualizacion']	=$a_resp2['fecha_actualizacion'];
			
$i++;
	}
return $a_vect;

}


?>