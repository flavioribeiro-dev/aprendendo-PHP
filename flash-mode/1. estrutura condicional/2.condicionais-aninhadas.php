<?php

$num = 14;
if($num >= 18) {
    echo "Adulto, pois já atingiu a maior idade<br>";
} else if($num > 14 && $num < 18) {
    echo "Adolescente, pois ainda tem $num anos";
} else {
    echo "Criança, pois ainda tem $num anos";
}