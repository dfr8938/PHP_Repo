<?php

use PHPUnit\Framework\TestCase;

require_once "../../dirReduc.php";

class DirectionReductionTestCases extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {
        $a = ["NORTH", "SOUTH", "SOUTH", "EAST", "WEST", "NORTH", "WEST"];
        $this->revTest(dirReduc($a), ["WEST"]);
        $b=["NORTH","SOUTH","SOUTH","EAST","WEST","NORTH"];
        $this->revTest(dirReduc($b), []);
        $c = ["NORTH","SOUTH","SOUTH","EAST","WEST","NORTH","NORTH"];
        $this->revTest(dirReduc($c), ["NORTH"]);
        $d = ['EAST', 'EAST', 'EAST', 'EAST', 'SOUTH', 'SOUTH', 'WEST', 'WEST', 'NORTH'];
        $this->revTest(dirReduc($c), ['SOUTH', 'EAST']);
    }
}