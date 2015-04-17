<html>
<head>
	<title>4. Un programita más útil que "Hola Mundo"</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Un Programita más útil que "Hola Mundo"</h2>
	
	<?php
	/*OPERADORES
	>	Mayor
	>=	Mayor o igual
	<	Menor
	<=	Menor o igual
	==	Igual
	!=	Distinto
	*/
		$dia=date('d');
		if ($dia<=10) {
			echo "sitio activo";
		} else {
			echo "sitio fuera de servicio";
		}
		
	?>
</body>
</html>