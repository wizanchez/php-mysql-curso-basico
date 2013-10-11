<?phP

include('../config/conec.inc.php');
include('../funciones/fc_decoracion.php');

$v_query='SELECT 
				id
				,nombre
				,fecha_entrada
				,fecha_actualizacion
		FROM 

				aux_linea
		WHERE 
				cancel=0
		';
$a_resp=mysql_query($v_query,$conn);

#----imprimo los estilos generales

fc_stylos_generales('adm linea');

#---inicializo mi ventana principal

fc_ventana_principal_ini('adm linea  Listar','70%');

?>
<div align="right">
	 <a href="adm_lineas.form.php">Adicionar Linea</a>
</div>
<table id="tabla_unico_id" class="tablesorter" border="0" cellspacing="1" cellpading="0">
<thead>
	<tr>
		<th>Opcion</th>
		<th>ID</th>
		<th>Linea</th>
		<th>Fecha<br>Entrada</th>
		<th>Fecha<br>Actualizacion</th>

	</tr>
</thead>
<?phP
		while ( $a_resp_2=mysql_fetch_array($a_resp)) {
?>
		<tr>
			<td><a href="adm_lineas.form.php?nombre=<?phP echo $a_resp_2['id']?>"><img src="../images/ico/edit.png" width="22" height="22"></a><img src="../images/ico/delete.png" width="22" height="22"></td>
			<td><?phP  echo $a_resp_2['id'];?></td>
			<td><?phP  echo $a_resp_2['nombre'];?></td>
			<td><?phP  echo $a_resp_2['fecha_entrada'];?></td>
			<td><?phP  echo $a_resp_2['fecha_actualizacion'];?></td>
		</tr>
<?php

}
?>
</table>
<script type="text/javascript">
jQuery("#tabla_unico_id").tablesorter({

										sortList:[[2,0]]
										,widgets:['zebra']
									});

</script>
<?php

#---finalizo mi ventana principal

fc_ventana_principal_fin();

?>
