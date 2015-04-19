<html>
<head>
	<title>15. PRACTICANDO - CREACION DE UN ARCHIVO DE TEXTO</title>
</head>
<body>
	<?php
		$ped=fopen("pedidos.txt", "a") or die("Problema en la creacion");
		fputs($ped, $_REQUEST['nombre']);
		fputs($ped, "\n");
		fputs($ped, $_REQUEST['direccion']);
		fputs($ped, "\n");
		if (isset($_REQUEST['pizza1'])) {
			fputs($ped, "Jamon y queso");
			fputs($ped, "\n");
			fputs($ped, $_REQUEST['cantidad1']);
			fputs($ped, "\n");
		}
		if (isset($_REQUEST['pizza2'])) {
			fputs($ped, "Napolitana");
			fputs($ped, "\n");
			fputs($ped, $_REQUEST['cantidad2']);
			fputs($ped, "\n");
		}
		if (isset($_REQUEST['pizza3'])) {
			fputs($ped, "Muzzarella");
			fputs($ped, "\n");
			fputs($ped, $_REQUEST['cantidad3']);
			fputs($ped, "\n");
		}
		
		fputs($ped, "-------------------------------------------------------------");
		fputs($ped, "\n");
		fclose($ped);
		echo "El pedido se realizo correctamente";
	?>
</body>
</html>