<?php
function precio_con_iva(&$precio, $iva=0.21) {
    $precio = $precio * (1 + $iva);
}
$precio = 10;
precio_con_iva($precio);
echo "El precio con IVA es ".$precio;
?>