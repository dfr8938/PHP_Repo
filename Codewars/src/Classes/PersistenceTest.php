<?php

use PHPUnit\Framework\TestCase;

require_once "../files/persistence.php";

class PersistenceTest extends TestCase
{
    public function testDescriptionExamples() {
        $this->assertEquals(3, persistence(39));
        $this->assertEquals(4, persistence(999));
        $this->assertEquals(0, persistence(4));
        $this->assertEquals(0, persistence(10));
        $this->assertEquals(0, persistence(100));
        $this->assertEquals(0, persistence(1000));
        $this->assertEquals(3, persistence(2222));
        $this->assertEquals(0, persistence(9999));

    }
}