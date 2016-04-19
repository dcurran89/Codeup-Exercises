<?php

echo "Print all evens using for loop and continue\n";
for ($i=0; $i <= 100; $i++) {
    if($i % 2 == 1){
        continue;
    }
    echo "{$i}\n";
}

echo "\n\nBreak Exercise\n";
for ($x=0; $x <= 100; $x++) { 
    if($x == 11){
        break;
    }
    echo "{$x}\n";
}
?>