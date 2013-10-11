<?Php

$conexion = mysql_connect("localhost",

/*host ip, */         
/*ususario de la base de datos*/  "root"
/*clave de la base de datos*/ ,"abc.123"


	)or die("error de coneccion");



mysql_select_db(
	"madiautos_erp",
$conexion
	)or die ("base de datos no encuentrada");"<br>";
 
$v_sql="SELECT id,nombre FROM color";

$a_resp =mysql_query($v_sql,$conexion)
 or die (mysql_error());
"<br>";
?>
<table border=1>
	<tr>
	<th>ID</th>
	<th>nombre</th>
</tr>


<?Php

/*echo $v_total_registro = mysql_num_rows($a_resp);/*/
while ($record  = mysql_fetch_array($a_resp)) {
?><tr>
<th> <?php echo $record ["id"];?> </th>
<th> <?php echo $record ["nombre"];?> </th>

</tr><?php



}
?></table><?php

echo "hola mundo";

?>