<?phP
/*incluyo la conexion a la base de datos*/
include ('../config/conec.inc.php');
/*archivo donde encuentro mis funciones generales*/
/*este me indica toda la presentacion de mimodulo*/
include ('../funciones/fc_decoracion.php');
/*/imprimo los estilos generale*/


fc_stylos_generales('adm modelo');


/*inicializo mi ventana principal*/
fc_ventana_principal_ini('adm modelo -> listar ','70%');
/*finalizo mi ventana principal*/
?>
<table id="tabla_unico_id" class="tablesorter" border=0 cellspacing=0 cellpading=0>
<thead>
<tr>
	<th>OPC</th>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>FECHA <br>ENTRADA</th>
		<th>FECHA <br>ACTUALIZACION</th>
</tr>
</thead>	
</table>

<?Php
fc_ventana_principal_fin();

?>
