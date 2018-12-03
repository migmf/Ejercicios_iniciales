<?php

$array = [["Ana", "Luis", "Marta"],
          "colores" => ["amarillo", "verde"],
          ["saludo" => "hola", "despedida" => "adiós", "¿Qué tal estás?"]];

foreach ($array as $clave => $valor){
    foreach ($valor as $clave1 =>$valor1){
        echo "[". $clave1 ."]" . $valor1 . "<br><br>";
    }
}

?>