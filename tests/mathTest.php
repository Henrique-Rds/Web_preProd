<?php

use PHPUnit\Framework\TestCase;
require 'src/Math.php';

class MathTest extends TestCase
{
    public function testDouble(){
        $this->assertEquals(4, \tuto\Math::double(2));

    }
}
