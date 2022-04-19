<?php

ini_set ("display_errrors", 1);
ini_set ("display_starup_errors", 1);
error_reporting(E_ALL);
 
 $aNotas = array(9, 8, 50, 4, 7, 8);
 $aEmpleados = array("Leonardo", "Valeria", "Estela", "Camila");
 $aProductos = array("FIFA", "PSC", "GOD", "WW2");



 function contar($aArray){
     $cont = 0;
     foreach($aArray as $item){
         $cont++;
     }
     return $cont;
 }

 echo "Cantindad de productos: " . contar($aProductos) . "<br>";
 echo "Cantindad de pacientes: " . contar($aEmpleados) . "<br>";
 echo "Cantindad de notas: " . contar($aNotas) ;

?>