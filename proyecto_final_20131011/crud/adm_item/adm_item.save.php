<?php
include('../config/conec.inc.php');
include('../funciones/fc_decoracion.php');
include('funcion_item.fc.php');


fc_stylos_generales('adm ITEM');

#---inicializo mi ventana principal

fc_ventana_principal_ini('adm ITEM  Adicionar','70%');

	
	##----------------------------------------------------
	#obtengo los valores del formulario
			$a_vector['marca_id']		= $_REQUEST['c_marca'];
			$a_vector['linea_id']		= $_REQUEST['c_linea'];
			$a_vector['color_id']		= $_REQUEST['c_color'];
			$a_vector['modelo_id']		= $_REQUEST['c_modelo'];
			$a_vector['cilindraje_id']	= $_REQUEST['c_cilindraje'];
			$a_vector['proveedor_id'] 	= $_REQUEST['c_proveedor'];
	##----------------------------------------------------

	##----------------------------------------------------
	# HAGO LA CONSULTA A ITEM
		$a_resp 	=gl_get_item($a_vector,'filtro_all');
	##----------------------------------------------------



		if(count($a_resp)==0){

			$v_ultimo_item_id  =gl_insert_item($a_vector);
			
			echo 'INSERTADO SATISFACTORIAMENTE';
		}else{

			$v_ultimo_item_id  =$a_resp[0]['id'];
			echo 'este ya existe';
		}

		##----------------------------------------------
		#	INSERTO EN EL VECTOR EL ITEMID
			$a_vector['item_id']	=$v_ultimo_item_id;

		##----------------------------------------------
		$a_item_pro 	=gl_get_item_proveedor($a_vector,'fill_item_proveedor');


		if(count($a_item_pro)==0){

			gl_insert_item_proveedor($a_vector);
			echo '<br>LA ASOCIACION CON EL PREVEEODR SE SALVO';

		}else{
			echo '<br>YA EXISTE LA ASOCIACION CON EL PREVEEODR ';

		}



fc_ventana_principal_fin();

?>