<?php

$comment = serialize($_POST);

$error = wordsFilter($_POST['comment']);
if ($error) {
    header("Location: error.php?message={$error}");
    exit;
}

$dir = __DIR__. '/storage/' . date('Y-m-d');
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

function wordsFilter(string $messenge): ? string
{
    $blacklist = [
        'jepa',
        'nigga',
        'loh',
    ];
    $errors = [];
    foreach ($blacklist as $word) {
        $contains = stripos($messenge, $word);
        if ($contains !== false) {
            $errors[] =$word;
        }
    }
    if ($errors) {
        $words = implode(',', $errors);
        if (count($errors) > 1) {
            $prefix = 'Words';
            $sufix = 'are';
        } else {
            $prefix = 'Word';
            $sufix = 'is';
        }

        return "{$prefix} '{$words}' {$sufix} not accepted";
    }
    return null;
}