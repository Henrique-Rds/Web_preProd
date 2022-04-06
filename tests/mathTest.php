<?php

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testDouble(){
        $this->assertEquals(4, \tuto\Math::double(2));

    }
}
