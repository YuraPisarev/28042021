<?php

require_once __DIR__

$g1 = 12;

//function test()
//{
//    $in1 = 22;
//}
//test();

function test()
{
//    global $g1;

    var_dump($GLOBALS['g1']);
    $GLOBALS['g1'] = 55;

    $g1 = 55;
    unset($GLOBALS['g1']);
}

test();


$keke = function () use ($g1) {
    var_dump($g1);
}
