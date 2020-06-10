<?php
    require_once 'funcs.php';

    $html = file_get_contents('index.html');

    $html = recode($html,'ISO-8859-5');
    $html = str_replace('{task1}', onDigWRem(),$html);
    $html = str_replace('{task2}', echoDigit(),$html);
    echo $html;
    
?>