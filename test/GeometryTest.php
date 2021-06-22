<?php

namespace Test;

use App\Square;
use App\Geometry;
use App\Triangle;
use App\Rectangle;
use PHPUnit\Framework\TestCase;

class GeometryTest extends TestCase
{
    /**
     * @test
     * @dataProvider geometryPerimeterProvider
     */
    public function it_can_calculate_geometry_perimeter($shape, $output)
    {
        $geometry = new Geometry($shape);
        $this->assertSame($geometry->perimeter(), $output);
    }

    public function geometryPerimeterProvider()
    {
        return [
            [new Rectangle(10, 15), (10*2) + (15*2)],
            [new Square(10), 10*4],
            [new Triangle(10, 20), sqrt((10 * 10) + (20 * 20)) + 20 + 10],
        ];
    }

    /**
     * @test
     * @dataProvider geometryAreaProvider
     */
    public function it_can_calculate_geometry_area($shape, $output)
    {
        $geometry = new Geometry($shape);
        $this->assertSame($geometry->area(), $output);
    }
    
    public function geometryAreaProvider()
    {
        return [
            [new Rectangle(10, 15), 150],
            [new Square(10), 10*10],
            // triangle without angle
            [new Triangle(10, 20), 0.5 * 10 * 20],
            // triangle with angle (degree)
            [new Triangle(10, 20, 90), 0.5 * 10 * 20 * sin(deg2rad(90))],
            // triangle with angle (radian)
            [new Triangle(10, 20, 90, 'radian'), 0.5 * 10 * 20 * sin(90)],
        ];
    }
}
