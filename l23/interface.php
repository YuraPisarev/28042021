<?php

interface NoisyInterface
{
    public function makeNoise(): string;
}

interface PainfulInterface
{
    public function scratch(): string;
    public function bite(): string;
}

abstract class Animal implements NoisyInterface
{

}

class Cat extends Animal implements PainfulInterface
{
    public function makeNoise(): string
    {
        return 'Meow';
    }
    public function scratch(): string
    {
        return 'Scratch meow';
    }
    public function bite(): string
    {
        return 'Bite meow';
    }
}


class Dog extends Animal
{
    public function makeNoise(): string
    {
        return 'Woof';
    }
}
class Lizard implements PainfulInterface
{
    public function scratch(): string
    {
        return 'Lizard scratching';
    }
    public function bite(): string
    {
        return 'Lizard biting';
    }
}

$animals = [
    new Cat('Murzik');
    new Dog('Sharik');
    new Lizard();
]


var_dump($animals);

foreach ($animals as $animal) {
    if ($animal instanceof NoisyInterface) {
        echo $animal->makeNoise(), '<br>';
    }
}
