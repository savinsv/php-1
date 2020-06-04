<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task5</title>
</head>
<body>
    <?php
    echo "Поменять значения переменных a и b местами.";
    echo '<br>';
    $a = 5;
    $b = 13;
    echo "a равно $a. b равно $b.";
    echo '<br>';
    [$a, $b] = [$b, $a];
    echo "Меняем местами:";
    echo '<br>';
    echo "a равно $a. b равно $b.";
    echo '<br>';
    echo '<br>';
    $a = "TRUE";
    $b = "FALSE";
    echo "a равно $a. b равно $b."; 
    [$a, $b] = [$b, $a];
    echo '<br>';
    echo "Меняем местами:";
    echo '<br>';
    echo "a равно $a. b равно $b.";

    ?>
</body>
</html>