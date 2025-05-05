<?php

namespace Hexlet\Package\Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Hexlet\Package\User;

class UserTest extends TestCase
{
    public function testGetName(): void
    {
        $name = 'john';
        $children = [new User('Mark')];
        $user = new User($name, $children);

        $this->assertEquals($name, $user->getName());
        $this->assertEquals(collect($children), $user->getChildren());
    }

    #[DataProvider('userDataProvider')]
    public function testGetName2(string $name, array $children): void
    {
        $user = new User($name, $children);

        $this->assertEquals($name, $user->getName());
        $this->assertEquals(collect($children), $user->getChildren());
    }

    public static function userDataProvider(): array
    {
        return [
            'one child' => ['john', [new User('Mark')]],
            'no children' => ['anna', []],
            'two' => ['alice', [new User('Tom'), new User('Eva')]],
        ];
    }
}
