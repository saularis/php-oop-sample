<?php

namespace Test;

use App\Geometry;
use App\Rectangle;
use App\Square;
use App\Triangle;
use PHPUnit\Framework\TestCase;

class GeometryTest extends TestCase
{
    /** @test */
    public function it_can_calculate_area_of_rectangle()
    {
        $rectangle = new Geometry(new Rectangle(10, 15));
        $this->assertSame($rectangle->area(), 150);
    }

    /** @test */
    public function it_can_calculate_area_of_square()
    {
        $square = new Geometry(new Square(10));
        $this->assertSame($square->area(), 10*10);
    }

    /** @test */
    public function it_can_calculate_area_of_triangle()
    {
        $triangle = new Geometry(new Triangle(10, 20));
        $this->assertSame($triangle->area(), 0.5 * 10 * 20);
    }

    /** @test */
    public function it_can_calculate_perimeter_of_rectangle()
    {
        $rectangle = new Geometry(new Rectangle(10, 15));
        $this->assertSame($rectangle->perimeter(), (10*2) + (15*2));
    }

    /** @test */
    public function it_can_calculate_perimeter_of_square()
    {
        $square = new Geometry(new Square(10));
        $this->assertSame($square->perimeter(), 10*4);
    }

    /** @test */
    public function it_can_calculate_perimeter_of_triangle()
    {
        $triangle = new Geometry(new Triangle(10, 20));
        $perimeter = sqrt((10 * 10) + (20 * 20)) + 20 + 10;
        $this->assertSame($triangle->perimeter(), $perimeter);
    }
}
