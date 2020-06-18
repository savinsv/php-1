<div class="products">
    <?php
/*             function check_ext($ext,$array_exts){
                if (($ext !=='') and (is_array($array_exts)) and (count($array_exts)>0)){
                    return in_array($ext,$array_exts);
                };
            };

            function get_ext($filename) {
                return substr(strrchr($filename,'.'),1);
            };
            
            function get_files($files_path,$exts) {
                $files = [];
                if (is_dir($files_path)) {
                    $images = dir($files_path);
                    while (false !== ($entry = $images->read())){
                        $ext = mb_strtolower(get_ext($entry));
                        if ($entry !== '.' and $entry !== '..' and check_ext($ext,$exts)) {
                            $files[] = $entry;
                        }; 
                    };
                };
                return $files;
            };
 */
            $link = mysqli_connect('localhost', $user,$passwd);

/*             $cr_db = 'newDB';
            if (mysqli_select_db($link,$cr_db)){
                echo "Выбрана база данных ($cr_db).";
            } else {
                //var_dump(create_db($link,$cr_db));
                echo "База данных ($cr_db) создана (".create_db($link,$cr_db).").";
            };
            var_dump(mysqli_select_db($link,'gb_base'));
            var_dump(mysqli_query($link,'check TABLE images11;'));
            echo "<br>";
            var_dump(mysqli_error($link));
 */
                mysqli_select_db($link,'gb_base');
                $result = mysqli_query($link,'select * from images order by hits desc;');
                // $result->num_rows;
                //var_dump($result);
                $i = 0;
                while ($i<$result->num_rows){
                    $row = mysqli_fetch_assoc($result);
/*                     foreach ($row as $key => $value){
                        echo $key ." => " .$value ."<br>";
                    };
                    echo "<br>";
 */
                    $data = '<div class="products-item">';
                    $data .= "Размер: " .$row['size'] .' байт.<br>';
                    $data .= 'Высота: ' .$row['height'] ."\t" .'Ширина: ' .$row['width'];
                    $data .= '<h2 class="head">' .$row['caption'] .' №'. ($row['id']) .'</h2>';
                    $data .= '<div class="imgbox"><a href="single.php?show='.$row['id'].'" target="_blank"><img src='.$row['path'] .
                    ' alt="product '.($row['id']) .'" class="img"></a></div>';
                    $data .= '</div>';
                    echo $data;
                    $i++; 
                };
                


//                $file_list = get_files(/*$rootDir*/ "./img",exts);

//                foreach ($file_list as $key => $file) {
//                $data = '<div class="products-item">';

//                $data .= filesize($file) .'<br>';
//                $w_h = getimagesize(/*$rootDir ."/img/". */$file);
//                $data .= 'width: ' .$w_h[0]."\t";
//                $data .= 'height: ' .$w_h[1];

//                $data .= '<h2 class="head">Картинка '. ($key+1) .'</h2>';
//                $data .= '<div class="imgbox"><a href="'/*."../img/" */.$file.'" target="_blank"><img src='/*."../img/" */.$file .' alt="product '.($key+1) .'" class="img"></a></div>';
//                $data .= '</div>';
//                echo $data;
//            };
            
        ?>
</div>