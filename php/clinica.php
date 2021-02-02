<?php

$aPacientes[]= array(
                "dni"=>"33.765.012",
                "nombres"=>"Ana Acuña",
                "edad"=>"45",
                "peso"=>81.50,
);
$aPacientes[]= array(                  
                "dni"=>"23.684.385",
                "nombres"=>"Gonzalo Bustamante",
                "edad"=>66,
                "peso"=>79,); 
$aPacientes[]= array(    
                "dni"=>"36.684.385",
                "nombres"=>"Juan Irraola",
                "edad"=>28,
                "peso"=>79,
);
$aPacientes[]= array(   
                "dni"=>"27.996.385",
                "nombres"=>"Beatriz Ocampo",
                "edad"=>50,
                "peso"=>69,  
);
?>
<!--Inicio de HTML-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Personal</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
<div class="container">
<div class="row"><div class="col-12 pt-3 pb-5"><h1>Listado de pacientes</h1></div>
</div>
<div class="row">
<div class="col-12 col-sm-12">
<table class="table table-hover border">
<!--head-->
    <tr class="encabezado">
        <td>DNI</td>
        <td>Nombre y Apellido</td>
        <td>Edad</td>
        <td>Peso</td>
    </tr>
<!--body-->
    <?php foreach($aPacientes as $paciente) {?>
    <tr>
        <td> <?php echo $paciente["dni"]; ?> </td>
        <td> <?php echo $paciente["nombres"]; ?> </td>
        <td> <?php echo $paciente["edad"]; ?> </td>
        <td> <?php echo $paciente["peso"]; ?> </td>
    </tr>
    <?php }?>
</table>   
</div>
</div>
</div>   
</body>
</hmtl>