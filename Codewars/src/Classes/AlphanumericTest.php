<?php

require_once "../files/alphanumeric.php";

use PHPUnit\Framework\TestCase;

class AlphanumericTest extends TestCase
{
    public function testExamples() {
        $this->assertTrue(alphanumeric('Mazinkaiser'));
        $this->assertFalse(alphanumeric('hello world_'));
        $this->assertTrue(alphanumeric('PassW0rd'));
        $this->assertFalse(alphanumeric('     '));
    }
}