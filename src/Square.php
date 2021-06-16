<?php

namespace App;

class Square implements Shape
{
    protected $lenght;

    public function __construct(float|int $lenght)
    {
        $this->lenght = $lenght;
    }

    public function area(): float|int
    {
        return $this->lenght * $this->lenght;
    }

    public function perimeter(): float|int
    {
        return $this->lenght * 4;
    }
}
