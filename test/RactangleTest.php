<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Rectangle;
use App\GeometryException;

class RactangleTest extends TestCase
{
    /** @test */
    public function can_calculate_area()
    {
        $ractangle = new Rectangle(10, 10);
        $this->assertSame($ractangle->area(), 10*10);
    }

    /** @test */
    public function can_calculate_perimeter()
    {
        $ractangle = new Rectangle(10, 30);
        $this->assertSame($ractangle->perimeter(), (2 * 10) + (2 * 30));
    }

    /**
     * @test
     * @dataProvider invalidSquareDataProvider
     **/
    public function it_throws_exception_for_invalid_input($height, $width)
    {
        $this->expectException(GeometryException::class);
        $rectangle = new Rectangle($height, $width);
        $rectangle->area();
    }

    public function invalidSquareDataProvider()
    {
        return [
            [0, 0],
            [0, 1],
            [1, 0],
            [2, -1],
            [-2, 1],
            [-2, -1],
        ];
    }
}
