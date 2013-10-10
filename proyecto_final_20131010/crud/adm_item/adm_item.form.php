<?PHp 

	include('../config/conec.inc.php');
	include('../adm_color/funcion_color.fc.php');
	include('../adm_marca/funcion_marca.fc.php');
	include('../adm_linea/funcion_linea.fc.php');
	include('../adm_cilindraje/funcion_cilindraje.fc.php');
	include('../adm_proveedores/funcion_proveedor.fc.php');
	include('../funciones/fc_decoracion.php');
    include('../adm_modelo/funcion_modelo.fc.php');

			##-----------------------------------------------------------------------
			#	IMPRIMO LOS ESTILOS GENERALES
			fc_stylos_generales('Adm item->Adicionar');
			#fc_bootstrap_js();
			##-----------------------------------------------------------------------


	##--------------------------------------------------------------------------------
	#	COLOCO A IMPRIMIR MI VENTANA PRINCIPAL
	fc_ventana_principal_ini(
								'Adm item->Adicionar'
								,'70%'
							);
	##--------------------------------------------------------------------------------


	##----------------------------------------------------------------
	#	OBTENGO EL CONTENIDO DE MARCA

		$a_info_marca 	=gl_get_marca('', '');
	
	##----------------------------------------------------------------
	##----------------------------------------------------------------
	#	OBTENGO EL CONTENIDO DE LA LINEA

		$a_info_linea 	=gl_get_linea('', '');
	
	##----------------------------------------------------------------
	##----------------------------------------------------------------
	#	OBTENGO EL CONTENIDO DEL COLOR

		$a_info_color 	=gl_get_color('', '');
	
	##----------------------------------------------------------------
	##----------------------------------------------------------------
	#	OBTENGO EL CONTENIDO DEL MODELO

		$a_info_modelo 	=gl_get_modelo('', '');
	
	##----------------------------------------------------------------
##----------------------------------------------------------------
	#	OBTENGO EL CONTENIDO DEL CILINDRAJE

		$a_info_cilindraje 	=gl_get_cilindraje('', '');
	
	##----------------------------------------------------------------
##----------------------------------------------------------------
	#	OBTENGO EL CONTENIDO DEL CILINDRAJE

		$a_info_proveedor	=gl_get_proveedor('', '');
	
	##----------------------------------------------------------------


?>
<table  border="0" cellspacing="0" cellpadding="00" align=center >
<tr>
	<th>Nombre Marca:</th>
	<td><?PHp select_all($a_info_marca,'c_marca');?></td>
</tr>
<tr>
	<th>Nombre Linea:</th>
	<td><?PHp select_all($a_info_linea,'c_linea');?></td>
</tr>
<tr>
	<th>Nombre Color:</th>
	<td><?PHp select_all($a_info_color,'c_color');?></td>
</tr>
<tr>
	<th>Nombre modelo:</th>
	<td><?PHp select_all($a_info_modelo,'c_modelo');?></td>
</tr>
<tr>
	<th>Nombre Cilindraje:</th>
	<td><?PHp select_all($a_info_cilindraje,'c_cilindraje');?></td>
</tr>
<tr>
	<th>Nombre proveedor:</th>
	<td><?PHp select_all($a_info_proveedor,'c_proveedor');?></td>
</tr>
</table>
<center><input type="submit" value="Enviar"></center>


<?PHp
	##--------------------------------------------------------------------------------
	##	FIN DE LA TABLA PRINCIPAL
	fc_ventana_principal_fin();
	##--------------------------------------------------------------------------------

function select_marca($a_info_marca)
	{

		?>
		<select name="c_marca" id="c_marca">

			<?php for ($i=0; $i < count($a_info_marca); $i++) { 
				
				?><option value="<?PHp echo $a_info_marca[$i]['id']?>"><?PHp echo $a_info_marca[$i]['nombre']?></option><?PHp
			}?>
		</select>
		<?PHp

	}


function select_all($a_info,$c_nombre)
	{

		?>
		<select style="width:90%" name="<?PHp echo $c_nombre?>" id="<?PHp echo $c_nombre?>">
				<option value="-1">Seleccione...</option>
			<?php for ($i=0; $i < count($a_info); $i++) { 
				
				?><option value="<?PHp echo $a_info[$i]['id']?>"><?PHp echo $a_info[$i]['nombre']?></option><?PHp
			}?>
		</select>
		<?PHp

	}

	


?>