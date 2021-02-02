<?php


    $fecha=date("d/m/y");
    $edad=29;
    $nombre="PabloAbagnale";
    $aPeliculas=array("Volver al futuro", "Les Miserables", "Blow")
    ?>

    

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Personal</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div>
<div class="row text-center"><div class="col-12 pt-3 pb-5"><h1>Ficha Personal</h1></div>
</div>
<div class="row">
<div class="col-12 col-sm-12">
<table class="table table-hover border">
    <tr>
        <td>Fecha</td>
        <td> <?php echo $fecha; ?></td>
    </tr>
    <tr>
        <td>Nobre y Apellido</td>
        <td><?php echo $nombre; ?></td>
    </tr>
    <tr>
        <td>Edad</td>
        <td><?php echo $edad; ?></td>
    </tr>
    <tr>
        <td>Peliculas favoritas</td>
        <td><?php echo $aPeliculas[0]?><br><?php echo $aPeliculas[1]?><br><?php echo $aPeliculas[2]?></td>
    </tr>
</table>
</div>
</div>
</div>   
</body>
</html>