<html>
<head>
<title>BANCO SOCIAL "DEVIL"</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
	<form method="POST">
		<br>
		<p class="text-center">
			<strong>\\\\\\BANCO SOCIAL "DEVIL"//////</strong>
		</p>
		<p class="text-center">!!! Donde sus sue&ntilde;os se pueden hacer
			realidad !!!</p>
		<p class="text-left">
			<strong>SIMULADOR DE CREDITO</strong>
		</p>
		<p class="text-left">
			<strong>Datos Generales:</strong>
		</p>
		<p class="text-left">
			NOMBRE DEL SOLICITANTE: <input type="text" name="NombreCliente">
		</p>
		MONTO DEL PRESTAMO: $ <input type="text" name="ValorCredito"><br>
		NUMERO DE CUOTAS: <input type="text" name="NumeroCuotas"><br> INGRESOS
		MENSUALES: $ <input type="text" name="ValorIngresos"><br> EGRESOS
		MENSUALES: $ <input type="text" name="ValorEgresos"><br> INGRESOS
		ADICIONALES: $ <input type="text" name="ValorIngresosAdicionales"><br>
		INGRESOS VALOR DE SUS BIENES INMUBLES (Casa, Apartamento, Carro, Moto,
		Muebles o Enseres): $ <input type="text" name="ValorInmuebles"><br> <br>
		<input type="submit" value="Calcular Prestamo">
		<form>
	<?php
	if (isset ( $_POST ["NombreCliente"] ) && isset ( $_POST ["ValorCredito"] ) && isset ( $_POST ["NumeroCuotas"] ) && isset ( $_POST ["ValorIngresos"] ) && isset ( $_POST ["ValorEgresos"] ) && isset ( $_POST ["ValorIngresosAdicionales"] ) && isset ( $_POST ["ValorInmuebles"] )) {
		if (empty ( $_POST ["NombreCliente"] ) == false && empty ( $_POST ["ValorCredito"] ) == false && empty ( $_POST ["NumeroCuotas"] ) == false && empty ( $_POST ["ValorIngresos"] ) == false && empty ( $_POST ["ValorEgresos"] ) == false && empty ( $_POST ["ValorIngresosAdicionales"] ) == false && empty ( $_POST ["ValorInmuebles"] ) == false) {
			$NombreCliente = $_POST ["NombreCliente"];
			$ValorCredito = $_POST ["ValorCredito"];
			$NumeroCuotas = $_POST ["NumeroCuotas"];
			$Ingresos = $_POST ["ValorIngresos"];
			$Egresos = $_POST ["ValorEgresos"];
			$IngresosAdicionales = $_POST ["ValorIngresosAdicionales"];
			$ValorInmuebles = $_POST ["ValorInmuebles"];
			$TotalIngresos = ($Ingresos + $IngresosAdicionales) - $Egresos;
			$ValorCuota = ($ValorCredito / $NumeroCuotas);
			define("Porcentaje",0.20);
			if (($TotalIngresos > $ValorCuota) && ($ValorCredito <= ($ValorInmuebles * Porcentaje))) {
				echo "<br><br>Se&ntilde;or " . $NombreCliente . " Su credito de $ " . $ValorCredito . " pesos. Ha sido APROBADO<br>";
				echo "<br><table border = '3'class=\"table table-hover\">
				<tr>
				<th>No. DE CUOTAS</th>
				<th>VALOR CUOTA</th>
				<th>SALDO RESTANTE</th>				
				</tr>";
				for($i = 1; $i <= $NumeroCuotas; $i ++) {
					echo "<tr><td>" . $i . "</td>";
					echo "<td>" . $ValorCuota . "</td>";
					echo "<td>" . ($ValorCredito - ($ValorCuota * $i)) . "</td></tr>";
				}
				echo "</table>";
			    } 
			else {
				echo "<br><br> Su credito no fue aprobado<br>";
			}
		} else {
			echo "<br> Usted no ingreso ningun tipo de dato";
		}
	}
	?>
<script src="http://code.jquery.com/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>

</body>
</html>