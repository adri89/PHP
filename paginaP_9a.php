<html>
<head>
	<title>11. PRACTICANDO - FORMULARIO (CONTROL CHECKBOX)</title>
</head>
<body>
	<?php
		$cant=0;
		if (isset($_REQUEST['deporte1'])) {
			$cant++;
			//echo "FUTBOL<br>";
		}
		if (isset($_REQUEST['deporte2'])) {
			$cant++;
			//echo "BASQUET<br>";
		}
		if (isset($_REQUEST['deporte3'])) {
			$cant=$cant+1;
			//echo "TENNIS<br>";
		}
		if (isset($_REQUEST['deporte4'])) {
			$cant=$cant+1;
			//echo "VOLEYBOL";
		}
		echo $_REQUEST['nombre'];
		echo " practica $cant deportes";
	?>
</body>
</html>