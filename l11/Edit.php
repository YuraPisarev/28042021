<?php

require __DIR__ . '/header.php';

$comments = require __DIR__ . '/comments-list.php';

$file = __DIR__ . '/storage/' . $_GET['id'];
if (!file_exists($file)) {
    header('Locatoin: error.php?message=Comment is not exists');
}