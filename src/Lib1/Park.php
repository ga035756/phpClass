<?php
namespace Lib1;

use Lib2\Tree;

class Park
{
    function __toString()
    {
        return "This is Park\n";
    }

    function info()
    {
        $tree = new Tree(10);
        echo "{$tree->count} trees in th park<br>";

    }
}
?>