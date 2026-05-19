<?php

namespace Hexlet\Package;

use Illuminate\Support\Collection;

class User
{
    private string $name;
    /** @var Collection<int, User> */
    private Collection $children;

    /** @param array<int, User> $children */
    public function __construct(string $name, array $children = [])
    {
        $this->name = $name;
        $this->children = collect($children);
    }

    public function getName(): string
    {
        return $this->name;
    }

    /** @return Collection<int, User> */
    public function getChildren(): Collection
    {
        return $this->children;
    }
}
