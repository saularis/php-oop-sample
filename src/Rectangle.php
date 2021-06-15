<?php

namespace App;

class Rectangle implements Shape
{
    protected $height;
    protected $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area()
    {
        return $this->height * $this->width;
    }

    public function perimeter()
    {
        return (2 * $this->height) + (2 * $this->width);
    }
}
