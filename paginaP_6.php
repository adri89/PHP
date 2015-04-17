<html>
<head>
	<title>8. PRACTICANDO - (FOR - WHILE - DO/WHILE)</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		echo "Tabla del 2 con el for";
		echo "<br>";
		for ($f=0; $f<=10 ; $f++) { 
			$valor=2;
			echo $valor." * ".$f." = ".$valor*$f;
			echo "<br>";
		}
		echo "<br><br>";
	?>

	<?php
		echo "Tabla del 2 con el while";
		echo "<br>";
		$v2=0;
		while ($v2<=10) {
			$v1=2;
			echo $v1." * ".$v2." = ".$v1*$v2;
			echo "<br>";
			$v2++;
		}
		echo "<br><br>";
	?>

	<?php
		echo "Tabla del 2 con el do/while";
		echo "<br>";
		$valor2=0;
		do {
			$valor1=2;
			echo $valor1." * ".$valor2." = ".$valor1*$valor2;
			echo "<br>";
			$valor2++;
		} while ($valor2<=10);
	?>
</body>
</html>