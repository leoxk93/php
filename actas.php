<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aAlumnos = array();
$aAlumnos[] = array("nombre" => "Ana Valle", "notas" => array(7, 8));
$aAlumnos[] = array("nombre" => "Bernabe Paz", "notas" => array(5, 7));
$aAlumnos[] = array("nombre" => "Sebastian Aguirre", "notas" => array(6, 9));
$aAlumnos[] = array("nombre" => "Monica ledesma", "notas" => array(8, 9));


function promediar($aNumeros)
{
    $suma = 0;
    foreach ($aNumeros as $numero) {
        $suma += $numero; // $suma = $suma + $numero;
    }
    return $suma / count($aNumeros);
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center p-5">
                <h1>Listado de Alumnos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>Alumno</th>
                        <th>Notas 1</th>
                        <th>Notas 2</th>
                        <th>Promedio</th>
                    </tr>

                    <?php 
                    
                    $pos = 0;
                    $sumPromedios = 0;
                    foreach ($aAlumnos as $alumno): 
                        $pos++;
                        $promedio = promediar($alumno["aNotas"]);
                        $sumPromedios += $promedio;
                    
                    ?>

                    <tr>
                    <td><?php echo $pos; ?></td>
                            <td><?php echo $alumno["nombre"]; ?></td>
                            <td><?php echo $alumno["aNotas"][0]; ?></td>
                            <td><?php echo $alumno["aNotas"][1]; ?></td>
                            <td><?php echo number_format($promedio, 2, ",", "."); ?></td>
                    </tr>
                    <?php endforeach;
                    
                        $promedioCursada = $sumatoria / count($aAlumnos);

                    ?>
                </table>
                <div class="row">
                    <div class="col-12">
                        <p> Promedio de la cursada: <?php echo number_format($promedioCursada, 2, ",", "."); ?> </p>
                    </div>
                </div>
            </div>
</body>

</html>
