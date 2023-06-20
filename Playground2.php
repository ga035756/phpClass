<?php
require_once('Playground.php');

class Playground2 extends Playground
{
    function buildTrees($value, $complete)
    {
        $complete($this->name, $value);
        return $this;
    }

    function buildRollerCoaster($complete){
        $complete($this->name,'360度');
        return $this;
    }
    

     function ticketPrice($memberID = null)
    {
        if ($memberID == null) {
            echo '300 dollers<br>';
        } else {
            $this->staffTicket();
        }
    }
}