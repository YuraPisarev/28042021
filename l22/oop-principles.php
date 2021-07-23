<?php

class GrandFather
{
    private bool $demencia = true;

//    /**
//     * @return bool
//     */
//    public function isDemencia(): bool
//    {
//        return $this->demencia;
//    }

    public function setDemencia(bool $isDemencia): void
    {
        $this->demencia = $isDemencia;
    }
}


class Father
{
    protected string $eveColor = 'brown';
    protected string $hairColor = 'blond';
    protected float $height = 2.05;
//    var bool $demencia = false;

    public function work()
    {
        echo 'Male tables';
    }
}
class  Son extends Father
{
    var float $height = 1.82;

    public function work(): string
    {
        echo 'Write PHP code<br>';
    }
}
$son = new Son();
var_dump($son);
$son->work();

$grandFather = new GrandFather();
$grandFather->setDemencia(false);

var_dump($grandFather);
