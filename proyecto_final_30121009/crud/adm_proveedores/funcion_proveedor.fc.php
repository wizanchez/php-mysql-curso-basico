<?PhP
function gl_insertar_proveedor($nombre)
   {
   		global $conn;
   		insprov= "INSERT INTO aux_proveedor (nombre,fecha_entrada) values ('$nombre',now())";
   		mysql_query($insprov,$conn) or die('error_sql!!!'.mysql_error());
   }

function gl_get_proveedor($val,$type='')
{
	global $conn;
	switch ($tipe){
		case 'id':
			     $valid=' AND id="'.$val.'"';
			break;
		case 'nombre':
			      $valid=' AND nombre="'.$val.'"';
			break;
		default:
			# code...
			break;
      }
	  $queprov= " SELECT id
	  					 ,nombre
	  					 ,fecha_entrada
	  					 FROM
	  					 aux_proveedor
	  					 where 
	  					 cancel=0
	  					 ".$valid;
	  $a_resp=mysql_query($queprov,$conn) or die ('error_sql!!!'.mysql_error());

	  #------------MANDAMOS LA CONSULTA A UN VECTOR.
	  $i=0;
	   while ($a_resp2= mysql_fetch_array($a_resp)){
	   		$a_vect[$i]['id']				=$a_resp2['id'];
	   		$a_vect[$i]['nombre']			=$a_resp2['nombre'];
	   		$a_vect[$i]['fecha_entrada']	=$a_resp2['fecha_entrada'];

	   		$i++;
	    }
            return $a_vect;
	
}


?>