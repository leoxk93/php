<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('error_reporting', E_ALL);


//Si existe el archivo invitados lo abrimos y cargamos en una variable del tipo array
//los DNIs permitidos

//Sino el array queda como un array vacio


if($_POST){

    if(isset($_POST["btnProcesar"])){
        //Si el DNI ingresado se encuentra en la lista se mostrará un mensaje de bienvenido

        //Sino un mensaje de No se encuentra en la lista de invitados.
    }

    if(isset($_POST["btnVip"])){
        //Si el codigo es verde entonces mostrará Su código de acceso es ....

        //Sino Ud. no tiene pase VIP
    }

}