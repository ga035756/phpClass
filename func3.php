<?php
// 
// require_once('Playground.php');
require_once('Playground2.php');

$playGroundName = ['森林谷', '乾燥沙漠', '死亡湖泊'];
(new Playground($playGroundName[1]))
    ->buildRollerCoaster(function ($name) {
        echo "<h2>{$name}遊樂園建立了雲霄飛車!</h2><br>";
    })
    ->buildFerrisWheel(function ($name) {
        echo "<h4>{$name}遊樂園建立了摩天輪!</h4><br>";
    });

(new Playground2($playGroundName[2]))
->buildRollerCoaster(function ($name) {
    echo "<div style='color:goldenrod'>{$name}遊樂園建立了摩天輪!<div><br>";
})
->buildTrees(200,function($name,$value){
    echo "<div style='color:goldenrod'>{$name}遊樂園種了{$value}棵樹<div>";
})





    // $play1 = new Playground($playGroundName[0]);
// // $play1->name = '森林谷';
// $play1->buildRollerCoaster();
// $play1->buildFerrisWheel();



    // $play2 = new Playground($playGroundName[1]);
// // $play2->name = '乾燥沙漠';
// $play2->buildRollerCoaster();
    ?>