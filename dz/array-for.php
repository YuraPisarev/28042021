<?php
//1
$leng = [
    'html',
    'css',
    'php',
    'js',
    'jq',
];
foreach ($leng as $elem){
    echo $elem. '<br>';
}
//good

//2
$number = [
    1, 20, 15, 17, 24, 35
];
$result = 0;
foreach ($number as $elem) {
    $result += $elem;
}
echo $result, '<br>';
//good

//3
$number1 = [
  26, 17, 136, 12, 79, 15
];
$result1 = 0;
foreach ($number1 as $elem1) {
    $result1 += $elem1 * $elem1;
}
echo $result1, '<br>';
//good

//4
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key=>$colors) {
    echo $key,'-',$elem. '<br>';
}
//good

//5
$arr1 = [
    'Коля' => '200',
    'Вася' => '300',
    'Петя' => '400',
];
foreach ($arr1 as $key1=>$zp) {
    echo $key1,'-зарплата',$zp,'-долларов', '<br>';
}
//good

//6

$arr2 = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr2 as $en=>$ru) {
    echo $en,'-',$ru, '<br>';
}
//good

//7
$arr3 = array(2, 5, 9, 15, 0, 4);
foreach ($arr3 as $key3) {
    if ($key3 > 3 && $key3 < 10) {
        echo "{$key3}<br>";
    }
}
//good

//8
$arr4 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr4 as $key4) {
    echo $key4;
}
//good

//9

