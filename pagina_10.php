<html>
<head>
	<title>12. FORMULARIO (control select)</title>
</head>
<body>
	<h2>FORMULARIO (control select)</h2>

	<form action="pagina_10a.php" method="post">
		Ingrese primer valor:
		<input type="text" name="valor1">
		<br>
		Ingrese segundo valor:
		<input type="text" name="valor2">
		<br>
		<select name="operacion">
			<option value="suma">Sumar</option>
			<option value="resta">Restar</option>}
			<option value="multiplicacion">MULTIPLICAR</option>
			<option value="division">DIVIDIR</option>
		</select>
		<br>
		<input type="submit" value="Confirmar">
	</form>
</body>
</html>