<?phP 

include('funcion_linea.fc.php');
include('../config/conec.inc.php');
include('../funciones/fc_decoracion.php');

$v_linea=$_REQUEST['v_linea'];
$v_linea_modif=$_REQUEST['v_linea_modif'];

fc_stylos_generales('adm linea');

#---inicializo mi ventana principal

fc_ventana_principal_ini('adm linea  Adicionar','70%');


#CONSULTA A BASE DE DATOS

gl_get__linea($_REQUEST['$nombre']);

switch ($_REQUEST['action']) {
	##--------------------------------------------------------------------------------
	#	AHORA VOY ADICIONAR EL COLOR
	case 'adicionar':
		$a_resp=gl_insert_linea($_REQUEST['v_linea']);

		if (count($a_resp)==0){
			gl_insert_linea($_REQUEST['v_linea']);

				echo '<CENTER>ADICIONADO SATISFACTORIAMENTE</CENTER>';
		}else{
							echo '<CENTER>ESTE COLOR YA EXISTE</CENTER>';

		}
		break;
	##--------------------------------------------------------------------------------
	#	AHORA VOY ELIMINAR EL COLOR
	case 'del':

				echo '<CENTER>ELIMINADO SATISFACTORIAMENTE</CENTER>';
		break;
	##--------------------------------------------------------------------------------
	#	AHORA VOY EDITAR EL COLOR
	case 'edit':

				echo '<CENTER>EDITADO SATISFACTORIAMENTE</CENTER>';
		break;

	default:
		# code...
		break;
}
		/**if ($v_linea_modif=="") {
							$v_sql= "SELECT nombre FROM aux_linea WHERE nombre='$v_linea'";
							$a_resp=mysql_query($v_sql
												,$conn
												);
							$record=mysql_fetch_row($a_resp);
						if($record==0){
										$sql = "INSERT INTO aux_linea(
										nombre
										,fecha_entrada
										)
		 								VALUES (
		 										'$v_linea'
		 										,now()
		 										)";
							$resul=mysql_query($sql
									          ,$conn
												);
							echo $v_linea."<br>SU REGISTRO SE HA INSERTADO CORRECTAMENTE";
						}else{
								echo"<br>ESTA LINEA YA EXISTE";
							}
		}else{
				$v_sql= "SELECT nombre FROM aux_linea WHERE nombre='$v_linea'";
				$a_resp=mysql_query($v_sql
												,$conn
												);
				$record=mysql_fetch_row($a_resp);
							if($record==0){
			   								mysql_query("UPDATE aux_linea SET 	nombre='".$v_linea."' WHERE id='".$v_linea_modif."'",$conn);
							                echo "<br>SU REGISTRO SE HA MODIFICADO CORRECTAMENTE";
							}else{
								  echo"<br>ESTA LINEA YA EXISTE";								
							}
						}*/
#finalizo mi ventana principal
fc_ventana_principal_fin();

?>