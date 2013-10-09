<?phP

	/*incluyo la coneccion a la base de datos*/
	include('../config/conec.inc.php');

	#archvo donde encuentro mis funciones generales
	# este me indica toda la presentacion del mi modulo
	include('../funciones/fc_decoracion.php');


	##------------------------------------
	#	AHORA VAMOS HACER LA CONSULTA A NUESTRA TABLA

		$v_query='SELECT 
						id
						,nombre
						,fecha_entrada
						,fecha_actualizacion
				FROM
						aux_color
				WHERE 
						cancel=0

				';
			$a_resp =mysql_query($v_query,$conn)or die('Error SQL!!! '.mysql_error());
	##------------------------------------


	##------------------------------------
	# imprimo los estuilos general
	fc_stylos_generales('adm color ');



	#-------------------------------------
	#	INICIALIZO MI VENTRANA PRINCIPAL
	fc_ventana_principal_ini('ADM color ->Listar','70%');


?>
<div align="right">
	<a href="adm_color2.form.php" > 
			Adicionar Color
	</a>
</div>

<table id="tabla_unico_id" class="tablesorter" border=0 cellspacing=1 cellpadding=0 >
<thead>
	<tr>
		<th>Opc</th>
		<th>ID</th>
		<th>Nombre</th>
		<th>Fecha<br>Entrada</th>
		<th>Fecha<br>Actualizacion</th>
	</tr>
</thead>
<?PHp 

	while($a_resp_2 	=mysql_fetch_array($a_resp)){

	?>
	<tr>
		<td>.</td>
		<td><?PHp echo $a_resp_2['id'];?></td>
		<td><?PHp echo $a_resp_2['nombre'];?></td>
		<td><?PHp echo $a_resp_2['fecha_entrada'];?></td>
		<td><?PHp echo $a_resp_2['fecha_actualizacion'];?></td>
	</tr>
		<?PHp
	}
?>
</table>
<script type="text/javascript">
	
	jQuery("#tabla_unico_id").tablesorter({

											sortList:[[2,0]],
											widgets:['zebra']
										});
	
</script>
<?PHp






	#-------------------------------------
	#	FINALIZO MI VENTRANA PRINCIPAL
	fc_ventana_principal_fin();






?>