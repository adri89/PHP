<html>
<head>
	<title>7. PRACTICANDO - IF</title>
</head>
<body>
	<?php
		$valor=rand(1,3);
		echo "El valor aleatorio es: $valor<br>";
		if ($valor==1) {
			echo "uno";
		} else {
			if ($valor==2) {
				echo "dos";
			} else {
				echo "tres";
			}
		}
	?>
</body>
</html>