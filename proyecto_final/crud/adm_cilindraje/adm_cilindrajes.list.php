<?php
/* INCLUYO LA CONECCION A LA BASE DE DATOS */

include("../config/conec.inc.php");

# archivo donde encuentro mis funciones generales
# este me indica toda la presentacion de mi modulo

include("../funciones/fc_decoracion.php");

#----------------------
# imprimo los estilos generales
fc_stylos_generales(adm_cilindrajes);

#--------------------------
# inicializo mi ventana principal

fc_ventana_principal_ini("adm_cilindrajes ->Listar","70%");

?>

<table id="tabla_unico_id" class="tablesorter" border=0 cellspacing=0 cellpading=0 >
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


<?php

#--------------------------
# finalizo mi ventana principal

fc_ventana_principal_fin();


?> 