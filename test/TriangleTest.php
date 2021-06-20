<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Triangle;

class TriangleTest extends TestCase
{
    /** @test */
    public function can_calculate_area()
    {
        $triangle = new Triangle(10, 10);
        $this->assertSame($triangle->area(), 0.5 * 10 * 10);
    }

    /** @test */
    public function can_calculate_perimeter()
    {
        $triangle = new Triangle(10, 30);
        $this->assertSame(
            $triangle->perimeter(),
            sqrt((10 * 10) + (30 * 30)) + 30 + 10
        );
    }
}
