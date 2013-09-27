<?PHp


$a_arreglo[0] 	='luis ';
$a_arreglo[1] 	='fernando ';
$a_arreglo[2] 	='sanchez ';
$a_arreglo[3] 	='garcia ';

echo '<pre>';
print_r($a_arreglo);

$v_total_arreglo =count($a_arreglo);

for ($i=0; $i < $v_total_arreglo; $i++) { 
	
	echo $a_arreglo[$i].' ';
}

echo '** arreglos de 2 posiciones**';

	$a_arreglo_2 = fc_obtener_nombre();



echo '<br>';
	for ($i=0; $i < count($a_arreglo_2); $i++) {


	 	echo $a_arreglo_2[$i]['nombre'].' '.$a_arreglo_2[$i]['apellido'];
		echo '<br>';
	}






function fc_obtener_nombre()
{

$a_arreglo_5[0]['nombre']		='camilo';
$a_arreglo_5[0]['apellido']		='ruiz';

$a_arreglo_5[1]['nombre']		='ramiro';
$a_arreglo_5[1]['apellido']		='menezes';

$a_arreglo_5[2]['nombre']		='luis';
$a_arreglo_5[2]['apellido']		='ramirez';


	return $a_arreglo_5;
}
?>