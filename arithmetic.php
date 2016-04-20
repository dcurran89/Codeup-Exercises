<?php

function add($a, $b)
{
    if(!is_numeric($a) || !is_numeric($b)){
        return "Error! {$a} and/or {$b} are not numbers!\n";
    } else {
        return $a + $b;
    }
}

// function add($x, $y)
// {
//     if ($y == 0){
//         return $x;
//     }

//     return add($x + 1, $y - 1);
// } zach's code example, more of a pure mathematical approach rather than using +, -, /, *;

function subtract($a, $b)
{
    if(!is_numeric($a) || !is_numeric($b)){
        return "Error! {$a} and/or {$b} are not numbers!\n";
    } else {
        return $a - $b;  
    }
}

function multiply($a, $b)
{
    if(!is_numeric($a) || !is_numeric($b)){
        return "Error! {$a} and/or {$b} are not numbers!\n";
    } else {
        return $a * $b;
    }
}

function divide($a, $b)
{
    if(!is_numeric($a) || !is_numeric($b)){
        return "Error! {$a} and/or {$b} are not numbers!\n";
    } elseif($b == 0){
        return "You're trying to implode the Universe, that's bad!\n";
    }else {
        return $a / $b;
    }
}

function modulus($a, $b)
{
    if(!is_numeric($a) || !is_numeric($b)){
        throwErrorMessage();
    } else {
        return $a % $b; 
    }
}

function throwErrorMessage($a, $b){
    return "Error! {$a} and/or {$b} are not numbers!\n";
}

$aye = 8;
$bee = 's';

echo "{$aye} plus {$bee} is: " . add($aye, $bee) . PHP_EOL;
echo "{$aye} minus {$bee} is: " . subtract($aye, $bee) . PHP_EOL;
echo "{$aye} times {$bee} is: " . multiply($aye, $bee) . PHP_EOL;
echo "{$aye} divided by {$bee} is: " . divide($aye, $bee) . PHP_EOL;
echo "{$aye} mod {$bee} is: " . modulus($aye, $bee) . PHP_EOL;
