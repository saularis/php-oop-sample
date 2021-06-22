<?php

namespace App;

use App\GeometryException;

/**
 * Polygon trait: for all geometry class
 */
trait PolygonTrait
{
    private function numberIsValid(int|float $number)
    {
        if ($number <= 0 || is_null($number)) {
            throw GeometryException::invalidNumber();
        }
    }

    private function angleUnitIsValid($angleUnit)
    {
        if ($angleUnit != 'degree' && $angleUnit != 'radian') {
            throw GeometryException::unknownAngleUnit();
        }
    }
}
