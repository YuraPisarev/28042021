<?php

require  __DIR__. '/func.php';

hello();

function hello()
{
//    include_once  __DIR__. '/func.php';
//    include  __DIR__. '/func.php';
//    require_once __DIR__. '/func.php';
    echo 'Kyky ept! <br>';
    echo __FUNCTION__, '<br>';
    tytytyt();
}

hello();
hello();
hello();

$elements = scandir(__DIR__);
$filtered = array_filter($elements, function ($item) {
    return !in_array($item, ['.', '..']);
});
var_dump($filtered);

$test = function () {
    echo 'TEST', '<br>';
};
$test();
call_user_func($test);


