<?php
 
 ini_set ("display_errrors", 1);
 ini_set ("display_starup_errors", 1);
 error_reporting(E_ALL);

function calcularNeto($bruto){
  return  $bruto - ($bruto * 0.17);
}

echo "El sueldo neto es $" . calcularNeto(80000);

echo "El sueldo neto es $" . calcularNeto(50000);

?>