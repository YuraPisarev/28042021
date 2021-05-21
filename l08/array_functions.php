<?php

var_dump(1);
$a1 = [
    'name' => 'Yurii',
    'age' => 32,
    'skills' => [
        'PHP',
        'JS',
    ],
];

$seriaLized = serialize($a1);
var_dump($seriaLized);

$a2 = 'a:3:{s:4:"name";s:5:"Yurii";s:3:"age";i:32;s:6:"skills";a:2:{i:0;s:3:"PHP";i:1;s:2:"JS";}}';
$deseriaLizer = unserialize($a2);
var_dump($deseriaLizer);

$count = count($a1);
$countRecursive = count($a1, COUNT_RECURSIVE);
var_dump($count, $countRecursive);

//var_dump(array_shift($a1), $a1);

var_dump(array_key_exists('age', $a1), array_key_exists('test', $a1));

var_dump(in_array('Yurii', $a1), in_array(33, $a1), in_array('32', $a1, true));

$s2 = 2, 4, 6, 2, 1, 3;

$unique = array_unique($s2);
var_dump($unique);

