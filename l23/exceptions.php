<?php
class SkillUpExceptions extends Exception
{

}

function errorGenerator()
{
    $randomInt = random_int(0, 5);
    var_dump($randomInt);

    switch ($randomInt) {
        case 0:
            throw new SkillUpExceptions('Test exception demonstration', 543);
        case 1:
            throw new RuntimeException('Other exception', 12);
        case 2:
            throw new LogicException();
        case 3:
            throw new OutOfRangeException();
    }

    if ($randomInt === 0)
    {
        throw new SkillUpExceptions('Test exception demonstration', 543);
    } elseif ($randomInt === 1) {
        throw new RuntimeException('Other exception', 12);
    }

    echo "fffff";
}

try {
    errorGenerator();
} catch (SkillUpExceptions | RuntimeException $exception) {
    var_dump($exception);
    echo ($exception->getTraceAsString());
} catch (Exception $exception){
    var_dump('log', $exception);
} finally {
    echo 'That\'s all folks';
}
echo 'llllllllllll';

