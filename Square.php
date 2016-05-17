<?php

//extends will get me the properties of the Rectangle class
class Square extends Rectangle
{
    //this __construct overrides the __construct from Rectangle class
    public function __construct($height) 
    {

        parent::__construct($height, $height);

    }
    //this area overrides the area from Rectangle class
    public function area () 
    {
        //need to use getters now for height
        return $this->getHeight() * $this->getHeight();
        
    }
    //this perimeter overrides the perimeter from Rectangle class
    public function perimeter()
    {
        //need to use getters now for height
        return (4 * $this->getHeight());

    }

}
