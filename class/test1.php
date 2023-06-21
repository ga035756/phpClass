<?php
// $str=file_get_contents('data.txt');
// echo $str;

// file_put_contents('data.txt','1234');

// if(!file_exists('documents')){
//     mkdir('documents');
// }else{
//     echo 'file exists';
// }

// file_put_contents('documents/aaa.txt','hello');
// unlink('documents/aaa.txt');


//mac 
//chown
//chgrp
//chmod

// $str = date('Y/n/d H:i:s');
// echo $str.'<br>';
//php.ini timezone修改
require('DB.php');
DB::select("select * from bill_new2 where tel ='2222' limit 1", function ($rows) {
    echo $rows[0]['dd'];
    $d = date_create($rows[0]['dd']);
    $epoch = date_format($d, 'U');
    // echo $epoch;
    $arr = getdate($epoch);

    echo '<pre>';
    print_r($arr);
    echo '</pre>';

    echo $arr['year'];
});
// $d=date_create('2023/6/21 8:10:10');
// $d = date_create($rows[0]['dd']);
// $epoch = date_format($d, 'U');
// // echo $epoch;
// $arr = getdate($epoch);
