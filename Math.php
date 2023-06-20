<?php
class Math
{
    static function add($a, $b)
    {
        return $a + $b;
    }
    static function sub($a, $b)
    {
        return $a - $b;
    }
    static function mul($a, $b)
    {
        return $a * $b;
    }
    static function div($a, $b)
    {
        return $a / $b;
    }
}
// $math = new Math();
// echo $math->add(5, 3);
// echo $math->add(10, 3);
//class 等級 ->

echo math::add(5,3).'<br>';
echo math::mul(5,3);
// instance level ::