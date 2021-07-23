<?php

class Cat
{
    const START_LIVES = 9;

    static int $totalDistanceRunned = 0;
    var int $distanceRunned;

    var string $furColor = 'Black';
    var string $name;
    var int $age;

    function run(): void
    {
        echo 'Static', self::$totalDistanceRunned, '<br>';
        echo 'Object', $this->distanceRunned, '<br>';

        $this->initLives();
        echo "{$this->name} run fast<br>";

        $runned = random_int(10,100);
        self::$totalDistanceRunned += $runned;
        $this->distanceRunned += $runned;

        echo 'Static', self::$totalDistanceRunned, '<br>';
        echo 'Object', $this->distanceRunned, '<br>';

        echo '--------', '<br>', '<br>';
    }

    function initLives(): void
    {
        echo self::START_LIVES . "Lives initiated {$this->name}<br>";
    }
    static function
}

$cat1 = new Cat();
$cat2 = new Cat();
$cat1->age = 7;

$cat1->furColor = 'Red';
$cat2->furColor = 'White'

var_dump($object, $object2);