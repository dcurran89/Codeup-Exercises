<?php

$number = 100;
$minusOne = $number - 1;

while ($number >= 0){
    usleep(100000);
    $number--;
    $minusOne--;
    if($number > 2){
        echo "{$number} bottles of beer on the wall, {$number} bottles of beer. Take one down and pass it around, {$minusOne} bottles of beer on the wall.\n";
    } elseif($number == 2){
        echo "{$number} bottles of beer on the wall, {$number} bottles of beer. Take one down and pass it around, {$minusOne} bottle of beer on the wall.\n";
    } elseif($number == 1){
        echo "{$number} bottle of beer on the wall, {$number} bottle of beer. Take one down and pass it around, {$minusOne} bottles of beer on the wall.\n";
    }
    elseif ($number == 0) {
        echo "No more bottles of beer on the wall, no more bottles of beer. Go to the store and buy some more, 99 bottles of beer on the wall. \n";
        $number = 100;
        $minusOne = $number - 1;
    }
}

?>