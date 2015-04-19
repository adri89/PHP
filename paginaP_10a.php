<html>
<head>
	<title>12. PRACTICANDO - FROMULARIO (CONTROL SELECT)</title>
</head>
<body>
	<?php
		if ($_REQUEST['ingreso']=="ingreso3") {
			echo "Debe pagar impuestos";
		} else {
			echo "No debe pagar impuestos";
		}
	?>
</body>
</html>