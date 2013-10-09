<html>
<head>
	<title>ADICIONAR MODELO</title>
	
	<link rel="stylesheet" href="../css/jq.css" type="text/css" media="print, projection, screen" />
	
	<link rel="stylesheet" href="../css/themes/blue/style.css" type="text/css" media="print, projection, screen" />
	
	<script type="text/javascript" src="../js/jquery-latest.js"></script>
	
	<script type="text/javascript" src="../js/jquery.tablesorter.js"></script>
	
	<script type="text/javascript" src="../js/chili/chili-1.8b.js"></script>
	
	<script type="text/javascript" src="../js/docs.js"></script>
	
	<link rel="stylesheet" href="../css/main.css" type="text/css" media="print, projection, screen" />

</head>

<body><table width="50%" cellspacing="0" cellpadding="00" border="10%"  align=center >
		<tr>
		    <td style="background-modelo:#FFF;" ><a boder=0 href="."><img style="cursor:pointer;" title="Ir a la Pagina Principal" width="58" height="58" src="../images/ico/home_2.png"></a><span style="padding:30px;"><h1 style="padding-left:30px;">ADICIONAR MODELO</h1>
		   	<hr width="50%" align=center >	<script type="text/javascript">
	function js_asegurar()
	{
		var cong 	=confirm(' ADICIONAR ?');

		if(cong){

			return true;
		}else{
			return false;
		}
	}

	</script>
	<form action="adm_modelo.save.php">
	<table width="100%" border="0" cellspacing="0" cellpadding="00" align=center >
	<tr>
	    <th width="50%">MODELO:</th>
	    <td width="50%"><input type="text" id="c_nombre" name="c_nombre"></td>
	</tr>
	
	</table> 
	<center>
		<input type="submit" value="Adicionar" onclick="return js_asegurar();">
	</center>

	<input type="hidden" id="wa" name="wa" value="add">
	</form>	 
	</span>
</td>
		</tr>
		</table>
	</body>
</html>

<?php

$a=$_REQUEST["c_valor_1"];
$b=$_REQUEST["c_valor_2"];

echo $a.$b;

include ('../config/conec.inc.php');

 
$v_sql=mysql_query("SELECT nombre FROM aux_modelo WHERE nombre = ' $a ' ",$conn)or die("error:".mysql_error()); 




echo "<br>";
$a_total=mysql_num_rows($v_sql);

if( $a_total >0 ){

	echo "el modelo"." ".$a." "."ya existe";
}
else { $fecha=date('Y-M-D');
$V_sqlin= "INSERT INTO aux_modelo (nombre,now()) values ('20','$a','$b','$fecha')";
mysql_query($V_sqlin,$conn)or die (mysql_error());


echo "<br>";
echo "registro exitoso";

}


?>