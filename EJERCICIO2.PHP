<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 2</title>
</head>
<body>
	<h1><center>EJERCICIO 2</center></h1>
	<form method="post">
		<label for="precio_actual">Precio Actual de la Gaseosa de 3 Litros:</label>
		<input type="text" name="precio_actual" required><br>

		<label for="cantidad">Cantidad de Gaseosas Adquiridas:</label>
		<input type="text" name="cantidad" required><br>

		<input type="submit" value="Calcular Compra"><br>
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$precio_actual = $_POST["precio_actual"];
		$cantidad = $_POST["cantidad"];

		// Nuevo precio de la gaseosa
		$nuevo_precio = $precio_actual * 0.95; 

		// Importe de la compra
		$importe = $nuevo_precio * $cantidad;

		// Importe del descuento
		$descuento = $importe * 0.07; 

		// Importe a pagar
		$importe_a_pagar = $importe - $descuento;

		// Obsequio
		$obsequio = $cantidad * 2; 

		
		echo "<h2>Resultados</h2>";
		echo "Nuevo precio de la gaseosa de 3 litros: S/. " . $nuevo_precio . "<br>";
		echo "Importe de la compra: S/. " . $importe . "<br>";
		echo "Importe del descuento: S/. " . $descuento . "<br>";
		echo "Importe a pagar: S/. " . $importe_a_pagar . "<br>";
		echo "Obsequio: " . $obsequio . " caramelos";
	}
	?>
</body>
</html>
