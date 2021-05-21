<?php

$array = range(0, 10);

for ($i = 0; $i < 5; $i += 2) {
//    if ($i % 2 === 0) {
//        var_dump($i);
//    }
    var_dump($i);
}

$count = count($array);
for ($i = 0; $i < count($array); $i++) {
    var_dump($array[$i]);
}


for ($col =1; $col <= 10; $col++) {
    for ($row = 1; $row <= 10; $row++) {
        $result = $col * $row;
        echo "{$col} x {$row} = {$result}<br>";
    }
    echo '<br>';
}