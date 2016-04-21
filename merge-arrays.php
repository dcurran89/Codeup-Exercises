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
function compareArrays($arrayOne, $arrayTwo){
    $count = 0;
    foreach($arrayOne as $name){
        if(search($name, $arrayTwo)){
            var_dump($name);
            $count++;
        }
    }
    return $count;
}
function combine_arrays($arrayOne, $arrayTwo){
    for ($i=0; $i < 5; $i++) {
        $shiftOne = array_shift($arrayOne);
        $shiftTwo = array_shift($arrayTwo);
        if($shiftOne == $shiftTwo){
            $newArray[] = $shiftOne;
        }
        if($shiftOne != $shiftTwo){
            $newArray[] = $shiftOne;
            $newArray[] = $shiftTwo;
        }
    }
    print_r($newArray);
}

echo "There are " . compareArrays($names, $compare) . " items in the array that match." . PHP_EOL;
var_dump(search('Tina', $names));
combine_arrays($names, $compare);

?>