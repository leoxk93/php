<?php

ini_set("display_errrors", 1);
ini_set("display_starup_errors", 1);
error_reporting(E_ALL);

//Definicion
function promediar($aNumeros){
    $suma = 0;
    foreach($aNumeros as $numero){
        $suma += $numero; // $suma = $suma + $numero;
    }
    return $suma / count($aNumeros);
}


//Uso
$aNotas = array(8, 4, 5, 3, 9, 1);
echo "El promedio es: " . promediar($aNotas) . "<br>";
?>
