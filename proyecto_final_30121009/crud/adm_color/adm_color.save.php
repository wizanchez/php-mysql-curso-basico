<?PHp 

	include('../config/conec.inc.php');
	include('funcion_color.fc.php');
	include('../funciones/fc_decoracion.php');

			##-----------------------------------------------------------------------
			#	IMPRIMO LOS ESTILOS GENERALES
			fc_stylos_generales('ADM...->Save');
			##-----------------------------------------------------------------------
	


	##--------------------------------------------------------------------------------
	#	COLOCO A IMPRIMIR MI VENTANA PRINCIPAL
	fc_ventana_principal_ini(
								'Adm .... -> Salvar'
								,'70%'
							);
	##--------------------------------------------------------------------------------


switch ($_REQUEST['action']) {
	##--------------------------------------------------------------------------------
	#	AHORA VOY ADICIONAR EL COLOR
	case 'adicionar':
		$a_resp=gl_get_color($_REQUEST['c_nombre'],'nombre');
		
		if (count($a_resp)==0){
			gl_insert_color($_REQUEST['c_nombre'],$_REQUEST['c_hexa']);
		
				echo '<CENTER>ADICIONADO SATISFACTORIAMENTE</CENTER>';
		}ELSE{
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

	?>
	<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=.">