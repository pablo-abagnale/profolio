<?php
$aEmpleados = array();
$aEmpleados[] = array ("dni"=>33300123,"nombre"=>"David Garcia", "bruto"=>85000.30);
$aEmpleados[] = array ("dni"=>40874456,"nombre"=>"Ana Del Valle", "bruto"=>90000);
$aEmpleados[] = array ("dni"=>67567565,"nombre"=>"Andres Perez", "bruto"=>80000);
$aEmpleados[] = array ("dni"=>75744545,"nombre"=>"Victoria Luz", "bruto"=>90000);

function calcularNeto($bruto){
    return $bruto - $bruto *0.17;
}



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de empelados</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
<div class="container">
<div class="row text-center"><div class="col-12 pt-3 pb-5"><h1>Listado de empleados</h1></div>
</div>
<div class="row">
<div class="col-12 col-sm-12">
<table class="table table-hover border">
<!--head-->
    <tr class="encabezado">
        <td>Dni</td>
        <td>Nombre</td>
        <td>Sueldo</td>
    </tr>
<!--body-->
    <tr>
    <?php
        for($i = 0; $i < count($aEmpleados); $i++){
        echo"<tr>";
        echo"<td>". $aEmpleados[$i]["dni"]."</td>";
        echo"<td>". mb_strtoupper ( $aEmpleados[$i]["nombre"])."</td>";
        echo"<td> $". number_format(calcularNeto($aEmpleados[$i]["bruto"]),2,",","." )."</td>";
        echo"</tr>";
        }
    ?> 
    </tr>
</table>
</div>
</div>
        <div>
            <div class="col-12">
                <p>Cantidad de empleados activos <?php echo count($aEmpleados)?></p>
            </div>
        </div>
</div>   
</body>
</html>