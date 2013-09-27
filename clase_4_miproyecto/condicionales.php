<?php 

/*

		COMO PODEMOS COMPARAR EN PHP
	
 */

##----------------------------------------------------------------------------------------------------
# CREO UNA VARIABLE Y LE ASIGNO UN NUMERO, PARA ESTE CASO 1
$a=1;

# PREGUNTO CON LA CONDICIONAL {if}, 
# SI ESOS DOS VALORES SON IGUALES
#  TAMBIEN PUEDO COMPRAR:
#  		<=		MENOR O IGUAL
#  		>=		MAYOR O IGUAL
#  		==		SI SON IGUALES
#  		<>		SI SON DISTINTOS
#  		!=		SI SON DISTINTOS, OTRA FORMA
#  		<		SI ES MENOR
#  		>		SI ES MAYOR
if($a==0){

	echo 'la condicion se cumple';

}else{ /* SE ESCRILE {else}, SI NO SE LLEGA A CUMPLIR*/

	echo 'no se cumple la condicion';
}
##----------------------------------------------------------------------------------------------------





##----------------------------------------------------------------------------------------------------
# PARA SABER UNICAMENTE SI LA VARIABLE VIENE LLENA O CON CONTENIDO
# SIMPLEMENTE SE ESCRIBE LA VARIABLE COMO EN EL SIGUIENTE EJEMPLO:
if($bf){

	echo '<BR>LA VARIABLE ENTRA VACIA';
}else{

	echo 'LA VARIABLE ENTRA LLENA';
}
##----------------------------------------------------------------------------------------------------





##----------------------------------------------------------------------------------------------------
# PARA SABER UNICAMENTE SI LA VARIABLE VIENE VACIA
# SIMPLEMENTE SE ESCRIBE LA VARIABLE COMO EN EL SIGUIENTE EJEMPLO:
if(!$bf){

	echo '<BR>LA VARIABLE ENTRA VACIA';
}else{

	echo 'LA VARIABLE ENTRA LLENA';
}
##----------------------------------------------------------------------------------------------------


##----------------------------------------------------------------------------------------------------
# PARA HACER UNA CONDICIONAL DE UNA SOLA INSTRUCCION 
# SE HACE LAS CONDICIONALES TERNARIAS

	echo ($x>$z)?
			'x es mayor a z':'X ES MENOR A Z';

##----------------------------------------------------------------------------------------------------


##----------------------------------------------------------------------------------------------------
#	CONDICIONALES CON UN SWITCH
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
##----------------------------------------------------------------------------------------------------


?>