<?php

namespace Hexlet\Package\Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

use function Hexlet\Package\Math\cube;

class MathTest extends TestCase
{
    #[DataProvider('cubeProvider')]
    public function testCube(int $expected, int $argument): void
    {
        $this->assertEquals($expected, cube($argument));
    }

    public static function cubeProvider(): array
    {
        return [
            [1, 1],
            [8, 2],
            [27, 3],
            [64, 4],
        ];
    }
}
