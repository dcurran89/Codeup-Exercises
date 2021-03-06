<?php
//requiring the classes that have our methods
require_once 'Rectangle.php';
require_once 'Square.php';

//instantiation of a new square
$square = new Square(3);
//have to call getters now from parent for height and width
echo 'Square Height: ' . $square->getHeight() . PHP_EOL;
echo 'Square Width: ' . $square->getWidth() . PHP_EOL;
//make sure that the square has same width and height
// if($square->height != $square->width){
//             echo 'Square must have same width and height' . PHP_EOL;
//         } else {
//             echo 'Square Area: ' . $square->area() . PHP_EOL;
//             echo 'Square Perimeter: ' . $square->perimeter() . PHP_EOL;
//         }
//ABOVE COMMENTED CODE BECOMES UNNECESSARY WITH OVERRIDING METHODS
echo 'Square Area: ' . $square->area() . PHP_EOL;
echo 'Square Perimeter: ' . $square->perimeter() . PHP_EOL;

echo '*****************************' . PHP_EOL;

//instantiation of a new rectangle
$rectangle = new Rectangle(2,3);

//have to call getters now from parent for height and width
echo 'Rectangle Height: ' . $rectangle->getHeight() . PHP_EOL;
echo 'Rectangle Width: ' . $rectangle->getWidth() . PHP_EOL;
echo 'Rectangle Area: ' . $rectangle->area() . PHP_EOL;
//this should return an error, Rectangle class doesn't have a perimeter method in it
echo 'Rectangle Perimeter: ' . $rectangle->perimeter() . PHP_EOL;