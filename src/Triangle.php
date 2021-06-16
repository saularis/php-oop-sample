<?php

namespace App;

class Triangle implements Shape
{
    protected $height;
    protected $width;

    public function __construct(float|int $height, float|int $width, float|int $angle = 90)
    {
        $this->height = $height;
        $this->width = $width;
        $this->angle = $angle;
    }

    public function area(): float|int
    {
        return 0.5 * $this->height * $this->width * sin(deg2rad($this->angle));
    }

    public function perimeter(): float | int
    {
        return sqrt(($this->height * $this->height) + ($this->width * $this->width)) + $this->width + $this->height;
    }
}
