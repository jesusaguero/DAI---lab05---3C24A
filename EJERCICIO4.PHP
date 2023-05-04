<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 4</title>
</head>
<body>
    <h1><center>EJERCICIO 4</center></h1>
	<form method="post" action="">
		<label for="precio_cono">Precio del cono:</label>
		<input type="number" name="precio_cono" id="precio_cono" required>
		<br>
		<label for="cantidad_conos">Cantidad de conos:</label>
		<input type="number" name="cantidad_conos" id="cantidad_conos" required>
		<br>
		<button type="submit" name="calcular">Calcular</button>
	</form>
	<?php
	if(isset($_POST['calcular'])) {
		$precio_cono = $_POST['precio_cono'];
		$cantidad_conos = $_POST['cantidad_conos'];
		$importe_compra = $precio_cono * $cantidad_conos;
		$descuento1 = $importe_compra * 0.05;
		$importe_compra_desc1 = $importe_compra - $descuento1;
		$descuento2 = $importe_compra_desc1 * 0.05;
		$importe_total_descuento = $descuento1 + $descuento2;
		$importe_pagar = $importe_compra - $importe_total_descuento;

		echo "<h2>Resultados:</h2>";
		echo "Importe de la compra: S/ ".$importe_compra."<br>";
		echo "Descuento 1: S/ ".$descuento1."<br>";
		echo "Importe después del primer descuento: S/ ".$importe_compra_desc1."<br>";
		echo "Descuento 2: S/ ".$descuento2."<br>";
		echo "Importe total del descuento: S/ ".$importe_total_descuento."<br>";
		echo "Importe a pagar: S/ ".$importe_pagar."<br>";
	}
	?>
</body>
</html>
