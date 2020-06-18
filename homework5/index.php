<?php
    require_once './engine/funcs.php';
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html lang="ru">
<?php
    require_once $rootDir.'/templates/head.php';
?>
<body>
    <?php
       // var_dump(scandir('img'));
        require_once $rootDir.'/templates/catalog.php';
    ?>
</body>
</html>