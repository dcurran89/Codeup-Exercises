<?php

// $firstName = 'Daniel';
// echo $firstName . PHP_EOL;
// echo $hello = "Hello World \n";

define('SIDES_OF_DICE', 300);
$roll = mt_rand(1, SIDES_OF_DICE);

echo "You rolled {$roll}" . PHP_EOL;

?>
