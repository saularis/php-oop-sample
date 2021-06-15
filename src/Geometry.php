<?php

namespace App;

class Geometry
{
    protected $shape;

    public function __construct(Shape $shape)
    {
        $this->shape = $shape;
    }

    public function area()
    {
        return $this->shape->area();
    }

    public function perimeter()
    {
        return $this->shape->perimeter();
    }
}
