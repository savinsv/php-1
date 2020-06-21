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
        //var_dump($_GET);
        $id = (int)$_GET['show'];
        $link = mysqli_connect('localhost', $user,$passwd);
        if ($link) {
            mysqli_select_db($link,'gb_base');
            $result = mysqli_query($link,"select * from images where id = $id;");
         //   var_dump($result);
            if ($result){
                $row = mysqli_fetch_assoc($result);
                $data = '<div class="product">';
                $data .= '<h3 class="hits"> Просмотре: '.((int)$row['hits']+1) ."</h3>";
                $data .= "Размер: " .$row['size'] .' байт.<br>';
                $data .= 'Высота: ' .$row['height'] ."\t" .'Ширина: ' .$row['width'];
                $data .= '<h4 class="head">' .$row['caption'] .' №'. ($row['id']) .'</h4>';
                $data .= '<div class="imgboxfull"><a href="single.php?show='.$row['id'].'" target="_blank"><img src='.$row['path'] .
                ' alt="product '.($row['id']) .'" class="img"></a></div>';
                $data .= '</div>';
                echo $data;
                $result = mysqli_query($link,"update images set hits = " .((int)$row['hits']+1) ." where id = $id;") ;               
            } else {
                echo "Нет такой картинке в базе...";
            };
        } else {
            echo "Ошибка подключения к базе...";
        };
    ?>
</body>
</html>