<?php

function getNumbers(int $min, int $max): Generator
{
    for (; $min <= $max; $min++) {
        yield $min;//возвращение
    }
//    return range($min, $max);
}

$nambers = getNumbers(PHP_INT_MIN, PHP_INT_MAX);
foreach ($nambers as $namber) {
    echo $namber, '';
}
echo PHP_EOL;