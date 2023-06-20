<?php
require('DB.php');
// DB::select('select * from userinfo ', function ($rows) {
DB::select('select * from userinfo where uid = ? or uid= ?', function ($rows) {
    foreach ($rows as $row) {
        echo "{$row['cname']}<br>";
    };
// }, [null,'A01', 'A03',10,['dfsaf']]);
}, ['A01','A03']);
// });
// $photo = file_get_contents('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.storm.mg%2Flifestyle%2F45332&psig=AOvVaw0wSHAPy-ijs_m54CYieVP0&ust=1687319972573000&source=images&cd=vfe&ved=0CBEQ3YkBahcKEwiA2Zfv-tD_AhUAAAAAHQAAAAAQAw');
// $photo=file_get_contents('download_qr.jpg');
$photo=file_get_contents('https://miro.medium.com/v2/resize:fit:720/format:webp/1*FKlRYAU5z-74RYqsTYrOAQ@2x.png');
DB::update('update userinfo set image = ? where uid =?', function ($rows) {
}, [$photo, 'A03']);