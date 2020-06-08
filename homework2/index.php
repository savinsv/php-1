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

    function dividing($num1,$num2){
        if ($num2 != 0){
            return $num1/$num2; 
        }
    };


    function mathOperation($arg1, $arg2, $operation){
        switch ($operation){
            case "сумма":
                return sum($arg1,$arg2);
                break;
            case "разность":
                return difference($arg1,$arg2);
                break;
            case "произведение":
                return product($arg1,$arg2);
                break;
            case "деление":
                return dividing($arg1,$arg2);
                break;
            default:
                return "Error: not found ".$operation;
        };
    };

    function show_task1(){
        $data ='<div class="firstTask">Задание №1 <br>';
        $data .= "Получаем случайное число от -20 до +20 и присваиваем переменной a. <br>";
        $a = rand(-20,20);
        $data .= "a = ".$a ."<br>";
        $data .= "Получаем случайное число от -20 до +20 и присваиваем переменной b. <br>";
        $b = rand(-20,+20);
        $data .= "b = ".$b ."<br>";
        if ($a >=0 and $b >= 0){
            if ($a >= $b){
              $data .= "Разность a и b равна: ".difference($a,$b);  
            } else {
                $data .= "Разность a и b равна: ".difference($b,$a);  
            };
        } else if ($a < 0 and $b < 0){
            $data .= "Произведение a и b равно: ".product($a,$b);
        } else if ($a >0 || $b >=0){
            $data .= "Сумма a и b равна: ".sum($a,$b);
        };
        $data .= '</div>';
        return $data;
    };

    function show_task2(){
        $data ='<div class="secondTask">Задание №2 <br>';
        $data .= "Получаем случайное число от 0 до 15 и присваиваем переменной a. <br>";
        $a = rand(0,15);
        $data .= "a = ".$a ."<br>";
        $data .= "Выводим числа от значения переменной a до 15:<br>";
        switch($a){
            case 0:
                $data .= $a."<br>";   
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                break;
            case 1:
                $data .= $a."<br>";   
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                break;
            case 2:
                $data .= $a."<br>";   
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                break;
            case 3:
                $data .= $a."<br>";   
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                break;
            case 4:
                $data .= $a."<br>";   
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                break;
            case 5:
                $data .= $a."<br>";   
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                break;
            case 6:
                $data .= $a."<br>";   
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                break;
            case 7:
                $data .= $a."<br>";   
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                break;
            case 8:
                $data .= $a."<br>";   
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                break;
            case 9:
                $data .= $a."<br>";   
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                break;
            case 10:
                $data .= $a."<br>";   
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                break;
            case 11:
                $data .= $a."<br>";   
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                break;
            case 12:
                $data .= $a."<br>";   
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                break;
            case 13:
                $data .= $a."<br>";   
                $data .= ++$a."<br>"; 
                $data .= ++$a."<br>"; 
                break;
            case 14:
                $data .= $a."<br>";   
                $data .= ++$a."<br>"; 
                break;
            case 15:
                $data .= $a."<br>";   
                break;
        };
        $data .= '</div>';
        return $data;
};

    function show_task4(){
        $data ='<div class="fourthTask">Задание №4 <br>';
        $data .= "Получаем случайное число от 1 до 20 и присваиваем переменной a. <br>";
        $a = rand(1,20);
        $data .= "a = ".$a ."<br>";
        $data .= "Получаем случайное число от 1 до 20 и присваиваем переменной b. <br>";
        $b = rand(1,20);
        $data .= "b = ".$b ."<br>";
        $data .= 'Пример использования mathOperation($a,$b,"произведение")<br>';
        $data .= mathOperation($a,$b,"произведение");
        $data .= '</div>';
        return $data;
        
    };
?>

<?php
//    include ('./funcs.php');
    $myindex = file_get_contents('sablon.html');
    $myindex = str_replace('{{Task1}}',show_task1(),$myindex);
    $myindex = str_replace('{{Task2}}',show_task2(),$myindex);
    $myindex = str_replace('{{Task4}}',show_task4(),$myindex);
    $myindex = str_replace('{{ThisYear}}',"Создано сие 'твориение' ".date("Y")." года.",$myindex);
    echo $myindex;
?>