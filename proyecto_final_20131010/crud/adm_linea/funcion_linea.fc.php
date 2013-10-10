<?PHp 
function gl_insert_linea($nombre){
		global $conn;
			$queEmp = "INSERT INTO aux_linea (nombre
											,fecha_entrada)
						VALUES 				
											('$nombre',now())
					";

			mysql_query($queEmp, $conn) or die('<br>*******<br>Error SQL !!! :'.mysql_error().'<br>*******');


}

function gl_update_linea($nombre){
		global $conn;
			$actualiz = "UPDATE aux_linea SET nombre='".$v_linea."' WHERE id='".$v_linea_modif."'";

			mysql_query($actualiz, $conn) or die('<br>*******<br>Error SQL !!! :'.mysql_error().'<br>*******');
}


function gl_get_linea($val,$type='')
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
						aux_linea
					WHERE 
						cancel=0
					".$v_valig;
	$a_resp = mysql_query($queEmp, $conn) or die('<br>*******<br>Error SQL !!! :'.mysql_error().'<br>*******');
	#----------------------------------------------------------------------------

	$i=0;
		while ($a_resp2 = mysql_fetch_array($a_resp)) {


				$a_vect[$i]['id']				=$a_resp2['id'];
				$a_vect[$i]['nombre']			=$a_resp2['nombre'];
				$a_vect[$i]['codigo']			=$a_resp2['codigo_hex'];
				$a_vect[$i]['fecha_entrada']		=$a_resp2['fecha_entrada'];
				$a_vect[$i]['fecha_actualizacion']	=$a_resp2['fecha_actualizacion'];


			$i++;
		}

		return $a_vect;

	}
?>