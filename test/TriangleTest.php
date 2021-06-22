<?php

namespace Test;

use App\GeometryException;
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

    /**
     *
     * @test
     * @dataProvider invalidTriangleDataProvider
     * */
    public function it_throws_exception_for_invalid_input($height, $width, $angle, $angleUnit)
    {
        $this->expectException(GeometryException::class);
        $triangle = new Triangle($height, $width, $angle, $angleUnit);
        $triangle->area();
    }

    public function invalidTriangleDataProvider()
    {
        return [
            [0, 0, 90, 'degree'],
            [-10, 20, 90, 'degree'],
            [10, -20, 90, 'degree'],
            [0, 20, 90, 'degree'],
            [10, 0, 90, 'degree'],
            [10, 20, -90, 'degree'],
            [10, 20, 0, 'degree'],
            [10, 20, 90, 'wrong_input'],
        ];
    }
}
