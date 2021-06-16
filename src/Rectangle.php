<?php

namespace App;

class Rectangle implements Shape
{
    protected $height;
    protected $width;

    public function __construct(float|int $height, float|int $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area(): float|int
    {
        return $this->height * $this->width;
    }

    public function perimeter(): float|int
    {
        return (2 * $this->height) + (2 * $this->width);
    }
}
