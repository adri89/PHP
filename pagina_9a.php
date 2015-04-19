<html>
<head>
	<title>11. FORMULARIO (cotrol checkbox)</title>
</head>
<body>
	<?php
		if (isset($_REQUEST['check1'])) {
			$suma=$_REQUEST['valor1']+$_REQUEST['valor2'];
			echo "La suma es: ".$suma;
			echo "<br>";
		}
		if (isset($_REQUEST['check2'])) {
			$resta=$_REQUEST['valor1']-$_REQUEST['valor2'];
			echo "La resta es: ".$resta;
			echo "<br>";
		}
		if (isset($_REQUEST['check3'])) {
			$mutiplicacion=$_REQUEST['valor1']*$_REQUEST['valor2'];
			echo "La mutiplicacion es: ".$mutiplicacion;
			echo "<br>";
		}
		if (isset($_REQUEST['check4'])) {
			$division=$_REQUEST['valor1']/$_REQUEST['valor2'];
			echo "La division es: ".$division;
		}
	?>
</body>
</html>