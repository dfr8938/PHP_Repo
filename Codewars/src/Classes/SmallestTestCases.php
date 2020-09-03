<?php

require_once "../../smallest.php";

use PHPUnit\Framework\TestCase;

class SmallestTestCases extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {
        $this->revTest(smallest(261235), [126235, 2, 0]);
        $this->revTest(smallest(209917), [29917, 0, 1]);
        $this->revTest(smallest(285365), [238565, 3, 1]);
    }
}