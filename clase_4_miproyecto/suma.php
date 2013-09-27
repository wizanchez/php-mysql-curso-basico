<?PHp 

$a=$_REQUEST['c_valor_1'];
$b=$_REQUEST['c_valor_2'];


$v_resultado 	=fc_suma($a,$b);


echo $v_resultado;



function fc_suma($z,$y)
{


	return $z+$y;

}

?>