<?php

declare(strict_types=1);

namespace Hexlet\Package\Tests;

use Hexlet\Package\User;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

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

    /** @param array<int, User> $children */
    #[DataProvider('userDataProvider')]
    public function testGetName2(string $name, array $children): void
    {
        $user = new User($name, $children);

        $this->assertEquals($name, $user->getName());
        $this->assertEquals(collect($children), $user->getChildren());
    }

    /** @return array<string, array{string, array<int, User>}> */
    public static function userDataProvider(): array
    {
        return [
            'one child' => ['john', [new User('Mark')]],
            'no children' => ['anna', []],
            'two' => ['alice', [new User('Tom'), new User('Eva')]],
        ];
    }
}
