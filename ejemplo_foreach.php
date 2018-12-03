<?php

$numeros = ["uno", "dos", "tres"];

foreach($numeros as $valor) {
    echo $valor ."<br><br>";
}

foreach($numeros as $clave => $valor) {
    echo "[". $clave ."]". $valor ."<br><br>";
}

$ciclos = array(0 => "Desarrollo de aplicaciones web", "DAW" => "Desarrollo web", 1 => "Desarrollo
multiplataforma", "DAM" => "Desarrollo multiplataforma");

foreach($ciclos as $valor) {
    echo $valor ."<br><br>";
}

foreach($ciclos as $clave => $valor) {
    echo "[". $clave ."]". $valor ."<br><br>";
}


?>