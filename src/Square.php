<?php

namespace App;

use App\PolygonTrait;

class Square implements Shape
{
    use PolygonTrait;

    protected float|int $length;

    public function __construct(float|int $length)
    {
        $this->length = $length;
        $this->numberIsValid($this->length);
    }

    public function area(): float|int
    {
        return $this->length * $this->length;
    }

    public function perimeter(): float|int
    {
        return $this->length * 4;
    }
}
