<?php

//extends will get me the properties of the Rectangle class
class Square extends Rectangle
{

    public function perimeter()
    {

        return (2 * $this->height) + (2 * $this->width);

    }

}
