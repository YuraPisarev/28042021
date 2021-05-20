<?php

$new = [
    1, 2, 4
];

$new[] = 5;
$new[] = 6;

array_push($new, 7);

$new[2] = 11;

unset($new[3]);



$old = array(1, 2, 3, 4, 5, 6, 7);

var_dump($new, $old);

$a1 = [
    'name' => 'Yurii',
    'Lastname' => 'Pisarev',
    'age' => 37,
    'skills' => [
        [
            'Languange' => 'PHP',
            'exp' => '10+',
        ],
        [
            'Languange' => 'JS',
            'exp' => '10+',
        ],
        [
            'Languange' => 'C#',
            'exp' => '3+',
        ],
        [
            'Languange' => 'Java',
            'exp' => '1+',
        ],
    ],
];

$a1['company'] = 'IT';
$a1['skills'][] = [
    'Languange' => 'Python',
    'exp' => 0,
];

unset($a1['skills'][3]);


var_dump($a1);
var_dump($a1['Lastname'], $new[1]);
var_dump($a1);
var_dump($a1['skills'][1]['Languange']);

$big = [
    'one' => [
        'two' => [
            'three' => [
                'four' => [
                    'five' => [
                        'six',
                    ],
                ],
            ],
        ],
    ],
];

var_dump($big);

echo '<pre>';
print_r($big);
echo '</pre>';


$a2 = ['Yuriii', 'Pisarev', 32];
//$name = $a2[0];
//$Lastname = $a2[1];
//$age = $a2[2];
//list($name, $Lastname, $age) = $a2;
[$name, $Lastname, $age] = $a2;

var_dump($name, $Lastname, $age);

$a3 = compact('name', 'age');
var_dump($a3);

