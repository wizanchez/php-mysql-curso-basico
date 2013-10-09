<!-- vamos a hacer la tabla de lista -->
<?pHp

#incluyo la conexion a la base de datos.  Include llamo al acrchivo .php
include ('../config/conec.inc.php');
#archivo donde encuentro mis funciones generales
# Este indica toda la presentacion de mi modulo en html
include ('../funciones/fc_decoracion.php');
#----------------------------------------------------

#hacemos la consulta.
$v_query='SELECT id
				,nombre
				,fecha_entrada
				,fecha_actualizacion 
			FROM 
				aux_proveedor
			where cancel=0';
$a_resp=mysql_query($v_query,$conn) or die ('error_sql!!!'.mysql_error());



#imprimo los estilos generales
fc_stylos_generales('Admin_Proveedor');
#--------------------------------------
#inicializo mi ventana principal y sale un fondo azul:
fc_ventana_principal_ini(
						  'Administrador Proveedores -->Listar','70%');
?>

<!--aqui comienza codigo html --> 
<!-- El class="tablesorter" es una funcion donde esta el molde de encabezado con una tabla-->
<!-- <div>hace una division -->

<div align="right">
<a href="adm_proveedores.form.php" > Adicionar Proveedor </a>     
</div>
<table id="tabla_unico_id" class="tablesorter" border=0 cellspacing=1 cellpadding=0>
<!--Colocamos los titulos --> 
<thead>
	<tr>
		<th>opc</th>
		<th>ID</th>	
		<th>Nombre</th>
		<th>Fecha<br>Entrada</th>
		<th>Fecha<br>Actualizacion</th>
    </tr>
  </thead>
<?pHp
	while ($a_resp_2 = mysql_fetch_array($a_resp)){

	?>
	<tr>
	<!-- Empiezo a llenar las filas-->
	
		<td></td> 
		<td> <?php echo $a_resp_2['id'];?></td>
		<td><?php echo $a_resp_2['nombre'];?></td>
		<td><?php echo $a_resp_2['fecha_entrada'];?></td>
		<td><?php echo $a_resp_2['fecha_actualizacion'];?></td>
	</tr>
<?php	
	}

?>
</table>

<script type="text/javascript">
	jQuery("#tabla_unico_id").tablesorter({
											sortlist:[[2,0]]
											,widgets:['zebra']
											});
</script>
<?php

#finalizo mi ventana principal
fc_ventana_principal_fin();

?>