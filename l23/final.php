<?php

class A
{
    final public function test(): string
    {
        return __METHOD__
    }
    public function qwerty(): string
    {
        return __METHOD__;
    }
}

class B
{
    public function qwerty(): string
    {
        return __METHOD__;
    }
}

$b = new B();
var_dump(
    $b->test(),
    $b->qwerty()
);