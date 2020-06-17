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
            $link = mysqli_connect('localhost', 'gvido','itsmylife');
            var_dump(mysqli_select_db($link,'gb_base'));
            var_dump(mysqli_query($link,'check TABLE images;'));
            //var_dump($link);
            
        //    $exts = ['jpg','png','gif'];
            $file_list = get_files(/*$rootDir*/ "./img",exts);
      //      var_dump($file_list);
           // exit;
            foreach ($file_list as $key => $file) {
                //var_dump(getimagesize($rootDir ."/img/".$file)); 
                $data = '<div class="products-item">';

                $data .= round((filesize(/*$rootDir ."/img/". */$file)/1024),2,PHP_ROUND_HALF_UP). ' Kb<br>';
                $w_h = getimagesize(/*$rootDir ."/img/". */$file);
                $data .= 'width: ' .$w_h[0]."\t";
                $data .= 'height: ' .$w_h[1];

                $data .= '<h2 class="head">Картинка '. ($key+1) .'</h2>';
                $data .= '<div class="imgbox"><a href="'/*."../img/" */.$file.'" target="_blank"><img src='/*."../img/" */.$file .' alt="product '.($key+1) .'" class="img"></a></div>';
                $data .= '</div>';
                echo $data;
            };
        ?>
</div>