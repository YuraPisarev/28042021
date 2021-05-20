<?php

var_dump(2 + 1 - 1 * 3 / 2);

echo '<hr>';

$number = 10;
$number = $number + 1;
$number += 1;
$number++;
$number = $number + $number;
var_dump($number);

$n1 = 2;
$n2 = 3;
$n3 = 4;

//$n3 = $n3 + $n2;
$n3 += $n2;
var_dump($n3);

//$n3 = $n3 * $n2;
$n3 *= $n2;
var_dump($n3);

//$n3 = $n3 / $n2;
$n3 /= $n2;
var_dump($n3);

$int = 10;
$int2 = $int++ + ++$int;
var_dump($int2);