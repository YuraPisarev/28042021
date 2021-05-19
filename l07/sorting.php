<?php

$array = range(1, 10);
var_dump($array);

shuffle($array);
var_dump($array);

//asort($array);
//arsort($array);
sort($array);
var_dump($array);

$students = [
    [
        'name' => 'Nastya',
        'age' => '22',
    ],
    [
        'name' => 'Olya',
        'age' => '10',
    ],
    [
        'name' => 'Katya',
        'age' => '33',
    ],
    [
        'name' => 'Inna',
        'age' => '15',
    ],
];
var_dump($students);

//uasort($students, static function ($a, $b) {
//    if ($a['age'] > $b['age']) {
//        return 1;
//    }
//    if ($b['age'] > $a['age']) {
//        return -1;
//    }
//         return 0;
//});
uasort($students, static function ($a, $b) {
    return $a['age'] <=> $b['age'];
});
//uasort($students, fn ($a, $b) => $a['age'] <=> $b['age']);
var_dump($students);