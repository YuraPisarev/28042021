<?php


function detFilesList() {
    $rout = $_GET['rout'] ?? '';

    $storage = __DIR__ . '/storage/';
    $dir = "{$storage}{$rout}";


    $files = scandir($dir);

    $files = array_filter(
        $files,
        static fn ($file) => $file !== '.'
    );

    return $files;

}
