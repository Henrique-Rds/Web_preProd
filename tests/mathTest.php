<?php

use PHPUnit\Framework\TestCase;
use App\Math;
#require 'src/Math.php';

class MathTest extends TestCase
{
    public function testDouble(){
        $this->assertEquals(4, \App\Math::double(2));

    }

    public function testDoubleifZero(){
        $this->assertEquals(0,\App\Math::double(0));    
    }
}
