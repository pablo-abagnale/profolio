<?php
    $aProductos = array();
    $aProductos[] = array("Producto"=>"TV Samsung 45 Pulgadas","precio"=>45000);
    $aProductos[] = array("Producto"=>"Heladera LG","precio"=>35000);
    $aProductos[] = array("Producto"=>"Apple iPhone XR","precio"=>200000);
    $subtotal = 0;
    for($i = 0; $i <count($aProductos);$i++){
        $subtotal = $subtotal + $aProductos[$i]["precio"];
    }
    echo $subtotal;
?>


