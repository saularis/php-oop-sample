<?php

namespace App;

interface Shape
{
    public function area(): float|int;
    public function perimeter(): float|int;
}
