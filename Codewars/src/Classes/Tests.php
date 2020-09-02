<?php

require_once "../../find.php";

class Tests extends \PHPUnit\Framework\TestCase
{
    public function testBasic() {
        $this->assertEquals(101, find([100, 101, 102]));
        $this->assertEquals(100, find([1, 9, 27, 81, 100]));
        $this->assertEquals(11, find([2, 4, 0, 100, 4, 11, 2602, 36]));
        $this->assertEquals(160, find([160, 3, 1719, 19, 11, 13, -21]));
    }
}