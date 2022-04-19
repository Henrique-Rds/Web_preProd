<?php
use PHPUnit\Framework\TestCase;

class testAnnuaire extends TestCase
{
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