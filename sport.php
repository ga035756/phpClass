<?php
abstract class Sport
{
    // function getTitle()
    // {
    //     return '運動';
    // }
    abstract function getTitle();
}

class BasketBall extends Sport
{
    public $description="play one times basketball a week";
    //實體變數
    function getTitle()
    {
        return '籃球';
    }
}
class FootBall extends Sport
{
    public static $description="play two times football a month";
    //靜態變數
    function getTitle()
    {
        return '足球';
    }
}

class Shopping
{
    function getTitle()
    {
        return '購物';
    }
}
function play(Sport $x)
{
    echo "play {$x->getTitle()}";
}

function playBasketBall()
{
    echo 'old school play' . (new Basketball())->getTitle() . '<br>';
}
playBasketBall();
play(new BasketBall());
play(new FootBall());
// play(new Shopping());

// $sport1=new FootBall();
// echo '<br>'.$sport1->description;
// $sport2=new FootBall();
// echo '<br>'.$sport2->description;

echo '<br>'.football::$description;