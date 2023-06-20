<?php
//public , protected , private
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
        $complete($this->name, '舊式的');
        return $this;
    }

    function buildFerrisWheel($complete)
    {
        $complete($this->name);
        return $this;
    }

    function ticketPrice($memberID = null)
    {
        if ($memberID == null) {
            echo '250 dollers<br>';
        } else {
            $this->staffTicket();
        }
    }
    private function staffTicket()
    {
        echo '員工價 200 dollers<br>';
    }
}