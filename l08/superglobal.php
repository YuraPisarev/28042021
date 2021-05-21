<?php

$qqq = 123;

var_dump($_SERVER);
var_dump($_ENV);

$GLOBALS['qqq'] = 555;
var_dump($GLOBALS);

var_dump($qqq);
