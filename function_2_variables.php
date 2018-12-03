<?php
function precio_con_iva($precio, $iva=0.21) {
    $precio = $precio * (1 + $iva);
    return $precio;
}
$precio = 10;
$precio_iva = precio_con_iva($precio);
echo "El precio con IVA es ".$precio_iva
?>