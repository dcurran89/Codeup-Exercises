<?php
class Rectangle 
{
    //this class is the base Class to Square and has all the base methods
    public $width;
    public $height; 

    public function __construct($height, $width) 
    {

        $this->height = $height;
        $this->width = $width;

    }

    public function area () 
    {

        return $this->height * $this->width;

    }

    public function perimeter ()
    {
        return (2 * $this->height) + (2 * $this->width);
    }
}


