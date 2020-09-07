<?php

require_once "../files/rgb.php";

use PHPUnit\Framework\TestCase;

class RGBTest extends TestCase
{
    public function testBaseTests() {
        // assertEquals(mixed $expected, mixed $actual[, string $message = ''])
        $this->assertEquals("FFFFFF", rgb(255, 255, 255));
        $this->assertEquals("FFFFFF", rgb(255, 255, 300));
        $this->assertEquals("000000", rgb(0,0,0));
        $this->assertEquals("000000", rgb(-500,0,0));
        $this->assertEquals("9400D3", rgb(148, 0, 211));
    }
}