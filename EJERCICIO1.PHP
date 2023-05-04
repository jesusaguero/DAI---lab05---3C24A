<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 1 </title>
</head>
<body>
	<h1><center>EJERCICIO 1</center></h1>
	<form method="post">
		<label for="total_vendido">Importe Total Vendido del Mes:</label>
		<input type="text" name="total_vendido" required><br>

		<label for="hijos_escolares">Cantidad de Hijos en Edad Escolar:</label>
		<input type="text" name="hijos_escolares" required><br>

		<input type="submit" value="Calcular Sueldo"><br>
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$total_vendido = $_POST["total_vendido"];
		$hijos_escolares = $_POST["hijos_escolares"];

		// Bonificación
		$bonificacion = $hijos_escolares * 50; 

		// Comisión
		$comision = $total_vendido * 0.075; 

		// Sueldo bruto
		$sueldo_basico = 600;
		$sueldo_bruto = $sueldo_basico + $comision + $bonificacion; 

		// Descuento
		$descuento = $sueldo_bruto * 0.11; 

		// Sueldo neto
		$sueldo_neto = $sueldo_bruto - $descuento;

		// Mostrar los resultados
		echo "<h2>Resultados</h2>";
		echo "Bonificación: S/. " . $bonificacion . "<br>";
		echo "Comisión: S/. " . $comision . "<br>";
		echo "Sueldo bruto: S/. " . $sueldo_bruto . "<br>";
		echo "Descuento: S/. " . $descuento . "<br>";
		echo "Sueldo neto: S/. " . $sueldo_neto;
	}
	?>
</body>
</html>
