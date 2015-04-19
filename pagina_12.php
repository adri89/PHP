<html>
<head>
	<title>14. Vectores (tradicionales)</title>
</head>
<body>
	<h2>Vectores (tradicionales)</h2>

	<?php
		$nombre[]="Adrian";
		$nombre[]="Mariela";
		$nombre[]="Leny";
		for ($f=0; $f<count($nombre); $f++) { 
			echo $nombre[$f];
			echo "<br>";
		}
		echo "<br>";
	?>

	<?php
	//Otra forma de inicializar
		$edad=array("niño","adolescente","joven","aldulto","anciano");
		for ($i=0; $i<sizeof($edad); $i=$i+1) { 
			echo $edad[$i];
			echo "<br>";
		}
	?>
</body>
</html>