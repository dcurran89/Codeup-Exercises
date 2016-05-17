<?php

//extends will get me the properties of the Rectangle class
class Square extends Rectangle
{
    //this __construct overrides the __construct from Rectangle class
    public function __construct($height) 
    {

        $this->height = $height;

    }
    //this area overrides the area from Rectangle class
    public function area () 
    {

        return $this->height * $this->height;
        
    }
    //this perimeter overrides the perimeter from Rectangle class
    public function perimeter()
    {

        return (4 * $this->height);

    }

}
