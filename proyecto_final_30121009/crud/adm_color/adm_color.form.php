<?PHp 

	include('../config/conec.inc.php');
	include('funcion_color.fc.php');
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

if($_REQUEST['action']=='edit')
		$a_resp		=gl_get_color($_REQUEST['id'],'id');


	#echo '<pre>';
	#print_r($a_resp);

	?>
	<script type="text/javascript">
	
	function js_asegurar_color()
	{


		var nombre 	=document.getElementById('c_nombre').value;

		if(nombre==""){
			alert('No Puede hacer esta accion, campo en vacio');
			return false;
		}
		var cong 	=confirm('Seguro va adicionar?');

		if(cong){

			return true;
		}else{
			return false;
		}
	}

	function js_prueba()
	{

		alert('tecleo');
	}
	</script>

	<form action="adm_color.save.php">

		<input type="hidden" id="action" name="action" value="<?PHp echo $_REQUEST['action']?>">

	<table width="100%" border="0" cellspacing="0" cellpadding="00" align=center >
	<tr>
	    <th width="30%">Nombre Color:</th>
	    <td width="70%"><input type="text" id="c_nombre" name="c_nombre" value="<?PHp echo $a_resp[0]['nombre_color'];?>"></td>
	</tr>
	<tr>
	    <th width="30%">Nombre Hexadecimal:</th>
	    <td width="70%"><input type="text" id="c_hexa" name="c_hexa" value="<?PHp echo $a_resp[0]['codigo_hex'];?>" onblur="js_prueba()"></td>
	</tr>
	</table> 
	<center>
		<input type="submit" value="Adicionar" onclick="return js_asegurar_color();">
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

