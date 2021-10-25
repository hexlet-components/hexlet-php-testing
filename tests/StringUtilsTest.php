<?php

require("src/StringUtils.php");
require("vendor/autoload.php");

use Webmozart\Assert\Assert;
use function StringUtils\capitalize;

Assert::eq(capitalize(''), '');
Assert::eq(capitalize('hello'), 'Hello');
// Assert::eq(capitalize('hello'), 'hello'); // error