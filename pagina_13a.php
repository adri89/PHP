<html>
<head>
	<title>15. Creacíon de un archivo de texto</title>
</head>
<body>
	<?php
		$ar=fopen("datos.txt", "a") or die("Problemas en la creacion"); /*Segundo Parametro
																		"a" - crear o si existe lo abre para añadir los datos al final
																		"w" - crear el archivo de texto, si existe borra su contenido
																		"r" - abre el archivo para su lectura
																		*/
		fputs($ar, $_REQUEST['nombre']);
		fputs($ar, "\n");
		fputs($ar, $_REQUEST['comentarios']);
		fputs($ar, "\n");
		fputs($ar, "---------------------------------------------------------");
		fputs($ar, "\n");
		fclose($ar);
		echo "Los datos se cargaron correctamente";
	?>
</body>
</html>