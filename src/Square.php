<?php

namespace App;

class Square implements Shape
{
    protected $width;

    public function __construct($width)
    {
        $this->width = $width;
    }

    public function area()
    {
        return $this->width * $this->width;
    }

    public function perimeter()
    {
        return $this->width * 4;
    }
}
