<<html>
<head>
	<title>Formulario Adicionar</title>
</head>
<body>

<?php
# archivo donde encontramos las funciones generales
# toda la presentacion del modulo ventana
# incluyo la conexion a la B.D.
include ('../config/conec.inc.php');

include('../funciones/fc_decoracion.php');

# invocar funciones, imprimo los estilos generales
fc_stylos_generales('adm_marca.list.php');

#iniciamos la ventana principal

fc_ventana_principal_ini('ADM Marca ->Agregar','70%');
?>

	<form action="adm_marca.save.php">
	<table width ="100%">
		<tr>
			<th width ="30%">Nombre Marca :</th>
			<td width ="90%" ><input type="text" name="c_marca" placeholder="Digite Marca"> </td>

		</tr>
	</table>

<center>
		<input type="submit" value="Guardar Registro">
</center>
</body>
</html>

