<?php

if (!function_exists($func = 'uuid_is_valid')) {
    echo sprintf('FAIL: Function "%s" does not exit.', $func).PHP_EOL;
    exit(1);
}

exit(0);
