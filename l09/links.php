<?php

function linked(&$p1)
{
    $p1 += 22;
}
$data = 123;
linked($data);
var_dump($data);