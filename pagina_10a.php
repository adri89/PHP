<html>
<head>
	<title>12. FORMULARIO (control select)</title>
</head>
<body>
	<?php
		if ($_REQUEST['operacion']=="suma") {
			$suma=$_REQUEST['valor1']+$_REQUEST['valor2'];
			echo "La sumas es: ".$suma;
		} else {
			if ($_REQUEST['operacion']=="resta") {
				$resta=$_REQUEST['valor1']-$_REQUEST['valor2'];
				echo "La resta es: ".$resta;
			} else {
				if ($_REQUEST['operacion']=="multiplicacion") {
					$multiplicacion=$_REQUEST['valor1']*$_REQUEST['valor2'];
					echo "La multiplicacion es: ".$multiplicacion;
				} else {
					if ($_REQUEST['operacion']=="division") {
						$division=$_REQUEST['valor1']/$_REQUEST['valor2'];
						echo "La division es: ".$division;
					}
				}
				
			}
			
		}
		
	?>
</body>
</html>