<?php

namespace App;

class Geometry
{
    protected $shape;

    public function __construct(Shape $shape)
    {
        $this->shape = $shape;
    }

    public function area(): float|int
    {
        return $this->shape->area();
    }

    public function perimeter(): float|int
    {
        return $this->shape->perimeter();
    }
}
