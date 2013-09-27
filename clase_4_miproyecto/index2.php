<HTML>
	<HEAD>
<!--<META HTTP-EQUIV='Refresh' CONTENT='1; URL=index.php'>
-->
<TITLE>mi primer proyecto</TITLE>
	
<style type="text/css">

.all_td{
	/*cambia el color del text*/
	color:#cccccc;  	
	padding-top:20px;
	font-family: vernada;

	/*cambia el tamaño de la letra*/
	font-size: 30px;
	background-image:url("imagenes/indice.jpg");
	border-radius: 40px;

}

</style>

	</HEAD>

	<BODY>

<!--  inicia mi tabla-->
	<table border="1"  >
		<tr>
				<td bgcolor=red >1</td>
				
				<td style="color:white;background-color:#cccccc"  >2</td>
		</tr>
		<tr>
				<td class="all_td" >3 jhdfjhdjfhj</td>
				<td class="all_td" ><?php echo (2+2)?></td>
		</tr>
		</table>

<?PHp 

	#echo 'luis fernando <br>';



	//print("hola mundo<br>");
	/*dsds*/


$a ='luis ';

$b =2;

$c='2013-09-24';

$d=date('Y-m-d H:i:s');

echo $a.'<br>'.$d;
echo $a.'<br>'.$d;

$a 	=2;
$b =3;

$c=$a+$b;

echo '<br>'.$c;
echo '<hr >';

$arr[0]	='x';
$arr[1]	='y';
$arr[2]	='1';
$arr['item']	='abc';


echo $arr['item'];

/*
	SENTENCIAS PHP
*/

echo '<h1>SENTENCIAS PHP</h1><br><br><br><br>';


$a=1;


if($a==0){

	echo 'la condicion se cumple';
}else{

	echo 'no se cumple la condicion';
}



if(!$bf){

	echo '<BR>LA VARIABLE ENTRA VACIA';
}else{

	echo 'LA VARIABLE ENTRA LLENA';
}

echo '<br>';

$x=1;
$z=2;
$g=3;

if($x>$z){

	echo 'x es mayo a z';


}elseif($x>$g){

	echo 'x es mayor a g';
}else{

	echo 'x es menor que g y z '.$x;
}

echo '<br>';

/* 
	(CONDICION)?
				'VERDADERO':'FALSO';

*/
echo ($x>$z)?
			'x es mayor a z':(($x>$g)?
									'x es mayor a g':'x es menor que g y z '.$x);


echo '<br>';
$v_carro ='ford';



switch ($v_carro) {
	case 'mazda':
		 echo 'es un carro mazda';
		break;
	case 'chevrolet':
		echo 'es un chevrolet ';
		break;
	case 'ford':
		echo 'es un ford ';
		break;
	default:
		
		echo 'la variable no es 17 ni 19';
		break;
}


include('funciones/fc_suma.php');


	$v_respuesta =fc_suma(12,8);

	echo $v_respuesta;

?>


	</BODY>
</HTML>
 