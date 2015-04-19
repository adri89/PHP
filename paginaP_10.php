<html>
<head>
	<title>12. PRACTICANDO - FROMULARIO (CONTROL SELECT)</title>
</head>
<body>
	<form action="paginaP_10a.php" method="post">
		Ingrese nombre:
		<input type="text" name="nombre"><br>
		Seleccione su ingreso mensual:
		<select name="ingreso">
			<option value="ingreso1"><=1000</option>
			<option value="ingreso2">1001-3000</option>
			<option value="ingreso3">>3000</option>
		</select>
		<br>
		<input type="submit" value="Confirmar">
	</form>
</body>
</html>