<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;
#require 'src/Math.php';

class MathTest extends TestCase
{
    use TestCaseTrait;

    /**
     * @return PHPUnit\DbUnit\Database\Connection
     */
    public function getConnection()
    {
        $pdo = new PDO('sqlite::memory:');
        return $this->createDefaultDBConnection($pdo, ':memory:');
    }

    
    public function testDouble(){
        $this->assertEquals(4, \App\Math::double(2));

    }

    public function testDoubleifZero(){
        $this->assertEquals(0,\App\Math::double(0));    
    }
}
