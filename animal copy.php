<?php
// $animals = ['Lion', "Elephant", "Giraffe", "Zebra"];
$users = [];
$users = ['name' => 'david', 'age' => 38];
$users = ['name' => 'die', 'age' => 99];


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
    <!-- <table border="1">
        <tr>
            <th>動物名稱</th>
            <?php foreach ($animals as $animal) { ?>
            <tr>
                <td>
                    <?= $animal ?>
                </td>
            </tr>

        <?php } ?>
    </table> -->
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