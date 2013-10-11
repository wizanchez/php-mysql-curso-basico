<!-- Ingreso de Proveedor -->.
<?pHP
include ('../funciones/fc_decoracion.php');
include ('../config/conec.inc.php');
include('funcion_proveedor.fc.php');

#imprimo los estilos generales
fc_stylos_generales('Salvar Proveedor');

#inicializo mi ventana principal y sale un fondo azul:
fc_ventana_principal_ini(
						  'Administrador Proveedores -->Guardar','70%');

switch ($_REQUEST['action']) {
##--------------------------------------------------------------------------------
# AHORA VOY ADICIONAR EL COLOR
case 'adicionar':
$a_resp=gl_get_proveedor($_REQUEST['c_nombre'],'nombre');

if (count($a_resp)==0){
gl_insert_proveedor($_REQUEST['c_nombre']);

echo '<CENTER>ADICIONADO SATISFACTORIAMENTE</CENTER>';
}ELSE{
echo '<CENTER>ESTE COLOR YA EXISTE</CENTER>';

}
break;
##--------------------------------------------------------------------------------
# AHORA VOY ELIMINAR EL COLOR
case 'del':

echo '<CENTER>ELIMINADO SATISFACTORIAMENTE</CENTER>';
break;
##--------------------------------------------------------------------------------
# AHORA VOY EDITAR EL COLOR
case 'edit':

echo '<CENTER>EDITADO SATISFACTORIAMENTE</CENTER>';
break;

default:
# code...
break;
}

?>
<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=.">

