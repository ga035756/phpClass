<?php

$a = 10;
function f(&$a)
{
    $a = 20;
    echo 'a=>' . $a . 'call by address <br>';
}

f($a);
echo $a . 'call by address <br>';

$b = 10;
function f2($b)
{
    $b = 20;
    echo 'call by value' . 'b=>' . $b . '<br>';
}

f2($a);
echo 'call by value' . $b;




$c = [9];
function f3($c)
{
    global $c;
    $c[0] = 30;
    echo 'call by value' . 'c=>' . $c[0] . '<br>';
}

f3($c);
echo 'call by value' . $c[0];

$d = [9];
function f4()
{
    global $d;
    $d[0] = 50;
    echo 'call by value' . 'd=>' . $d[0] . '<br>';
}

f4();
echo 'call by value' . $d[0].'<br>=============================<br>';

function inc()
{
    static $n = 0;
    //static 靜態變數 只會初始化一次 ,且Function結束後,記憶體不會被回收
    $n += 1;
    echo $n;
}
inc();
inc();

echo '<br>=============================<br>';


//資料型態前加上?  int nullable
function nf1(?int $na){
    echo $na;
    echo '<pre>';
    var_dump($na);
    echo '</pre>';
}
nf1(null);

// sql call by address => inout
//陣列不要放太多資料 , 使用 call by address !
?>
<script>
    let a = [17];
    function f(a) {
        a[0] = 20;
    }
    f(a);
    document.write('<br>javascript<br>' + a);
</script>