<html>
<head>
	<title>7. Estructura condicional (if)</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Estructura condicional (if)</h2>

	<?php
	/*OPERADORES
	==	Igual
	!=	Distinto
	>	Mayor
	>=	Mayor o igual
	<	Menor
	<=	Menor o igual
	*/
		$valor=rand(1,10);
		echo "El valor sorteado es: $valor<br>";
		if ($valor<=5) {
			echo "Es menor o igual a 5";
		} else {
			echo "Es mayor a 5";
		}
		echo "<br><br>";
	?>

	<?php
		$valor=rand(1,100);
		echo "El valor sorteado es: $valor<br>";
		if ($valor<10) {
			echo "Tiene 1 digitos";
		} else {
			if ($valor<100) {
				echo "Tiene 2 digito";
			} else {
				echo "Tiene 3 digitos";
			}
			
		}
		echo "<br><br>";
	?>

	<?php
		$valor=rand(1,200);
		echo "El valor sorteado es: $valor<br>";
		if ($valor<=9) {
			echo "Tiene 1 digito";
		}
		elseif ($valor<100) {
		 	echo "Tiene 2 digitos";
		 } 
		else {
			echo "Tiene 3 digitos";
		}
		
	?>
</body>
</html>