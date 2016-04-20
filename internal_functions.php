<?php

// TODO: Create your inspect() function here
function inspect($variable){
    $type = gettype($variable);
    switch($type){
        case 'NULL':
            return "This {$type} is NULL";
            break;
        case 'boolean':
            if(empty($variable)){
                return "This {$type} is false";
            } else {
                return "This {$type} is true";
            }
            break;
        case 'string':
            if(empty($variable)){
                return "This {$type} is empty";
            }
            break;
        case 'array':
            if(empty($variable)){
                return "This {$type} is an empty Array";
            } else {
                return "This {$type} is an Array";
            }
            break;

    }
    return "This {$type} is {$variable}";
}
// Do not modify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;
var_dump($array1);
// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1: ' . inspect($num1) . PHP_EOL;

echo 'Inspecting $num2: ' . inspect($num2) . PHP_EOL;

echo 'Inspecting $num3: ' . inspect($num3) . PHP_EOL;

echo 'Inspecting $num4: ' . inspect($num4) . PHP_EOL;

echo 'Inspecting $null: ' . inspect($null) . PHP_EOL;

echo 'Inspecting $bool1: ' . inspect($bool1) . PHP_EOL;

echo 'Inspecting $bool2: ' . inspect($bool2) . PHP_EOL;

echo 'Inspecting $string1: ' . inspect($string1) . PHP_EOL;

echo 'Inspecting $string2: ' . inspect($string2) . PHP_EOL;

echo 'Inspecting $array1: ' . inspect($array1) . PHP_EOL;

echo 'Inspecting $array2: ' . inspect($array2) . PHP_EOL;

?>
