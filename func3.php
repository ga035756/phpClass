<?php

class Playground
{
    public $name = null;

    function buildRollerCoaster()
    {
        echo "{$this->name}遊樂園建立了雲霄飛車!<br>";
    }
    function buildFerrisWheel()
    {
        echo "{$this->name}遊樂園建立了摩天輪!<br>";
    }
}

$play1 = new Playground();
$play1->name = '森林谷';
$play1->buildRollerCoaster();
$play1->buildFerrisWheel();

$play2 = new Playground();
$play2->name = '乾燥沙漠';
$play2->buildRollerCoaster();
