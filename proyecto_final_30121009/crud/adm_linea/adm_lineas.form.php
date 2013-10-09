<?php

include('../config/conec.inc.php');
include('../funciones/fc_decoracion.php');
#----imprimo los estilos generales

fc_stylos_generales('adm linea');

#---inicializo mi ventana principal

fc_ventana_principal_ini('adm linea  Adicionar','70%');

?>
<script type="text/javascript">
		function js_asegurar_campo()
		{
		var campo_vacio = document.getElementById("v_linea").value;
		if (campo_vacio==""){
							alert('No puede realizar esta accion el campo se encuentra vacio');
							return false;
							}
							var adic 	=confirm('Esta Seguro que Quiere Adicionar Una Linea');
							if(adic){
								return true;
									}else{
										 return false;
										}

		}

</script>
<body>
<form action="adm_linea.save.php">
<center>
<table width="100%" border='0'>
	<tr>
		<th width="30%">LINEA :</th>
		<td width="70%"><input type="text" name="v_linea" id="v_linea" value="" placeholder="NOMBRE LINEA"></td>
	</tr>
	<tr>
		<th width="30%"></th>
		<td width="70%"><input hidden="true" type="text" name="v_linea_modif" id="v_linea_modif" value="<?phP echo $_REQUEST['nombre'];?>" placeholder="NOMBRE LINEA"></td>
	</tr>
	
						
</table>
		<center>
				<input type="submit" value="Actualizar" id="asegurar" name="asegurar" ONCLICK="return js_asegurar_campo()" >
		</center>

</center>
</form>
</body>
<?phP


#finalizo mi ventana principal
fc_ventana_principal_fin();
?>
