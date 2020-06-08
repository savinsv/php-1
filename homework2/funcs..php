<?php
    function sum($num1, $num2){
        return $num1 + $num2;
    };

    function difference($num1, $num2){
        return $num1 - $num2;
    }; 

    function product($num1,$num2){
        return $num1 * $num2;
    };

    function show_task1(){
        $data ='<div class="firsttask">';
        $data .= "Получаем случайное число от -20 до +20 и присваиваем переменной a. <br>";
        $a = rand(-20,+20);
        $data .= "a = ".$a ."<br>";
        $data .= '</div>';
        return $data;
    }
?>