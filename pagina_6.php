<html>
<head>
	<title>8. Estructura repetitivas (for - while - do/while)</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Estructuras repetitivas (for - whilw - do/while)</h2>
	<?php
		for ($f=0; $f<=100 ; $f++) { 
			echo $f;
			echo "<br>";
		}
		echo "<br><br>";
	?>

	<?php
		$valor=rand(1,100);
		$inicio=1;
		while ($inicio<=$valor) {
			echo $inicio;
			echo "<br>";
			$inicio=$inicio+1;
		}
		echo "<br><br>";
	?>

	<?php
		//Mostrar los números de los días del 1 a la fecha actual.
		$dia=date('d');
		$inicio=1;
		while ($inicio<=$dia) {
			echo $inicio."<br>";
			$inicio++;
		}
	?>
</body>
</html>