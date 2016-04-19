<?php

fwrite(STDOUT, "Enter a starting number.\n");
$low = trim(fgets(STDIN));
var_dump($low);
fwrite(STDOUT, "Enter an ending number.\n");
$high = trim(fgets(STDIN));

fwrite(STDOUT, "Enter an increment. \n");
$increment = intval(fgets(STDIN));
var_dump($increment);

for($i = $low; $i <= $high; $i += $increment){
    if(is_numeric($low) && is_numeric($high) && is_numeric($increment)){
        if($increment != null){
            echo "\$i is {$i}\n";
        }else {
            $increment = 1;
        }
    } else {
        echo "Enter numerical values \n";
    }
}
// Create a file named for.php in your exercises repo. Commit and push all changes after each step.

// Prompt user for a starting number and ending number, then display all the numbers from the starting to ending using a for loop.

// Refactor to allow user to choose increment. (count by 1, 2, 10, ...)

// Default increment to 1 if no input.

// Make sure you are only allowing users to pass in numbers. Give an error message is both passed arguments are not numeric. See php.net/is_numeric.
?>