<?php

	$precio = 10;

	function precio_con_iva() {
		global $precio;
		$precio_iva = $precio * 1.21;
		echo "El precio con IVA es ". $precio_iva;
	}
?>