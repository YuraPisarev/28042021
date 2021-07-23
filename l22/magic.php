<?php

Class


class Magic
{
    public function __construct(string $spell)
    {
        var_dump("Spell '{$spell}' is called");
    }
    public function __set(string $key, mixed $value): void
    {
        $this->storage[$key] = $value;
    }
    public function __get(string $key): void
    {
        return $this->storage[$key] ?? null;
    }
    public function __isset(string $key): void
    {
        return array_key_exists($key, $this->storage);
    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}


$magic = new Magic('Avada Kedabra');

$magic->test = 123;
$magic->qqqqq = 'testtest';
$magic->name = 'Volan De Mord';

unset($magic);
