<?php

class Test

{
    public string $status = 'passed';
    public bool $isOk = false;
    protected string $cases = [1, 2, 3];
    protected int $time = 123123321;

    public function iterat()
    {

    }
}

$o1 = new Test();
$o2 = $o1;
$o3 = clone $o1;

$o2->status = 'in_progress';
$o3->status = 'done';

foreach ($o1 as $property => $value) {
    var_dump("{$property} => {$value}");
}
echo '------<br><br>';

$o1->