<?PHp 
function gl_insert_cilindraje($nombre,$hexa){
		global $conn;
			$queEmp = "INSERT INTO aux_color (
											nombre
											,codigo_hex
											,fecha_entrada
										)VALUES(
											'$nombre'
											,'$hexa'
											,now()
										)
					";

			mysql_query($queEmp, $conn) or die('<br>*******<br>Error SQL !!! :'.mysql_error().'<br>*******');



}


function gl_get_cilindraje($val,$type='')
	{

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


	#----------------------------------------------------------------------------
	#	CREO LA CONSULTA 
	$queEmp = "SELECT 
						id
						,nombre
						,fecha_entrada
						,fecha_actualizacion
					FROM 
						aux_cilindraje 
					WHERE 
						cancel=0
					".$v_valig;
	$a_resp = mysql_query($queEmp, $conn) or die('<br>*******<br>Error SQL !!! :'.mysql_error().'<br>*******');
	#----------------------------------------------------------------------------

	$i=0;
		while ($a_resp2 = mysql_fetch_array($a_resp)) {


				$a_vect[$i]['id']				=$a_resp2['id'];
				$a_vect[$i]['nombre']			=$a_resp2['nombre'];
				$a_vect[$i]['fecha_entrada']		=$a_resp2['fecha_entrada'];
				$a_vect[$i]['fecha_actualizacion']	=$a_resp2['fecha_actualizacion'];


			$i++;
		}

		return $a_vect;

	}


?>