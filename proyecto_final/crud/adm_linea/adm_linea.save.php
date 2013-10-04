<?phP 

$v_color=$_REQUEST["c_valor_1"];
$v_hexa=$_REQUEST["c_valor_2"];
$conn=mysql_connect(
					"localhost"/*host*/
					,"root"/*usuario de la base de datos*/
					,"abc.123"/*pasword de la base de datos*/
					)or die ('ERROR DE CONEXION');

mysql_select_db("madiautos_erp",$conn
)or die("BASE DE DATOS NO ENCONTRADA"
);
$v_sql="SELECT color FROM color WHERE color='$v_color'";
$a_resp=mysql_query($v_sql,$conn)or die(mysql_error());
$record =mysql_fetch_array($a_resp)or die(mysql_error());
if($v_color=$record['color']) {
	echo "El Color ya Existe";
}else{
$sql = "INSERT INTO color (color, nombre_hexa,entrada_fecha) VALUES ('$v_color', '$v_hexa', now())";
mysql_query($sql)or die (mysql_error());
}

?>