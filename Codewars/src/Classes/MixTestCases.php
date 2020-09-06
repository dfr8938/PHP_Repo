<?php

require_once "../files/mix.php";

use PHPUnit\Framework\TestCase;

class MixTestCases extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testCountOnesBasics() {
        $this->revTest(mix("Are they here", "yes, they are here"), "2:eeeee/2:yy/=:hh/=:rr");
        $this->revTest(mix("looping is fun but dangerous", "less dangerous than coding"), "1:ooo/1:uuu/2:sss/=:nnn/1:ii/2:aa/2:dd/2:ee/=:gg");
        $this->revTest(mix(" In many languages", " there's a pair of functions"), "1:aaa/1:nnn/1:gg/2:ee/2:ff/2:ii/2:oo/2:rr/2:ss/2:tt");
    }
}