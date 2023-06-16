<?php

// arsort($animals);
// ksort($animals);
// rsort($animals);
// rsort($animals);


// $animals = ['Lion' => 3, "Elephant" => 1, "Giraffe" => 7, "Zebra" => 6];
// $str = json_encode($animals, JSON_UNESCAPED_UNICODE);
// die($str);


$str = '{"Lion":3,"Elephant":1,"Giraffe":7,"Zebra":6}';
$animals = json_decode($str,true);



echo "<pre>";
print_r($animals);
echo "</pre>";
$users = [];
$users[] = ['name' => 'david', 'age' => 38];
$users[] = ['name' => 'die', 'age' => 99];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>



<body>
    <table border="1">
        <tr>
            <th>動物名稱</th>
            <?php foreach ($animals as $animal => $quantity) { ?>
            <tr>
                <td>
                    <?= $animal ?>
                </td>
                <td>
                    <?= $quantity ?>
                </td>
            </tr>

        <?php } ?>
    </table>

    <table border="1">
        <tr>
            <th>name</th>
            <th>age</th>
            <?php foreach ($users as $user) { ?>
            <tr>
                <?php foreach ($user as $key => $value) { ?>
                    <td>
                        <?= $value ?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>

</html>