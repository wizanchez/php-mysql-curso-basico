<<html>
<head>
	<title>Guardar Registro</title>

</head>
<body>

	<?php
# archivo donde encontramos las funciones generales
# toda la presentacion del modulo ventana
# incluyo la conexion a la B.D.
include ('../config/conec.inc.php');

include('../funciones/fc_decoracion.php');

$v_guardar=$_REQUEST['c_marca'];
# invocar funciones, imprimo los estilos generales
fc_stylos_generales('adm_marca.list.php');

#iniciamos la ventana principal


fc_ventana_principal_ini('ADM Marca ->Actualizar Registro','70%');
?>
<?php 

$i_sql= "SELECT nombre FROM aux_marca WHERE nombre='$v_guardar'";
$a_resp=mysql_query($i_sql,$conn) or die("No se pudo conectar a la B.D.".mysql_error());
$record=mysql_fetch_row($a_resp);
        if($record==0){

            $sql = "INSERT INTO aux_marca(
                                        nombre
                                        ,fecha_entrada
                                        )
                     VALUES (
                             '$v_guardar'
                             ,now()
                             )";
                $resul=mysql_query($sql
                                ,$conn
                                );
                echo $v_guardar."<br>El registo se ha adicionado correctamente!!!";
            }else{
                echo"<br>El registro ya existe";
            }
?>


</body>
</html>