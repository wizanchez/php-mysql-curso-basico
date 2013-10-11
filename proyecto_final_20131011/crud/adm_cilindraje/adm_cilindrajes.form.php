<?php


# archivo donde encuentro mis funciones generales
# este me indica toda la presentacion de mi modulo

include("../funciones/fc_decoracion.php");

#----------------------
# ---------------------------

# imprimo los estilos generales
fc_stylos_generales(adm_cilindraje);

#--------------------------
# inicializo mi ventana principal, la casita

fc_ventana_principal_ini("adm_cilindraje ->Adicionar","70%");

?>

<TABLE>
		<tr>
			<th width="30%">CILINDRAJE</th>
			<td width="70%"><input type="text" id="c_nombre" name="c_nombre" placeholder="cilindraje"></td> 
		</tr>

</TABLE>
<center>
		<input type="submit" value="Actualizar"> 
</center>


<?php


#--------------------------
# finalizo mi ventana principal

fc_ventana_principal_fin();



?>
<script type="text/javascript">

function js_asegurar ()

{
	var nombre =document.getElementaryById("c_nombre").value;

	if (nombre=="") { 
		alert("no se puede hacer esta accion, campo en vacio");return false;
}
var cong =confirm("seguro va a Adicionar?");

if (cong) {

	return true;

}else{
	return false;

}

function js_prueba()

{
	alert("tecleo");
}


</script>

<form action="adm_cilindrajes.save.php">
	<table width="100%" border="0" cellspacing="0" cellpadding="00" align=center>
<tr>
	<th width="30%">CILINDRAJE</th>


</tr>



	</table>




</form>