<?php

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testDouble(){
        $this->assertEquals(4, mathtest\Math::double(2));

    }
}
