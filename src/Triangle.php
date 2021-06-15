<?php

namespace App;

class Triangle implements Shape
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
        return 0.5 * $this->height * $this->width;
    }

    public function perimeter()
    {
        return sqrt(($this->height * $this->height) + ($this->width * $this->width)) + $this->width + $this->height;
    }
}
