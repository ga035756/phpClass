<?php
// $a = 10;
// $s = (string)$a;
// echo "hello,{$a}!";
// echo "<br>";
// var_dump($s);


// $a=[1,2,3,4];

// echo "<pre>";
// var_dump($a);
// print_r($a);
// echo "<pre>";


// $a = 'david';
// echo "hello $a !";
// die($a);
// header('location:https://www.google.com')

// $a = $_POST['a'];
// $b = $_POST['b'];

// $a = $_GET['a'];
// $b = $_GET['b'];

$a = (float) $_REQUEST['a'];
$b = (float) $_REQUEST['b'];
$op = $_REQUEST['op'];

switch ($op) {
    case 'add':
        $op = '+';
        $answer = $a + $b;
        break;
    case 'sub':
        $op = '-';
        $answer = $a - $b;
        break;
    case 'mul':
        $op = 'x';
        $answer = $a * $b;
        break;
    case 'div':
        $op = '/';
        $answer = $a / $b;
        break;
}

$arr=[];
$arr['a']=$a;
$arr['b']=$b;
$arr['op']=$op;
$arr['answer']=$answer;
echo json_encode($arr,JSON_UNESCAPED_UNICODE);
// print_r($arr);

// echo "{
// \"a\":${a},
// \"b\":${b},
// \"op\":\"${op}\",
// \"answer\":${answer}
// }"

// echo $a + $b;
    ?>