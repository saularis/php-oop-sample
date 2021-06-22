<?php

namespace App;

use Exception;

class GeometryException extends Exception
{
    public static function invalidNumber()
    {
        return new static('Invalid number');
    }

    public static function unknownAngleUnit()
    {
        return new static('Unknow angle unit');
    }
}
