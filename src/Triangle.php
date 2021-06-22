<?php

namespace App;

use App\PolygonTrait;

class Triangle implements Shape
{
    use PolygonTrait;

    protected float|int $height;
    protected float|int $width;
    protected float|int $angle;
    protected string $angleUnit;

    public function __construct(
        float|int $height,
        float|int $width,
        float|int $angle = 90,
        string $angleUnit = 'degree'
    ) {
        $this->height = $height;
        $this->width = $width;
        $this->angle = $angle;
        $this->angleUnit = $angleUnit;
        $this->numberIsValid($this->height);
        $this->numberIsValid($this->width);
        $this->numberIsValid($this->angle);
        $this->angleUnitIsValid($this->angleUnit);
    }

    public function area(): float|int
    {
        return 0.5 * $this->height * $this->width * $this->angle();
    }

    public function perimeter(): float|int
    {
        return sqrt(($this->height * $this->height) + ($this->width * $this->width)) + $this->width + $this->height;
    }

    private function angle()
    {
        switch ($this->angleUnit) {
            case 'radian':
                return sin($this->angle);
                break;
            default:
                return sin(deg2rad($this->angle));
                break;
        }
    }
}
