<?php

$string = 'My tast string';
var_dump($string);

$int  = 1;
$float = 1.0;


var_dump(false == null);
var_dump(false === null);

var_dump(1 == 1.0);
var_dump(1 === 1.0);
var_dump(PHP_INT_MIN, PHP_INT_MAX);

$array = [
    'Apple',
    'Grape',
    'Orange',
    'Pear',
    'Banana',
];
$arrayOld = array(
    'Apple',
    'Grape',
    'Orange',
    'Pear',
    'Banana',
);

var_dump($array);

$object = new stdClass();
var_dump($object);

$resours = fopen(__DIR__ . '/concatenation.php', 'rb');
var_dump($resours);
fclose($resours);

var_dump(gettype($int));

$callback = function () {};
var_dump($callback);