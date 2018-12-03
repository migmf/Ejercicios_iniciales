<footer>

    Miguel Angel Martínez Folgado<br>
    <?php
    
    $fecha = ["dia" => [1=>"Lunes", 2=>"Martes", 3=>"Miércoles", 4=>"Jueves", 5=>"Viernes", 6=>"Sabado", 7=>"Domingo"],
              "mes" => [1=>"enero", 2=>"febrero", 3=>"marzo", 4=>"abril", 5=>"mayo", 6=>"junio", 7=>"julio", 8=>"agosto", 9=>"septiembre", 10=>"octubre", 11=>"noviembre", 12=>"diciembre"]];
    $dia_nombre = date("w");
    $dia_numero = date("j");
    $mes = date("n");
    $año = date("Y");
    
    $formato_fecha = $fecha["dia"][$dia_nombre].", ".$dia_numero." de ".$fecha["mes"][$mes]." de ".$año;
    
    echo $formato_fecha;

    ?>


</footer>
