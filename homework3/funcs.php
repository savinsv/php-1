<?php
    //Просто перекодировка шаблона
    function recode($anyText, $badEncode){
        $notUtf = $badEncode;
        if (strpos($anyText,$notUtf)){
            $anyText = mb_convert_encoding($anyText,'UTF-8',$notUtf);
            $anyText = str_replace($notUtf,'UTF-8',$anyText);
        };
        return $anyText;
    };

    //Функция вывода по заданию №1
    function onDigWRem($left=0,$right=100,$dig=3){
        $i = $left;
        $data = '<div><h2>Задание 1</h2><br>';
        while ($i<=$right){
            if ($i % $dig === 0){
                $data .= $i.' делится без остатка на '.$dig.'<br>';
            };
            $i++;
        };
        $data .= '</div><br><hr>';
        return $data;
    };

    //Функция вывода по заданию №1
    function echoDigit($left=0, $right=10){
        $i = $left;
        $data = '<div><h2>Задание 2</h2><br><table>';
        do {
            if ($i === 0){
                $data .= '<tr><td>'.$i.'</td><td> - </td><td>ноль.</td></tr>';
            } else if ($i !== 0 and $i % 2 !== 0){
                $data .= '<tr><td>'.$i.'</td><td> - </td><td>нечетное число.</td></tr>';
            } else if ($i !== 0 and $i % 2 === 0){
                $data .= '<tr><td>'.$i.'</td><td> - </td><td>четное число.</td></tr>';
            }; 
            $i++;
        } while ($i<=$right);
        $data .= '</table></div><br><hr>';
        return $data;
    };

    //Функция подгрузки данных из файла
    function getTowns($file){
        $darray = file($file);
        $oarray = [];
        if ($darray){
            foreach($darray as $value){
                $record = explode(';',$value);
                    $oarray[$record[2]][] = $record[1];
            };
        };
 //       $darray = $oarray;
        return $oarray;
    };

    //Функция вывода массива городов
    function showTowns($array){
        $data = '<div><h2>Задание 3</h2><br>';
        foreach($array as $key => $value){
            $data .= '<h4>' .$key .':</h4><br>';
            $data .= implode(', ',$value) .'<br><br>'; 
        };
        $data .= '</div><br><hr>';
        return $data;
    };
    
    //Функция транслитеррации
    function smTranslit($text){
        $base = ['а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>"'",' '=>' ','-'=>'-','_'=>'_','!'=>'!','?'=>'?'];
        $text = mb_strtolower($text);
        $chars = preg_split('//u',$text, -1, PREG_SPLIT_NO_EMPTY);
        $text='';
        for ($i = 0;$i<count($chars);$i++){
           $text .= $base[$chars[$i]];
        };
    //Так без цикла заменим все    
   //     $text = strtr($text,$base);
        return $text;
    };

    //Функция вывода задания №4
    function showtask4($anyText='запорожец - отличный автомобиль!'){
        $data = '<div><h2>Задание 4</h2><br>';
        $data .= 'Введенный текст: ' .$anyText .'<br>';
        $data .= 'Перекодированный текст: ' .smTranslit($anyText);
        $data .= '</div><br><hr>';
        return $data;
    };

    //Функция вывода задания5
    function showTask5($text){
        $data = '<div><h2>Задание 5</h2><br>';
        $data .= 'Введенный текст: ' .$text .'<br>';
        $data .= 'Перекодированный текст: ' .str_replace(' ','_',$text);
        $data .= '</div><br><hr>';
        return $data;
    };

    //Функция формирования меню Задание №6
    function appendmenu($menuArray){
        $data = '<ul>';
        foreach ($menuArray as $key => $val){
            $data .= '<li><a href="#"><span>' .$key .'</span></a>';
            if (count($val)>0){
                $data .= '<ul>';
                foreach ($val as $value){
                    $data .= '<li><a href="#"><span>' .$value .'</span></a></li>';
                };
                $data .= '</ul>';
            };
            $data .= '</li>';
        };
        $data .='</ul>';
        return $data;
    };

    //Функция вывода задания 7
    function showTask7(){
        $data = '<div><h2>Задание 7</h2><br>';
        for ($i = 0;$i <= 9;$data .=$i.' ',$i++);
        $data .= '</div><br><hr>';
        return $data;
    };
?>