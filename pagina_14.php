<html>
<head>
	<title>16. Lectura de un archivo de texto</title>
</head>
<body>
	<h2>Lectura de un archivo de texto</h2>

	<?php
		$ar=fopen("datos.txt", "r") or die("No se pudo abrir el archivo");
		while (!feof($ar)) { //feaof - Esta funcion retorna true si se ha llegado al final del archivo en caso contrario retorno false (mientras no se llegue al final del archivo).
			$linea=fgets($ar);
			$lineasalto=nl2br($linea); //"nl2br" (new line to br) - Convierte el caracter (\n) a la marca <br> de html
			echo $lineasalto;
		}
		fclose($ar);
	?>
</body>
</html>