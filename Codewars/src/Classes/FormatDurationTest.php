<?php

require_once "../files/format_duration.php";
use PHPUnit\Framework\TestCase;

class FormatDurationTest extends TestCase
{
    public function testExample() {
        $this->assertEquals("1 second", format_duration(1));
//        $this->assertEquals("1 minute and 2 seconds", format_duration(62));
//        $this->assertEquals("2 minutes", format_duration(120));
//        $this->assertEquals("1 hour", format_duration(3600));
//        $this->assertEquals("1 hour, 1 minute and 2 seconds", format_duration(3662));
//        $this->assertEquals("now", format_duration(0));
    }
}