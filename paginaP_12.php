<html>
<head>
	<title>14. PRACTICANDO - VECTORES (TRADICIONALES)</title>
</head>
<body>
	<?php
		$dia[]="Lunes";
		$dia[]="Martes";
		$dia[]="Miercoles";
		$dia[]="Jueves";
		$dia[]="Viernes";
		$dia[]="Sabado";
		$dia[]="Domingo";
		echo "Primer elemento del vactor: ".$dia[0];
		echo "<br>";
		echo "Ultimo elemento del vector: ".$dia[6];
		echo "<br><br>";
	?>

	<?php
		$dias=array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
		for ($f=0; $f<sizeof($dias); $f++) { 
			echo $dias[$f];
			echo "<br>";
		}
	?>
</body>
</html>