<?php

require_once "../files/part _word.php";

use PHPUnit\Framework\TestCase;

class PathWordTest extends TestCase
{
    public function testFixedTests() {
        $this->assertEquals(true, part_word("samurai", "ai"));
        $this->assertEquals(false, part_word("sumo", "omo"));
        $this->assertEquals(true, part_word("ninja", "ja"));
        $this->assertEquals(true, part_word("sensei", "i"));
        $this->assertEquals(false, part_word("samurai", "ra"));
        $this->assertEquals(false, part_word("abc", "abcd"));
        $this->assertEquals(true, part_word("abc", "abc"));
        $this->assertEquals(true, part_word("abcabc", "bc"));
        $this->assertEquals(false, part_word('ails', 'fails'));
        $this->assertEquals(true, part_word('fails', 'ails'));
        $this->assertEquals(false, part_word('this', 'fails'));
        $this->assertEquals(true, part_word('yes this will pass', ''));
        $this->assertEquals(false, part_word('this will not pass', '`^$<>()[]*|'));
        $this->assertEquals(false, part_word("abc\n", 'abc'), 'Watch out for \n in the end');
    }
}