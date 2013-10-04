<?phP

	/*incluyo la coneccion a la base de datos*/
	include('../config/conec.inc.php');

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
<table id="tabla_unico_id" class="tablesorter" border=0 cellspacing=0 cellpadding=0 >
<thead>
	<tr>
		<th>Opc</th>
		<th>ID</th>
		<th>Nombre</th>
		<th>Fecha<br>Entrada</th>
		<th>Fecha<br>Actualizacion</th>
	</tr>
</thead>




</table>
<?PHp






	#-------------------------------------
	#	FINALIZO MI VENTRANA PRINCIPAL
	fc_ventana_principal_fin();






?>