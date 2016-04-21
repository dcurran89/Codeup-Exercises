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
            $count++;
        }
    }
    return $count;
}
// ------------ MY SECOND ATTEMPT AT COMBINE ---------
// function combine_arrays($arrayOne, $arrayTwo){
//     foreach($arrayOne as $index => $name){
//         $shiftOne = array_shift($arrayOne);
//         $shiftTwo = array_shift($arrayTwo);
//         if($arrayOne[$name] == $arrayTwo[$name])
//     }
// }

// -------------- MY FIRST ATTEMPT --------------
function combine_arrays($arrayOne, $arrayTwo){
    $iterations = count($arrayOne);
    for ($i=0; $i < $iterations; $i++) {
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

combine_arrays($names, $compare);

?>