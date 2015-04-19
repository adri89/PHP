<html>
<head>
	<title>20. PRACCTICANDO - INSERT (ALTA DE REGISTROS EN UNA TABLA)</title>
</head>
<body>
	<?php
		$conexion=mysql_connect("localhost","root","Aac1989@") or 
							die("Problemas en la conexion");
		mysql_select_db("base_phpya", $conexion) or 
					die("Problemas en la seleción de la base de datos");
		mysql_query("insert into cursos(nombrecurso) values ('$_REQUEST[nombrecurso]')", $conexion) or 
				die("Problemas en el select:".mysql_error());
		mysql_close($conexion);
		echo "El curso fue dado de alta";
	?>
</body>
</html>