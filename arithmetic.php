<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
   return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

$aye = 4;
$bee = 8;

echo add($aye, $bee) . PHP_EOL;
echo subtract($aye, $bee) . PHP_EOL;
echo multiply($aye, $bee) . PHP_EOL;
echo divide($aye, $bee) . PHP_EOL;
