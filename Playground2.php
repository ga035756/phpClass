<?php
require_once('Playground.php');

class Playground2 extends Playground
{
    function buildTrees($value, $complete)
    {
        $complete($this->name, $value);
        return $this;
    }
}