<?php

$aAuto = array();
$aAuto["color"] = array("negro", "verde");
$aAuto["marca"]="Ford";
$aAuto["anio"]=1908;
$aAuto[]="USD 800 a USD 1000";


echo"El auto ".$aAuto["marca"]." del Año".$aAuto["anio"]." es de color ".$aAuto["color"][0]." y su precio es " .$aAuto[0];

?>
<br>
<?php

$variable =true;
if ($variable ==true) {
     echo"Hola mundo";
     print_r($variable);
}

    ?>