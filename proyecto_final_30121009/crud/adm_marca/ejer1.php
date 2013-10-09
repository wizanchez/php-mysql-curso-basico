<html>
<head>
<title>ALMACEN DE ROPA "EL PROPIO SATA"</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
	<form method="POST">
		<br>
		<p class="text-center">=== ALMACEN DE ROPA "EL PROPIO SATA" ===</p>
		<p class="text-center">============ FORMULARIO DE VENTAS ============</p>
		<br>
		<p class="text-center">Cantidad de unidades vendidas de Zapatos: <input type="text" name="CantidadZapatos"/></p><br> 
		Cantidad de unidades vendidas Ropa para Bebe: <input type="text" name="CantidadBebe"><br> 
		Cantidad de unidades vendidas Ropa para Ni&ntilde;o: <input type="text" name="CantidadNino"><br> 
		Cantidad de unidades vendidas Ropa para Dama: <input type="text" name="CantidadDama"><br> 
		Cantidad de unidades vendidas Ropa para Hombre: <input type="text" name="CantidadHombre"><br> <br>
		<input type="submit" value="Enviar Formulario">
		<form>
	<?php
	if (isset ( $_POST ["CantidadZapatos"] ) && isset ( $_POST ["CantidadBebe"] ) && isset ( $_POST ["CantidadNino"] ) && isset ( $_POST ["CantidadDama"] ) && isset ( $_POST ["CantidadHombre"] )) {
		if (empty ( $_POST ["CantidadZapatos"] ) == false && empty ( $_POST ["CantidadBebe"] ) == false && empty ( $_POST ["CantidadNino"] ) == false && empty ( $_POST ["CantidadDama"] ) == false && empty ( $_POST ["CantidadHombre"] ) == false) {
			$CantidadZapato = $_POST ["CantidadZapatos"];
			$CantidadBebe = $_POST ["CantidadBebe"];
			$CantidadNino = $_POST ["CantidadNino"];
			$CantidadDama = $_POST ["CantidadDama"];
			$CantidadHombre = $_POST ["CantidadHombre"];
			echo "<br><br>Las unidades vendidas son: <br> Zapatos: " . $CantidadZapato . " unidades. <br> Ropa para Bebe: " . $CantidadBebe . " unidades. <br> Ropa para Ni&ntilde;o(a): " . $CantidadNino . " unidades. <br> Ropa para Dama: " . $CantidadDama . " unidades. <br> Ropa para Hombre: " . $CantidadHombre . " unidades. <br> !!!GRACIAS POR SU COMPRA!!!";
		} else {
			echo "<br> Usted no ingreso ningun tipo de dato";
		}
	}
	?>
<script src="http://code.jquery.com/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>

</body>
</html>