<?php
# incluyo la conexion a la B.D.
include ('../config/conec.inc.php');

# llamamos al archivo en el 
#que encontramos las funciones generales
# indica toda la presentacion de mi modulo

include('../funciones/fc_decoracion.php');

# invocar funciones, imprimo los estilos generales
fc_stylos_generales('adm_marca.list.php');

#iniciamos la ventana principal

fc_ventana_principal_ini('ADM Marca ->Listar','70%');
?>

<table id="tabla_unico_id" class="tablesorter" border=0 cellspacing=0 cellpadding=0>

<thead>
	<tr>
		<th>Opc</th>
		<th>Id</th>
		<th>Nombre</th>
		<th>Fecha<br>Entrada</th>
		<th>Fecha<br>Actualización</th>
	</tr>

</thead>
</table>	


<?php
# finalizo mi ventana principal
fc_ventana_principal_fin();

?>


