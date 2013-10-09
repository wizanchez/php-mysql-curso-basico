<!-- Ingreso de Proveedor -->.
<?pHP
include ('../funciones/fc_decoracion.php');

#imprimo los estilos generales
fc_stylos_generales('Salvar Proveedor');

#inicializo mi ventana principal y sale un fondo azul:
fc_ventana_principal_ini(
						  'Administrador Proveedores -->Guardar','70%');
?>

<html>
<head>
        <style type="text/css">
body {
              color: purple;
              background-color: #d8da3d }
        </style>
</head>
<body>
<?php
$a=$_REQUEST['c_nombre'];

include ('../config/conec.inc.php');

$registro=mysql_query("SELECT * FROM aux_proveedor where nombre='$a' 
                       ",$conn) or
  die("Error:".mysql_error());
  
  $totreg= mysql_num_rows($registro);

if ($totreg>0) 
  {
          echo 'El Proveedor'.' '.$record[nombre].' '. 'Ya existe o esta en blanco' ;
          
  }
else
      {
        $fecha=date('Y -m - d');
		$v_sqlin ="INSERT INTO aux_proveedor (nombre,fecha_entrada) VALUES ('$a','$fecha')";
		#mysql_insert_id($v_sql); or die (mysql_error());
		mysql_query($v_sqlin,$conn) or die (mysql_error());
		#cuantos registros trae el query
		echo '<br>';
		#echo 'la tabla color'.' '.$v_total_registro =mysql_num_rows($a_resp).'registros';
		echo 'se ingresaron los registros correctamente';
       }
?>
 <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=adm_proveedores.list.php"> 
</body>
</html>