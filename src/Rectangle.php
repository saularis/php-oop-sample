<?php

namespace App;

use App\PolygonTrait;

class Rectangle implements Shape
{
    use PolygonTrait;

    protected float|int $height;
    protected float|int $width;

    public function __construct(float|int $height, float|int $width)
    {
        $this->height = $height;
        $this->width = $width;
        $this->numberIsValid($height);
        $this->numberIsValid($width);
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
