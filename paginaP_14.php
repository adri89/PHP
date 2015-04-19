<html>
<head>
	<title>16. PRACTICANDO - LECTURA DE UN ARCHIVO DE TEXTO</title>
</head>
<body>
	<?php
		$pedido=fopen("pedidos.txt", "r") or die("No se puede abrir el archivo");
		while (!feof($pedido)) {
			$linea=fgets($pedido);
			$saltolinea=nl2br($linea);
			echo $saltolinea;
		}
		fclose($pedido);
	?>
</body>
</html>