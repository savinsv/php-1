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
?>