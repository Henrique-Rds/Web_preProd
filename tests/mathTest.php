<?php

use phpunit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testDouble(){
        $this->assertEquald(4,\Grafikart\Math::double(2));
    }
}

?>