
<?php

$config = require  __DIR__ . '/configs/main.php' ;

require_once __DIR__ . '/helpers/strings.php';
require_once __DIR__ . '/helpers/respons.php';

require_once __DIR__ . '/components/security.php';
require_once __DIR__ . '/components/loader.php';
require_once __DIR__ . '/components/template.php';

load($_SERVER['REQUEST_URI']);