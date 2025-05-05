<?php

namespace Hexlet\Package\Utils;

// this function reverses a given string
function reverseString(string $string): string
{
    return implode(array_reverse(str_split($string)));
}
