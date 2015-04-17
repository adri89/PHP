<html>
<head>
	<title>9. PRACTICANDO - ENVIO DE DATOS DE UN FORMULARIO</title>
</head>
<body>
	<?php
		echo $_REQUEST['nombre']."<br>";
		echo "Tienes: ".$_REQUEST['edad']." años"."<br>";
		if ($_REQUEST['edad']>=18) {
			echo "Es mayor de edad";
		} else {
			echo "No es mayor de edad";
		}
	?>
</body>
</html>