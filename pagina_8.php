<html>
<head>
	<title>10. FORMULARIO (control radio)</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>FORMULARIO (control radio)</h2>

	<form action="pagina_8a.php" method="post">
		Ingrese primer valor:
		<input type="text" name="valor1">
		<br>
		Ingrese segundo valor:
		<input type="text" name="valor2">
		<br>

		<input type="radio" name="radio1" value="suma">Sumar
		<br>
		<input type="radio" name="radio1" value="resta">Restar
		<br>
		<input type="radio"	name="radio1" value="multiplicacion">MULTIPLICAR
		<br>
		<input type="radio" name="radio1" value="division">DIVIDIR
		<br>
		<input type="submit" value="Operar">
	</form>
</body>
</html>