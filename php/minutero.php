<?php
$hr = 11;
$min =30;

print_r("la hora es $hr:$min hs<br>");
for($i = 0;$i <60;$i++){
    $min++;
    if($min == 60){$hr++;$min = 0;}
    if($hr == 24) {$hr = 00;}
    print_r("la hora es $hr:$min hs<br>");
}
?>