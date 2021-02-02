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
        <td><?php echo $aProducto[0]["nombre"];?></td>
        <td><?php echo $aProducto[0]["marca"];?></td>
        <td><?php echo $aProducto[0]["modelo"];?></td>
        <td><?php echo $aProducto [0]["stock"] == 0? "Sin Stock": ($aProducto[0]["stock"] > 10?"Hay Stock":"Poco stock"); ?> </td> 
        <td>$<?php echo $aProducto[0]["precio"];?></td>
        <td> <button class="bt">Comprar</button></td>
    </tr>
    <tr>
        <td><?php echo $aProducto[1]["nombre"];?></td>
        <td><?php echo $aProducto[1]["marca"];?></td>
        <td><?php echo $aProducto[1]["modelo"];?></td>
        <td><?php echo $aProducto [1]["stock"] == 0? "Sin Stock": ($aProducto[1]["stock"] > 10?"Hay Stock":"Poco stock"); ?></td>
        <td>$<?php echo $aProducto[1]["precio"];?></td>
        <td><button class="bt">Comprar</button></td>
    </tr>
    <tr>
        <td><?php echo $aProducto[2]["nombre"];?></td>
        <td><?php echo $aProducto[2]["marca"];?></td>
        <td><?php echo $aProducto[2]["modelo"];?></td>
        <td><?php echo $aProducto [2]["stock"] == 0? "Sin Stock": ($aProducto[2]["stock"] > 10?"Hay Stock":"Poco stock"); ?></td>
        <td>$<?php echo $aProducto[2]["precio"];?></td>
        <td><button class="bt">Comprar</button></td>
    </tr>
</div>
</div>
</div>   
</body>
</html>