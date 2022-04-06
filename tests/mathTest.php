<?php

use PHPUnit\Framework\TestCase;
use tests\Math;

class MathTest
{
    public function testDouble(){
        $this->assertEquals(4, mathtest\Math::double(2));

    }
}
