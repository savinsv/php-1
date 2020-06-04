<?php
$currentDate = date('Y') ;
$var_h1 = '';
$title = 'Geekbrains - ';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
    $title .=$currentDate; 
    echo $title; 
    ?></title>
</head>
<body>
    <?php
        $var_h1 = '<h1> Обучение в Geekbrains '.$currentDate.' год. </h1>';
        echo $var_h1;
    ?>
</body>
</html>