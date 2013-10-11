<?php
# incluyo la conexion a la B.D.
include ('../config/conec.inc.php');
# llamamos la carpeta donde tenermos guardado el archivo con las funciones
Include ('funcion_marca.fc.php');
# llamamos al archivo en el 
#que encontramos las funciones generales
# indica toda la presentacion de mi modulo
include('../funciones/fc_decoracion.php');

# consulta a nuestra tabla 

/*$v_query='SELECT 
				id,
				nombre,
				fecha_entrada,
				fecha_actualizacion
		FROM

				aux_marca';
		

$a_resp= mysql_query($v_query,$conn)or die("No se pudo conectar a la B.D.".mysql_error());
*/

$a_resp =gl_get_marca('','');


# invocar funciones, imprimo los estilos generales
fc_stylos_generales('adm_marca.list.php');

#iniciamos la ventana principal

fc_ventana_principal_ini('ADM Marca ->Listar','70%');

?>

<form action="adm_marca.save.php">
<div align ='right'>
	<a href="adm_marca.form.php?action=adicionar" class="btn btn-primary">
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

<!--si el numero de registros es igual a 0, es porque en la base de datos 
no hay nada-->
<?php

	if (count($a_resp)==0){
		
		?>
		<tr>
			<td align=center colspan=7> No existen registros</td>
		</tr> <?php
	exit();
	
	}

#while ($a_resp2=mysql_fetch_array($a_resp)){
for ($i=0; $i <count($a_resp); $i++) { 
?>

<tr>	
	<td Align=center> 
	<img Width="22" src="../images/ico/delete.png" height="22">
	<a href="adm_marca.form.php? Id = <?php echo $a_resp2 ['id']?> $ action = edit"></a>
	<img Title = "Click para editar" src"../images/ico/edit.png" width="22" height="22">
</a>
</td>


}
?>		
<tr>
	<td><?php echo $a_resp [$i]['id'];?></td>	
	<td><?php echo $a_resp ['nombre_marca'];?></td>	
	<td><?php echo $a_resp ['fecha_entrada'];?></td>	
	<td><?php echo $a_resp ['fecha_actualizacion'];?></td>
	<td>
		<div style= "border-redius: px; background-color:?" <?php echo $a_resp [$i]['nombre_marca'];?> </div>		
	</td>	
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


