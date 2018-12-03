<?php

	function precio_con_iva($precio) {
		$precio_iva = $precio * 1.21;
		echo "El precio con IVA es ". $precio_iva;
	}
	
	$precio = 10;
	precio_con_iva($precio);

?>