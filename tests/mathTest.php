<?php

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testDouble(){
        $this->assertEquals(2,\Grafikart\Math::double(2));
    }
}

?>