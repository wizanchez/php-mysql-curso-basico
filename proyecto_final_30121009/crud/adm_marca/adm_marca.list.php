<?php
# incluyo la conexion a la B.D.
include ('../config/conec.inc.php');

# llamamos al archivo en el 
#que encontramos las funciones generales
# indica toda la presentacion de mi modulo

include('../funciones/fc_decoracion.php');

# consulta a nuestra tabla 

$v_query='SELECT 
				id,
				nombre,
				fecha_entrada,
				fecha_actualizacion
		FROM

				aux_marca';
		

$a_resp= mysql_query($v_query,$conn)or die("No se pudo conectar a la B.D.".mysql_error());


# invocar funciones, imprimo los estilos generales
fc_stylos_generales('adm_marca.list.php');

#iniciamos la ventana principal

fc_ventana_principal_ini('ADM Marca ->Listar','70%');
?>

<div align ='right'>
	<a href="adm_marca.form.php">
		Adicionar Marca
	</a>
</div>
<table id="tabla_unico_id" class="tablesorter" border=0 cellspacing=0 cellpadding=1>

<thead>
	<tr>
		<th>Opc</th>
		<th>Id</th>
		<th>Nombre</th>
		<th>Fecha<br>Entrada</th>
		<th>Fecha<br>Actualización</th>
	</tr>

</thead>
<?php
	while ($a_resp2=mysql_fetch_array($a_resp)){

?>		
<tr>
	<td>.</td>	
	<td><?php echo $a_resp2['id'];?></td>	
	<td><?php echo $a_resp2['nombre'];?></td>	
	<td><?php echo $a_resp2['fecha_entrada'];?></td>	
	<td><?php echo $a_resp2['fecha_actualizacion'];?></td>	
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
# finalizo mi ventana principal
fc_ventana_principal_fin();

?>


