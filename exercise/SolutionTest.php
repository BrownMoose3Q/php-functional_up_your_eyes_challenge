<?php

namespace App;
require_once "Solution.php";

use App\Solution\solution;

class SolutionTest extends \PHPUnit_Framework_TestCase {
    /**
     * @dataProvider additionProvider
     */
    public function testAddition ($exp, $f, $s, $t) {
        
        $this->assertEquals ($exp, solution($f, $s, $t)); 
    }
    
    public function additionProvider (){
        
        return [
                [4.0, 4, 4, 4],
                [8.0, 8, 8, 8],
                [16.0, 8, 4, 8],
                [15.0, 10, 5, 7.5]
            ];
    }
}
