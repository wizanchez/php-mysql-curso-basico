<?PHp 

	include('../funciones/fc_decoracion.php');

			##-----------------------------------------------------------------------
			#	IMPRIMO LOS ESTILOS GENERALES
			fc_stylos_generales('ADM...->Adicionar');
			##-----------------------------------------------------------------------
	


	##--------------------------------------------------------------------------------
	#	COLOCO A IMPRIMIR MI VENTANA PRINCIPAL
	fc_ventana_principal_ini(
								'Adm .... -> Adicionar'
								,'70%'
							);
	##--------------------------------------------------------------------------------

	?>
	<script type="text/javascript">
	function js_asegurar()
	{
		var cong 	=confirm('Seguro va adicionar?');

		if(cong){

			return true;
		}else{
			return false;
		}
	}

	</script>
	<form action="adm_color.save.php">
	<table width="100%" border="0" cellspacing="0" cellpadding="00" align=center >
	<tr>
	    <th width="30%">Nombre Color:</th>
	    <td width="70%"><input type="text" id="c_nombre" name="c_nombre"></td>
	</tr>
	<tr>
	    <th width="30%">Nombre Hexadecimal:</th>
	    <td width="70%"><input type="text" id="c_hexa" name="c_hexa"></td>
	</tr>
	</table> 
	<center>
		<input type="submit" value="Adicionar" onclick="return js_asegurar();">
	</center>

			<input type="hidden" id="wa" name="wa" value="add">
	</form>	 
	<?PHp

	##--------------------------------------------------------------------------------
	##	FIN DE LA TABLA PRINCIPAL
	fc_ventana_principal_fin();
	##--------------------------------------------------------------------------------



?>
</body>
</html>