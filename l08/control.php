<?php

for ($i = 0; $i < 10; $i++) {
    if ($i === 3) {
        continue;
//        break;
    }

    var_dump($i);
}

$letters = range('A', 'Z');
$numbers = range(1, 10);

foreach ($letters as $numbers) {
    foreach ($numbers as $letters) {
        if ($numbers === 2) {
            break(2);
//            continue
        }

        var_dump("{$letters} > {$numbers}");
    }
}
