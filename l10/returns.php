<?php

function getNumbers(int $min, int $max, bool $evensOly = false): array
{
    $numbers = range($min, $max);
    if ($evensOly) {
        $numbers = array_filter($numbers, fn ($numbers) => $numbers % 2 === 0);
    }

    return $numbers;
}
$numbers = getNumbers(5, 19);
var_dump($numbers);

$evens = getNumbers(5, 19, true);
var_dump($evens);

