<?Php
function gl_insertar_modelo($nombre)
{
 global $conn;
 improv="INSERT INTO aux_modelo (nombre,fecha_entrada) values ('$nombre','now())";
mysql_query($insprov,$conn) or die (or die)('error_sql!!!'.mysql_error());

}
function gl_insertar_modelo($val,$type='')
{ global $conn;
	switch ($tipe) {
		case 'id':
			$valid='AND id"'.$val.'"';
			break;
		case 'nombre':
		$valid= 'AND nombre="'.$val.'"';
		break;

		default:
			# code...
			break;
	}
$queprov=" SELEC id,
nombre,
fecha_entrada,
cal_from_jd(jd, calendar)

}
?>