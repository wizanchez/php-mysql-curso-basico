<?PHp 

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


switch ($_REQUEST['wa']) {
	##--------------------------------------------------------------------------------
	#	AHORA VOY ADICIONAR EL COLOR
	case 'add':
		
				echo '<CENTER>ADICIONADO SATISFACTORIAMENTE</CENTER>';
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