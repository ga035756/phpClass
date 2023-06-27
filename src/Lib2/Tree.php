<?php
namespace Lib2;

class Tree
{
    function __construct(int $count = 0)
    {
        $this->count = $count;
    }
    function __toString()
    {
        return "This is Tree\n";
    }
}
?>