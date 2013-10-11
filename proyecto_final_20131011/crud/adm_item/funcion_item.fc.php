<?php

		include('../adm_marca/funcion_marca.fc.php');
		include('../adm_linea/funcion_linea.fc.php');
		include('../adm_modelo/funcion_modelo.fc.php');
		include('../adm_cilindraje/funcion_cilindraje.fc.php');
		include('../adm_color/funcion_color.fc.php');
		include('../adm_proveedores/funcion_proveedor.fc.php');



function gl_insert_item($a_vect)
	{
		global $conn;

		$a_res =gl_get_item('','max_plu');

		$v_max_plu =$a_res[0]['plu']+1;

		

 	$queEmp = "INSERT INTO mae_item(
 									plu
									,marca_id
									,color_id
									,linea_id
									,cilindraje_id
									,modelo_id
									,fecha_entrada
 								)VALUES(
 									'".$v_max_plu."'
 									,'".$a_vect['marca_id']."'
 									,'".$a_vect['color_id']."'
 									,'".$a_vect['linea_id']."'
 									,'".$a_vect['cilindraje_id']."'
 									,'".$a_vect['modelo_id']."'
 									,NOW()
 								)

 				";
	$SSS=mysql_query($queEmp, $conn) or die('<br>*******<br>Error SQL !!! :'.mysql_error().'<br>*******');


		$a_res_2 =gl_get_item('','max_id');


	return $a_res_2[0]['id'];

	}

function gl_get_item($val,$type='')
	{

		global $conn;


		switch ($type) {
			case 'max_id':
				  				$v_valig	=' AND id>=0';

				  				$v_limit	=' LIMIT 1';
				  				$v_orderby	=' ORDER BY id DESC';

				break;
			case 'max_plu':
				  				$v_valig	=' AND id>=0';

				  				$v_limit	=' LIMIT 1';
				  				$v_orderby	=' ORDER BY plu DESC';

				break;
			case 'id':
				  				$v_valig=' AND id="'.$val.'"';
				break;
			case 'nombre':
				  				$v_valig=' AND nombre="'.$val.'"';
				break;
			case 'filtro_all':
				  				$v_valig=' AND marca_id="'.$val['marca_id'].'"
				  							AND color_id="'.$val['color_id'].'"
				  							AND linea_id="'.$val['linea_id'].'"
				  							AND cilindraje_id="'.$val['cilindraje_id'].'"
				  							AND modelo_id="'.$val['modelo_id'].'"

				  							';


				break;

			default:
				# code...
				break;

		}


	#----------------------------------------------------------------------------
	#	CREO LA CONSULTA 
  	$queEmp = "SELECT 
						id
						,plu
						,marca_id
						,color_id
						,linea_id
						,cilindraje_id
						,modelo_id
						,fecha_entrada
						,fecha_actualizacion
					FROM 
						mae_item
					WHERE 
						cancel=0
					".$v_valig.$v_orderby.$v_limit;
	$a_resp = mysql_query($queEmp, $conn) or die('<br>*******<br>Error SQL !!! :'.mysql_error().'<br>*******');


	$i=0;
		while($a_respd 	=mysql_fetch_array($a_resp))
		{
			
				$a_env[$i]['id']						=$a_respd['id'];
				$a_env[$i]['plu']						=$a_respd['plu'];
				$a_env[$i]['marca_id']					=$a_respd['marca_id'];
				$a_env[$i]['color_id']					=$a_respd['color_id'];
				$a_env[$i]['linea_id']					=$a_respd['linea_id'];
				$a_env[$i]['cilindraje_id']				=$a_respd['cilindraje_id'];
				$a_env[$i]['modelo_id']					=$a_respd['modelo_id'];
				$a_env[$i]['fecha_entrada']				=$a_respd['fecha_entrada'];
				$a_env[$i]['fecha_actualizacion']		=$a_respd['fecha_actualizacion'];


				##-----------------------------------------------
				#OBTENGO LA INFOMACION DE LA MARCA
					$a_resp_marca 	=gl_get_marca($a_env[$i]['marca_id'],'id');
				##-----------------------------------------------
				##-----------------------------------------------
				#OBTENGO LA INFOMACION DE LA LINEA
					$a_resp_linea 	=gl_get_linea($a_env[$i]['linea_id'],'id');
				##-----------------------------------------------
				##-----------------------------------------------
				#OBTENGO LA INFOMACION DE LA LINEA
					$a_resp_modelo 	=gl_get_modelo($a_env[$i]['modelo_id'],'id');
				##-----------------------------------------------
				##-----------------------------------------------
				#OBTENGO LA INFOMACION DE LA LINEA
					$a_resp_cilindraje 	=gl_get_cilindraje($a_env[$i]['cilindraje_id'],'id');
				##-----------------------------------------------
				##-----------------------------------------------
				#OBTENGO LA INFOMACION DE LA LINEA
					$a_resp_color  	=gl_get_color($a_env[$i]['color_id'],'id');
				##-----------------------------------------------

				$a_env[$i]['marca_nombre']				=$a_resp_marca[0]['nombre'];
				$a_env[$i]['linea_nombre']				=$a_resp_linea[0]['nombre'];
				$a_env[$i]['modelo_nombre']				=$a_resp_modelo[0]['nombre'];
				$a_env[$i]['cilindraje_nombre']			=$a_resp_cilindraje[0]['nombre'];
				$a_env[$i]['color_nombre']				=$a_resp_color[0]['nombre'];
				$a_env[$i]['color_nombre_hex']			=$a_resp_color[0]['codigo_hex'];


					$a_vec_itm 	=gl_get_item_proveedor($a_env[$i]['id'],'item_id');

					for ($j=0; $j < count($a_vec_itm); $j++) { 
						# code...
					
						$a_env[$i]['proveedor'][$j]['proveedor_id'] 	=$a_vec_itm[$j]['aux_proveedor_id'];


					##-----------------------------------------------
					#OBTENGO LA INFOMACION DElPROVEEDR
						$a_resp_proveedor  	=gl_get_proveedor($a_vec_itm[$j]['aux_proveedor_id'],'id');
					##-----------------------------------------------

						$a_env[$i]['proveedor'][$j]['proveedor_nombre'] 	=$a_resp_proveedor[0]['nombre'];

					}




				$i++;
		}

		return $a_env;
}





function gl_get_item_proveedor($val,$type='')
	{

		global $conn;


		switch ($type) {
			case 'fill_item_proveedor':
				  				$v_valig=' AND mae_item_id="'.$val['item_id'].'"
				  							AND aux_proveedor_id="'.$val['proveedor_id'].'"';
				break;
			case 'id':
				  				$v_valig=' AND id="'.$val.'"';
				break;
			case 'nombre':
				  				$v_valig=' AND nombre="'.$val.'"';
				break;
			case 'item_id':
				  				$v_valig=' AND mae_item_id="'.$val.'"';
				break;

			default:
				# code...
				break;

		}


	#----------------------------------------------------------------------------
	#	CREO LA CONSULTA 
  	$queEmp = "SELECT 
						id
						,mae_item_id
						,aux_proveedor_id
						,cancel
					FROM 
						det_item_proveedor
					WHERE 
						cancel=0
					".$v_valig.$v_orderby.$v_limit;
	$a_resp = mysql_query($queEmp, $conn) or die('<br>*******<br>Error SQL !!! :'.mysql_error().'<br>*******');


	$i=0;
		while($a_respd 	=mysql_fetch_array($a_resp))
		{
			
				$a_env[$i]['id']						=$a_respd['id'];
				$a_env[$i]['mae_item_id']				=$a_respd['mae_item_id'];
				$a_env[$i]['aux_proveedor_id']			=$a_respd['aux_proveedor_id'];
				$a_env[$i]['cancel']					=$a_respd['cancel'];
				





				$i++;
		}

		return $a_env;
}

function gl_insert_item_proveedor($a_vect)
	{
		global $conn;

		

 	$queEmp = "INSERT INTO det_item_proveedor(
 									mae_item_id
									,aux_proveedor_id
									,fecha_entrada
 								)VALUES(
 									'".$a_vect['item_id']."'
 									,'".$a_vect['proveedor_id']."'
 									,NOW()
 								)

 				";
	$SSS=mysql_query($queEmp, $conn) or die('<br>*******<br>Error SQL !!! :'.mysql_error().'<br>*******');



	}


	?>