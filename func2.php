<?php
$a = function () {
    echo 'hello a<br>';
};
//匿名函數

function test()
{
    echo 'hello test<br>';
}
//具名函數
test();
$a();

function add($a, $b)
{
    f($a + $b);
    // return $a+$b;
}

function f($ans)
{
    echo $ans;
}
$answer = add(51, 3);
echo $answer.'<br>============================<br>';


function add2($a,$b,$f){
    $f($a+$b);
}

add2(5,6,function($ans){
    echo '<h1>'.$ans.'</h1>';
});