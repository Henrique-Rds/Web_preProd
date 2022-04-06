<?php

class mathtest extends PHPUnit_Framework_TestCase
{
    public function testDouble(){
        $this->assertEquals(4, \mathtest\math::double(2));
    }
}

?>