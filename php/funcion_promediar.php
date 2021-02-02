<?php

$suma=0;
function promediar($aNumeros)
{
    foreach( $aNumeros as $numero) {
        $Suma += $numero;
    }
    return $suma/count($numero);
}
$aNotas = array(8,4,5,3,9,1);

echo "El promedio es: ". promediar($aNotas). "<br>"


?>


