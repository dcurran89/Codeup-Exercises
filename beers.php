<?php

$number = 99;
$minusOne = $number - 1;

while ($number >= 0){
    if($number >= 3){
        echo "{$number} bottles of beer on the wall, {$number} bottles of beer.
Take one down and pass it around, {$minusOne} bottles of beer on the wall.";
        $number--;
        $minusOne--;
    } elseif($number >= 2){
        echo "{$number} bottles of beer on the wall, {$number} bottles of beer.
Take one down and pass it around, {$minusOne} bottle of beer on the wall.";
    } else {
        echo "{$number} bottle of beer on the wall, {$number} bottles of beer.
Take one down and pass it around, {$minusOne} bottles of beer on the wall.";
    }
}

?>