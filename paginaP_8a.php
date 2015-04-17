<html>
<head>
	<title>10. PRACTICANDO - FORMULARIO (CONTROL RADIO)</title>
</head>
<body>
	<?php
		echo $_REQUEST['nombre'];
		echo "<br>";
		if ($_REQUEST['radio2']=="opcion1") {
			echo "Ustede no tiene estudios";
		}
		if ($_REQUEST['radio2']=="opcion2") {
			echo "Usted tiene estudios primarios";
		}
		if ($_REQUEST['radio2']=="opcion3") {
			echo "Usted tiene estudios secundarios";
		}
	?>
</body>
</html>