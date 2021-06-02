<?php

$comment = $_POST;

$dir = __DIR__. '/story/' . data('Y-m-d');
if (!is_dir($dir)) {
    mkdir($dir);
}

$file = time() . '_' . md5($comment) . '.log';

$rout = "{$dir}/{$file}";
if (file_exists($rout)) {
    header('Location: form2.php');
    exit;
}

file_put_contents($rout, $comment);
header('Location: form2.php');

