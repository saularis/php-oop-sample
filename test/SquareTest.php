<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Square;

class SquareTest extends TestCase
{
    /** @test */
    public function can_calculate_area()
    {
        $square = new Square(10, 10);
        $this->assertSame($square->area(), 10*10);
    }

    /** @test */
    public function can_calculate_perimeter()
    {
        $square = new Square(10);
        $this->assertSame(
            $square->perimeter(),
            10 * 4
        );
    }
}
