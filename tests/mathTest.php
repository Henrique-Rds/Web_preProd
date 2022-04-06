<?php

namespace PHPUnit\Framework;

use PHPUnit\Framework\TestCase;

class MathTest extends Assert
{
    public function testDouble(){
        $this->assertEquald(4,\Grafikart\Math::double(2));
    }
}

?>