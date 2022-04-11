<?php
use PHPUnit\Framework\TestCase;

class annuaireTest extends TestCase
{
    private $stat; 
    
    public function test_statusToString(){
        $this->$stat="Administration";
        $this->assertNotEquals($this->$stat,statusToString($this->stat));

    }
    
}




?>