<?php

$var1 = (array)'13';
var_dump($var1);

$var2 = (int)'123dsfdsfds';
var_dump($var2);

$var3 = (bool)123;
var_dump($var3);

var_dump((bool)'');
var_dump((bool)'0');

$obj = new stdClass();
var_dump((bool)$obj);

var_dump((int)((0.1+0.7)*10));

