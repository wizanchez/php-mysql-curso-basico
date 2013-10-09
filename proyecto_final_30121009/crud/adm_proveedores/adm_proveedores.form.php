<?php
#archivo donde encuentro mis funciones generales
# Este indica toda la presentacion de mi modulo en html
include ('../funciones/fc_decoracion.php');

#imprimo los estilos generales
fc_stylos_generales('Admin_Proveedor');

#inicializo mi ventana principal y sale un fondo azul:
fc_ventana_principal_ini(
						  'Administrador Proveedores -->Adicionar','70%');
?>

<script type="text/javascript">
	
	function fc_js_validar_campos(){

		var nom= document.getElementById('c_nombre').value;
		
		if (nom==""){
			alert('No puede digitar esta acccion los campos estàn vacios');
			return false;
		}
		var conf = confirm('Seguro que quiere adicionar ???');
		if (conf){
			return true;
			}else {
				return false;
			
		}

}

</script>

<form action="adm_proveedores.save.php">

<table>
		<tr>
			<th witd="30%">Nombre Proveedor</th>
			<td witd="70%"> <input type="text" id="c_nombre" name="c_nombre" placeholder="Nombre Proveedor" ></td>
		</tr>
		<br>	
</table>

<center>
	<input type="submit" value="Actualizar" onclick="return fc_js_validar_campos();">

</center>
<?php


#finalizo mi ventana principal
fc_ventana_principal_fin();

?>