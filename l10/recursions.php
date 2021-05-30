<?php
//
//$data = [
//    ['title' => 'TITLE', 'link' => '/link'],
//    ['title' => 'PARETN 1', 'children' => [
//        ['title' => 'CHILD', 'link' => '/child-link'],
//        ['title' => 'CHILD', 'link' => [
//            ['title' => 'CHILD7', 'link' => '/child-link7'],
//            ['title' => 'CHILD8', 'link' =>  [
//                ['title' => 'TITLE9', 'link' => '/link9'],
//                ['title' => 'TITLE10', 'link' => '/link10'],
//        ]],
//    ]],
//         ['title' => 'CHILD2', 'link' => '/child-link2'],
//    ]],
//    ['title' => 'TITLE2', 'link' => '/link2'],
//    ['title' => 'TITLE3', 'link' => '/link3'],
//    ['title' => 'PARETN 2', 'children' => [
//        ['title' => 'CHILD3', 'link' => '/child-link3'],
//        ['title' => 'CHILD4', 'link' => '/child-link4'],
//    ]],
//    ['title' => 'PARETN 3', 'children' => [
//        ['title' => 'CHILD5', 'link' => '/child-link5'],
//        ['title' => 'CHILD6', 'link' => '/child-link6'],
//
//
//
//function getMenuHtml(array $data): string
//{
//    $html = '<ul>';
//    foreach ($data as $row) {
//        if (array_key_exists('cheldren', $row)) {
//            $html .= '<li>';
//            $html .=
//            $html .=
//            $html .=
//            }
//    }
//}


//$pow = pow (3, 3);
//$pow = 3 ** 3;
//var_dump($pow);

function power(int $number, int $power)
{
    if ($power === 1) {
        return $number;
    }

    if ($power === 0) {
        return $number;
    }

    return $number * power($number, $power -1);

}
$pow = power(3, 3);
var_dump($pow);

$count = 0;

function fibonacci(int $n)
{
    static $storage = [];
    global $count;
    $count++;
    if (array_key_exists($n, $storage)) {
        return $storage[$n];
    }
    if ($n === 0 || $n === 1) {
        return $n;
    }
    $storage[$n] = fibonacci($n -1) + fibonacci($n -2);
    return $storage[$n];
}
$f = fibonacci(200);
var_dump($f, $count);