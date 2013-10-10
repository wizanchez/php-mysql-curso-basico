<?php
/* INCLUYO LA CONECCION A LA BASE DE DATOS */

include("../config/conec.inc.php");

# archivo donde encuentro mis funciones generales
# este me indica toda la presentacion de mi modulo

include("../funciones/fc_decoracion.php");

#----------------------

# AHORA VAMOS A HACER LA CONSULTA A NUESTRA TABLA

$v_query="SELECT id,nombre,fecha_entrada,fecha_actualizacion FROM aux_cilindraje where cancel=0";

$a_resp=mysql_query($v_query,$conn) or die("error SQL!!!".mysql_error());

# ---------------------------

# imprimo los estilos generales
fc_stylos_generales(adm_cilindraje);

#--------------------------
# inicializo mi ventana principal

fc_ventana_principal_ini("adm_cilindraje ->Listar","70%");

?>



<div align="right">
	<a href="adm_cilindrajes.form.php">Adicionar Cilindraje</a>
</div>

<table id="tabla_unico_id" class="tablesorter" border=0 cellspacing=1 cellpading=0 >
<thead>
	<tr>
		<th>Opc</th>
		<th>ID</th>
		<th>Nombre</th>
		<th>Fecha<br>Entrada</th>
		<th>Fecha<br>Actualizacion</th>
	</tr>	
</thead>

<?php

while ($a_resp_2=mysql_fetch_array($a_resp)) {
	# code...
	?>
	<tr>
		<td></td>
		<td><?php echo $a_resp_2["id"];?></td>
		<td><?php echo $a_resp_2["nombre"];?></td>
		<td><?php echo $a_resp_2["fecha_entrada"];?></td>
		<td><?php echo $a_resp_2["fecha_actualizacion"];?></td>

	</tr>

<?php

}

?>



</table>

<script type="text/javascript">

jQuery("#tabla_unico_id").tablesorter({sortList:[[2,0]],widgets:["zebra"]});

</script>

<?php

#--------------------------
# finalizo mi ventana principal

fc_ventana_principal_fin();


?> 