<?phP
/*incluyo la conexion a la base de datos*/
include ('../config/conec.inc.php');
/*archivo donde encuentro mis funciones generales*/
/*este me indica toda la presentacion de mimodulo*/
include ('../funciones/fc_decoracion.php');
/*/imprimo los estilos generale*/



/*vamos hacer la consulta a nuestra tabla*/

$v_query='SELECT 
                           id
                           ,nombre
                           ,fecha_entrada
                           ,fecha_actualizacion
FROM aux_modelo


WHERE                                     
                            cancel=0

';
$a_resp =mysql_query($v_query,$conn)or die('Erro SQL!!!!'.mysql_error());









fc_stylos_generales('adm modelo');


/*inicializo mi ventana principal*/
fc_ventana_principal_ini('adm modelo -> listar ','70%');
/*finalizo mi ventana principal*/
?>
<div align="right">
              <a href="adm_modelo.form.php"> 
                 ADICIONAR MODELO</a>
<link rel="stylesheet" href="../css/jq.css" type="text/css" media="print, projection, screen" />
	
	<link rel="stylesheet" href="../css/themes/blue/style.css" type="text/css" media="print, projection, screen" />
	
	<script type="text/javascript" src="../js/jquery-latest.js"></script>
	
	<script type="text/javascript" src="../js/jquery.tablesorter.js"></script>
	
	<script type="text/javascript" src="../js/chili/chili-1.8b.js"></script>
	
	<script type="text/javascript" src="../js/docs.js"></script>
	
	<link rel="stylesheet" href="../css/main.css" type="text/css" media="print, projection, screen" />
</div>

<table id="tabla_unico_id" class="tablesorter" border=0 cellspacing=1 cellpading=0>
<thead>
<tr>
	<th>OPC</th>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>FECHA <br>ENTRADA</th>
		<th>FECHA <br>ACTUALIZACION</th>
</tr>
</thead>	
<?php
while ($a_resp_2 =mysql_fetch_array($a_resp) ){

?>

<tr>
                     <td></td>
                     <td><?phP echo $a_resp_2["id"];?></td>
                     <td><?phP echo $a_resp_2["nombre"];?></td>                
                     <td><?phP echo $a_resp_2["fecha_entrada"];?></td>     
                     <td><?phP echo $a_resp_2["fecha_actualizada"];?></td>                                        
                    
</tr>	
<?php

} 

?>



</table>
<script type="text/javascript">

jQuery("#tabla_unico_id").tablesorter({


                                                 sorlist:[[2,0]]
                                                 ,widgets:['zebra']              

                                                     });
</script>

<?Php
fc_ventana_principal_fin();

?>

