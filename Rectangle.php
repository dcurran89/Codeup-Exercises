<?php
class Rectangle 
{
    //this class is the base Class to Square and has all the base methods
    private $width;
    private $height; 

    public function __construct($height, $width) 
    {

        $this->setHeight($height);
        $this->setWidth($width);

    }
    //set for unaccessible properties 
    protected function setHeight($height)
    {
        $this->height = trim($height);
    }

    //set for unaccessible properties 
    protected function setWidth($width)
    {
        $this->width = trim($width);
    }
    //get to read data from the unaccessible properties
    public function getHeight()
    {
        return $this->height;
    }

    //get to read data from the unaccessible properties
    public function getWidth()
    {
        return $this->width;
    }

    public function area () 
    {
        return $this->getHeight() * $this->getWidth();
    }

    public function perimeter ()
    {
        return (2 * $this->getHeight()) + (2 * $this->getWidth());
    }
}


