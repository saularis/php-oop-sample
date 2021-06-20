<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Rectangle;

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
}
