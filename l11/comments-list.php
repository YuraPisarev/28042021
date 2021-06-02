<?php

$days = scandir(__DIR__ . '/story');

$days = array_filter($days, static fn ($item) => (bool)preg_match('/\d{4}\-\d{2}\-\d{2}/', $item));

$result = [];
foreach ($days as $day) {
    $dir = __DIR__ . '/story';
    $files = scandir(__DIR__ . '/story/' . $day);
    $files = array_filter($files, static fn ($item) => (bool)preg_match('/\d+_/[a-f0-9]{32}\.log/' , $item ));

    $result[$day] = [];

    foreach ($files as $file) {
        $comment = file_get_contents("{$dir}/{$file}");
        $comment = unserialize($comment);
        $comment['time'] = substr($file, 0, strpos($file, '_'));
//        $time = substr($file, 0, strpos($file, '_'));
//        preg_match('/\d+_/', $file, $time);
//        $time = substr('_', '', $time);

//        $result[$day][$time] = unserialize($comment);
    }
}

var_dump($days);