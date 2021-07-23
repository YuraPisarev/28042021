<?php

//require_once __DIR__ . '/models/ContactModel.php';

spl_autoload_register(function (string $class) {
    $class = str_replace('_', DIRECTORY_SEPARATOR, $class);
    $class = __DIR__ . DIRECTORY_SEPARATOR . $class. '.php';
    if (!file_exists($file)) {
        throw new RuntimeException("Class $class can not be loaded");
    }

    require_once $file;
});

$contact = new ContactModel();
var_dump($contact);