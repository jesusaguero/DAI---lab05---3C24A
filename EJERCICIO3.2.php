<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 3</title>
</head>
<body>
	<h1><center>RESUMEN</center></h1>
	<?php
		$tarifa = $_POST["tarifa"];
		$dias = $_POST["dias"];

		$importe_bruto = $tarifa * $dias;
		$descuento = $importe_bruto * 0.15;
		$importe_neto = $importe_bruto - $descuento;
		$lapiceros = $dias * 3;

		echo "<p>Importe bruto: S/. " . $importe_bruto . "</p>";
		echo "<p>Descuento: S/. " . $descuento . "</p>";
		echo "<p>Importe neto a pagar: S/. " . $importe_neto . "</p>";
		echo "<p>Lapiceros de obsequio: " . $lapiceros . "</p>";
	?>
</body>
</html>
