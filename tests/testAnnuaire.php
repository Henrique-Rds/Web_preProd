<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

class testAnnuaire extends TestCase
{

    use TestCaseTrait;

    // only instantiate pdo once for test clean-up/fixture load
    static private $pdo = null;

    // only instantiate PHPUnit\DbUnit\Database\Connection once per test
    private $conn = null;

    final public function getConnection()
    {
        if ($this->conn === null) {
            if (self::$pdo == null) {
                self::$pdo = new PDO('sqlite::memory:');
            }
            $this->conn = $this->createDefaultDBConnection(self::$pdo, ':memory:');
        }

        return $this->conn;
    }
    
    private $stat="adm"; 
    
    // public function test_statusErreur(){
    //     $this->$stat="Administration";
    //     $this->assertNotEquals($this->$stat,statusToString($this->stat));

    // }

    public function test_statusValide(){
        $this->assertEquals("Administration",statusToString($this->stat));

    }
    
}




?>