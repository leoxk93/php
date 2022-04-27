<?php

ini_set("display_errrors", 1);
ini_set("display_starup_errors", 1);
error_reporting(E_ALL);

//Definicion
function maximo($aVector){
    
    $maximo = 0;
    foreach($aVector as $vector){
        foreach($aVector as $vector)
        {
            if ($maximo  < $vector){
                $maximo= $vector;
            }
        }
    }
    return $maximo;
}


//Uso
$aNotas = array(8, 4, 5, 3, 9, 1);
$aSueldo = array(800.30, 400.87, 500.45, 300, 900.70, 100, 900, 1800);

echo "La nota maxima es: " . maximo($aNotas) . "<br>";
echo "El sueldo maximo es:" . maximo($aSueldo);
?>

