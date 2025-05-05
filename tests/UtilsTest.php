<?php

namespace Hexlet\Package\Tests;

use PHPUnit\Framework\TestCase;

use function Hexlet\Package\Utils\reverseString;

// UtilsTest inherits TestCase
// the class name and the file name are the same
class UtilsTest extends TestCase
{
    // The method, a function defined inside the class,
    // must start with the 'test' word
    // 'public' to enable PHPUnit to call this test outside
    public function testReverse(): void
    {
        // expected value first
        // then actual one
        $this->assertEquals('', reverseString(''));
        $this->assertEquals('olleh', reverseString('hello'));
    }
}
