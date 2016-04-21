 <?php

 // Converts array into list n1, n2, ..., and n3
 function humanizedList($array, $sort = false) {
   // Your solution goes here!
    $lastPhysicist = array_pop($array);
    if($sort == true){
        sort($array);
    }
    $array = implode(', ', $array);
    return $array . ', and ' . $lastPhysicist;
 }

 // List of famous peeps
 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 // TODO: Convert the string into an array
 $physicistsArray = explode(', ', $physicistsString);

 // Humanize that list
 $famousFakePhysicists = humanizedList($physicistsArray, true);

 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";

 ?>