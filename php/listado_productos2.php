<?php

$aProducto= array();
$aProducto[]=array("nombre"=>"Smart TV\"4k UHD",
                "marca"=>"Hitachi",
                "modelo"=>"554KS20",
                "stock"=>60,
                "precio"=>58000
            );
$aProducto[]=array("nombre"=>"Samsung A30 Blanco",
                "marca"=>"Samsung",
                "modelo"=>"GalaxyA30",
                "stock"=>0,
                "precio"=>2200
            );
$aProducto[]=array("nombre"=>"Aire Acondicionado Split F/C Surrey 2900F",
                "marca"=>"Surrey",
                "modelo"=>"553AIQ1201E",
                "stock"=>5,
                "precio"=>45000
            );
$aProducto[]=array("nombre"=>"Taza blanca",
                "marca"=>"Circa",
                "modelo"=>"3486",
                "stock"=>50,
                "precio"=>100
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
<div>
<div class="row text-center"><div class="col-12 pt-3 pb-5"><h1>Listado de productos</h1></div>
</div>
<div class="row">
<div class="col-12 col-sm-12">
<table class="table table-hover border">
<!--head-->
    <tr class="encabezado">
        <td>Nombre</td>
        <td>Marca</td>
        <td>Modelo</td>
        <td>Stcok</td>
        <td>Precio</td>
        <td>Accion</td>
    </tr>
<!--body-->
    <tr>
    <?php
        for($i = 0; $i < count($aProducto); $i++){
        echo"<tr>";
        echo"<td>". $aProducto[$i]["nombre"]."</td>";
        echo"<td>". $aProducto[$i]["marca"]."</td>";
        echo"<td>". $aProducto[$i]["modelo"]."</td>";
        echo"<td>". $aProducto[$i]["stock"]."</td>";
        echo"<td> $". $aProducto[$i]["precio"]."</td>";
        echo"<td><button class='bt'>Comprar></button></td>";
        echo"</tr>";
        
        }
    ?> 
    </tr>
    
</div>
</div>
</div>   
</body>
</html>