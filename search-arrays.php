<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function search($name, $array){
    $result = array_search($name, $array);
    if($result !== false) {
        return true;
    } else {
        return false;
    }
}
function compareArrays($array1, $array2){
    $count = 0;
    foreach($array1 as $name){
        if(search($name, $array2)){
            var_dump($name);
            $count++;
        }
    }
    return $count;
}

echo compareArrays($names, $compare) . PHP_EOL;
var_dump(search('Tina', $names));


?>