<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

class testAnnuaire extends TestCase
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