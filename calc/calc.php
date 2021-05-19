<?php

if (empty($_GET)) {
    return 'ERRORE';
}

if (empty($_GET['operation'])) {
    return 'ERRORE';
}

if (empty($_GET['x1']) || empty($_GET['x2'])) {
    return 'FATAL ERRORE';
}

$x1 = $_GET['x1'];
$x2 = $_GET['x2'];

$expression = $x1 . ' ' . $_GET['operation'] . ' ' . $x2 . ' = ';

switch ($_GET['operation']) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    case '*';
        $result = $x1 * $x2;
        break;
    case '/';
        $result = $x1 / $x2;
    default:
        return 'FATAL';
}

return $expression . $result;
