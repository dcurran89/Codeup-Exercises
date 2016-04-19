<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
// echo $things . PHP_EOL;
echo "\nExercise A \n";
foreach($things as $thingyMabobs) {
    if(is_array($thingyMabobs)){
        foreach($thingyMabobs as $index => $value){
            echo "\tArray index {$index}'s value => {$value}.\n";
        }
    }elseif(is_bool($thingyMabobs)){
        echo "{$thingyMabobs} is a bool.\n";
    }elseif(is_float($thingyMabobs)){
        echo "{$thingyMabobs} is a float.\n";
    }elseif(is_integer($thingyMabobs)){
        echo "{$thingyMabobs} is an integer.\n";
    }elseif(is_null($thingyMabobs)){
        echo "{$thingyMabobs} is a null.\n";
    }elseif(is_string($thingyMabobs)){
        echo "{$thingyMabobs} is a string.\n";
    }
}
echo "\n\nExercise B \n";
foreach($things as $thingyMabobs) {
    if(is_scalar($thingyMabobs)){
        echo "{$thingyMabobs} is a scalar.\n";
    }
}
// is_array() - Checks if value is of type array
// is_bool() - Checks if value if of type boolean
// is_float() - Checks if value is of type float
// is_double() - alias of is_float()
// is_real() - alias of is_float()
// is_int() - Checks if value is of type integer
// is_integer() - alias of is_int()
// is_long() - alias of is_int()
// is_null() - Checks if value is of type null
// is_numeric() - Checks if value is of type float or integer
// is_scalar() - Checks if value is of type float, integer, string, or boolean
// is_string() - Checks if value is of type string
?>