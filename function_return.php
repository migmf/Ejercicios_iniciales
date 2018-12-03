<?php
function precio_con_iva($precio) {
    $precio_iva = $precio * 1.21;
    return $precio_iva;
}
$precio = 10;
$precio_final = precio_con_iva($precio);
echo "El precio con IVA es ". $precio_final;
?>