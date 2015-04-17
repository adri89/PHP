<html>
<head>
	<title>6. Variables de tipo string</title>
</head>
<body>
	<h2>Variables de tipo string</h2>

	<?php
		$cadena1="Hola";
		$cadena2="Mundo";
		echo $cadena1." ".$cadena2;
		echo "<br>";

		echo $cadena1;
		echo " ";
		echo $cadena2;
		echo "<br><br>";
	?>

	<?php
		$dia=10;
		$fecha="Hoy es $dia";
		echo $fecha;
		echo "<br><br>";
	?>

	<?php
		$cadena1="Adrian";
		$cadena2="Mariela";
		$cadena3="Leny";
		$todo=$cadena1.$cadena2.$cadena3;
		echo $todo;
		$edad1=20;
		echo "<br>";
		echo $cadena3." tiene $edad1 años de edad";
	?>
</body>
</html>