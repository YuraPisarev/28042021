<?php

declare(strict_types=1);

function hello(string $name, int $age, string $gender, string $greetting = 'Kyky')
{
    echo "Kyky, {$gender} {$name}, {$age} yaers old<br>";
}

$users = [
    ['name' => 'Yura', 'age' => 37, 'gender' => 'male'],
    ['name' => 'Olya', 'age' => 37, 'gender' => 'female'],
    ['name' => 'Vika', 'age' => 37, 'gender' => 'female', 'greetting' => 'ept'],
    ['name' => 'Dima', 'age' => 37, 'gender' => 'male', 'greetting' => 'yo'],
    ['name' => 'Dno', 'age' => 37, 'gender' => 'male'],
];

foreach ($users as $user) {
    if (array_key_exists('greetting', $user)) {
        hello($user['name'], $user['age'], $user['gender'], $user['greetting']);
    } else {
        hello($user['name'], $user['age'], $user['gender']);
    }
}

function test(string $q1 = 'data1', string $q2 = 'data2', string $q3 = 'data3')
{
    echo "{$q1}_{$q2}_{$q3}<br>";
}
test(q1:'Q2 Change');

function sum($message, ...$numbers)
{
    echo $message, array_sum($numbers), '<br>';
}

sum('Tada',1, 3, 4, 6, 7, 8);

function oldSum(string $messege)
{
    var_dump(func_num_args(), func_get_args());
}

oldSum('Tada',1, 3, 4, 6, 7, 8);


