
<?php
/*este me indica toda la presentacion de mimodulo*/
include ('../funciones/fc_decoracion.php');
/*/imprimo los estilos generale*/





fc_stylos_generales('adm modelo');


/*inicializo mi ventana principal*/
fc_ventana_principal_ini('adm modelo -> adicionar ','70%');
/*finalizo mi ventana principal*/

?>
<form action="adm_modelo.save.php">

<TABLE width="100%">

	<tr>
             <th width="30%"> MODELO:</th>            
             <td width="70%"><input type= "text" id="c_nombre" name="c_nombre" placeholder="modelo"> </td>      
	</tr>


</TABLE>

<center>

              <input type="submit" value="actualizar">
</center>

<?php


fc_ventana_principal_fin();

?>
