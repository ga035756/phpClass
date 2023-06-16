<?php
class Playground
{
    //屬性 property
    public $name = null;

    //建構子函數 初始化函數
    function __construct($name)
    {
        $this->name = $name;
    }

    //method方法
    function buildRollerCoaster($complete)
    {
        $complete($this->name);
        return $this;
    }

    function buildFerrisWheel($complete)
    {
        $complete($this->name);
        return $this;
    }
}