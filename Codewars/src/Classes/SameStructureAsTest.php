<?php

use PHPUnit\Framework\TestCase;

require_once "../../same_structure_as.php";

class SameStructureAsTest extends TestCase
{
    public function testDescriptionExamples() {
        $this->assertTrue(same_structure_as([1, 1, 1], [2, 2, 2]));
        $this->assertTrue(same_structure_as([1, [1, 1]], [2, [2, 2]]));
        $this->assertFalse(same_structure_as([1, [1, 1]], [[2, 2], 2]));
        $this->assertFalse(same_structure_as([1, [1, 1]], [[2], 2]));
        $this->assertTrue(same_structure_as([[[], []]], [[[], []]]));
        $this->assertFalse(same_structure_as([[[], []]], [[1, 1]]));
    }
}