<html>
<head>
	<title>17. Vectores (asociativos)</title>
</head>
<body>
	<h2>Vectores (asociativos)</h2>
	<?php
		$registro[]="7894030";
		$registro[]="Adriano Ayala";
		$registro[]="Quillacollo 123";

		echo $registro[1];
		echo "<br><br>";
	?>

	<?php
		$registros['dni']="7894030";
		$registros['nombre']="Adrian";
		$registros['direccion']="Quillacollo 143";
		echo $registros['direccion'];
		echo "<br><br>";
	?>

	<?php
		$registro=array('dni'=>'7894050',
						'nombre'=>'Adriano',
						'direccion'=>'Quillacollo 456');
		echo $registro['dni'];
		echo "<br><br>";
	?>

	<?php
	/*
	Almacenar en un vector asociativo la cantidad de dias que tiene cada mes del año. Luego
	accederlo por su nombre como subindice.
	*/
		$mes['enero']=31;
		$mes['febrero']=29;
		$mes['marzo']=31;
		$mes['abril']=30;
		$mes['mayo']=31;
		$mes['junio']=30;
		$mes['julio']=31;
		$mes['agosto']=31;
		$mes['septiembre']=30;
		$mes['octubre']=31;
		$mes['noviembre']=30;
		$mes['diciembre']=31;

		echo "Enero tiene: ".$mes['enero']."<br>";
		echo "Agosto tiene: ".$mes['agosto']."<br>";
		echo "diciembre tiene: ".$mes['diciembre'];
	?>
</body>
</html>