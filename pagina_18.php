<html>
<head>
	<title>20. INSERT (alta de registros en una tabla)</title>
</head>
<body>
	<h2>INSERT (alta de un registro en una tabla)</h2>
	<h1>Alta de Alumnos</h1>
	<form action="pagina_18a.php" method="post">
		Ingrese nombre:
		<input type="text" name="nombre">
		<br>
		Ingrese mail:
		<input type="text" name="mail">
		<br>
		Seleccione el curso:
		<select name="codigocurso">
			<option value="1">PHP</option>
			<option value="2">HMTL</option>
			<option value="3">CSS</option>
		</select>
		<br>
		<input type="submit" value="Registrar">
	</form>
</body>
</html>