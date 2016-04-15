<?php

$number = 2;

do{
    echo "Number is {$number} \n";
    $number *= $number;
}while ($number < 1000000);

?>