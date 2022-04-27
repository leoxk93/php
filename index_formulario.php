<?php

ini_set("display_errrors", 1);
ini_set("display_starup_errors", 1);
error_reporting(E_ALL);



if ($_POST) {
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];


    if($nombre !="" && $clave != ""){
     header("location: acceso_confirmado.php");
    } else {
      $mensaje = "Valido para usuarios registrados.";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <?php if(isset($mensaje)){ ?>
                    <div class="alert alert-danger" role="alert">
                    <?php echo  $mensaje; ?>
                    </div>
                <?php } ?>

                <form method="POST" action="">
                    <div>
                        <form action="../../form-result.php" method="post" target="_blank">
                            <form action="../../form-result.php" method="post" target="_blank">
                                <p><label>Nombre de usuario: <input type="text" name="txtNombre" id="txtNombre"></label></p>
                                <p><label>Contraseña: <input type="password" name="txtCorreo" id="txtCorreo"></label></p>
                                <p><input type="submit" value="Enviar datos"></p>
                            </form>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
