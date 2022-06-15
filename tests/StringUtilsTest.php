<?php

require("src/StringUtils.php");

if (StringUtils\capitalize('hello') !== 'Hello') {
    throw new \Exception('The function is broken!');
}

if (StringUtils\capitalize('') !== '') {
    throw new \Exception('The function is broken!');
}

echo 'All tests passed!';