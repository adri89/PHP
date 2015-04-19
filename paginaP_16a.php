<html>
<head>
	<title>18. PRACTICANDO - FUNCIONES EN PHP</title>
</head>
<body>
	<?php
		function verificarclave($pass1, $pass2) {
			if ($pass1!=$pass2) {
				echo "Las claves ingresadas son distintas";
			} else {
				echo "Las claves ingresados son correctas";
			}
		}
		verificarclave($_REQUEST['clave1'],$_REQUEST['clave2']);
	?>
</body>
</html>