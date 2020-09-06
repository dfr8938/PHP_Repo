<?php

require_once "../files/permutations.php";

use PHPUnit\Framework\TestCase;

class PermutationsTest extends TestCase
{
    private function assertEquivalent(array $expected, array $actual, string $msg = '') {
        sort($expected);
        sort($actual);
        $this->assertEquals($expected, $actual, $msg);
    }
    public function testDescriptionExamples() {
        $this->assertEquivalent(['a'], permutations('a'));
        $this->assertEquivalent(['ab', 'ba'], permutations('ab'));
        $this->assertEquivalent(['aabb', 'abab', 'abba', 'baab', 'baba', 'bbaa'], permutations('aabb'));
    }
}