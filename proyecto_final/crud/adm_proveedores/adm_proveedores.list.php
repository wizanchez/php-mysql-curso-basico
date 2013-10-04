<!-- vamos a hacer la tabla de lista -->
<?pHp

#incluyo la conexion a la base de datos.  Include llamo al acrchivo .php
include ('../config/conec.inc.php');
#archivo donde encuentro mis funciones generales
# Este indica toda la presentacion de mi modulo en html
include ('../funciones/fc_decoracion.php');
#----------------------------------------------------
#imprimo los estilos generales
fc_stylos_generales('Admin_Proveedor');
#--------------------------------------
#inicializo mi ventana principal y se llamama:
fc_ventana_principal_ini(
						  'Administrador Proveedores -->Listar','70%');
?>
<!--aqui comienza codigo html --> 
<table id="tabla_unico_id" class="tablesorter" border=0 cellspacing=0 cellpadding=0>
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
</table>


<?php

#finalizo mi ventana principal
fc_ventana_principal_fin();


?>