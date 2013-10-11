<?PHp 

	#archvo donde encuentro mis funciones generales
	# este me indica toda la presentacion del mi modulo
	include('../funciones/fc_decoracion.php');


	##------------------------------------
	# imprimo los estuilos general
	fc_stylos_generales('adm color ');



	#-------------------------------------
	#	INICIALIZO MI VENTRANA PRINCIPAL
	fc_ventana_principal_ini('ADM color ->Listar','70%');

	?>
		<form action="adm_color2.save.php">
		<TABLE width="100%">
		
			<tr>
				<th width="30%">NOMBRE COLOR :</th>
				<td width="70%" ><input type="text" id="c_nombre" name="c_nombre" placeholder="nombre color"> </td>
			</tr>	
			<tr>
				<th width="30%">NOMBRE HEXADECIMAL :</th>
				<td width="70%" ><input type="text" id="c_nombre_hex" name="c_nombre_hex" placeholder="Hexadecimal"> </td>
			</tr>	

		</TABLE>

<center>
		<input type="submit" value="Actualizar">
</center>


	<?PHP


	#-------------------------------------
	#	FINALIZO MI VENTRANA PRINCIPAL
	fc_ventana_principal_fin();


?>
