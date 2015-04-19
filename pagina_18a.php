<html>
<head>
	<title>20. INSERT (alta de registros en una tabla)</title>
</head>
<body>
	<?php
		$conexion=mysql_connect("localhost","root","Aac1989@") or 
							die("Problema en la conexion");
		mysql_select_db("base_phpya", $conexion) or 
					die("Problemas en la selección de la base de datos");
		mysql_query("insert into alumnos(nombre,mail,codigocurso) values ('$_REQUEST[nombre]','$_REQUEST[mail]','$_REQUEST[codigocurso]')", $conexion) or 
				die("Problemas en el selct:".mysql_error());
				mysql_close($conexion);
				echo "El alumno fue dado de alta";
	?>
</body>
</html>