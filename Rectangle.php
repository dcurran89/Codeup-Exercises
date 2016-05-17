<?php
class Rectangle 
{
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
}


