<?phP

include('../config/conec.inc.php');
include('../funciones/fc_decoracion.php');

#----imprimo los estilos generales

fc_stylos_generales('adm linea');

#---inicializo mi ventana principal

fc_ventana_principal_ini('adm linea ->Listar','70%');

?>
<table id="tabla_unico_id" class="tablesorter" border="0" cellspacing="0" cellpading="0">
<thead>
	<tr>
		<th>Opcion</th>
		<th>ID</th>
		<th>Linea</th>
		<th>Fecha<br>Entrada</th>
		<th>Fecha<br>Actualizacion</th>

	</tr>
</thead>

</table>
<?php

#---finalizo mi ventana principal

fc_ventana_principal_fin();

?>
