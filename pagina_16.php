<html>
<head>
	<title>18. Funciones en PHP</title>
</head>
<body>
	<h2>Funciones en PHP</h2>

	<?php
	/*Implementar una funcion que muestre un mensaje centrado en pantalla*/

		function mensajecentrado($men) {
			echo "<table width=\"100%\" border=\"1\">";
			echo "<tr>"; //<tr> (table row) - define la fila de la tabla
			echo "<td align=\"center\">"; //<td> (table data) - un dato para esa fila
			echo $men;
			echo "</td>";
			echo "</tr>";
			echo "</table>";
		}
		mensajecentrado("Primer cuadro");
		echo "<br>";
		mensajecentrado("Segundo cuadro");
		echo "<br><br>";
	?>

	<?php
	/*Funcion que retorna un dato*/
	function retornardivision($valor1, $valor2) {
		$pro=$valor1/$valor2;
		return $pro;
	}
	$v1=100;
	$v2=50;
	$p=retornardivision($v1,$v2);
	echo $p;
	echo "<br><br>";
	?>

	<?php
	//funcion que retorna el cuadrado y cubo de un número

		function cuadradocubo($valor,&$cuad,&$cub) { //cuando le antecedemos el carácter ampersand(&) al parámetro, es por referencia 
			$cuad=$valor*$valor;
			$cub=$valor*$valor*$valor;
		}
		cuadradocubo(2,$c1,$c2);
		echo "El cuadrado de 2 es: ".$c1."<br>";
		echo "El cubo de 2 es: ".$c2;
	?>
</body>
</html>