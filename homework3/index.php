<?php
    require_once 'funcs.php';
    $menu = [
        'Главная' => [],
        'Новости' =>['Новости о спорте','Новости о политике','Новости о мире'],
        'Контакты' => [],
        'Справка' => []
    ];
    $html = file_get_contents('index.html');

    $html = recode($html,'ISO-8859-5');

    $html = str_replace('{menu}', appendmenu($menu),$html);

    $html = str_replace('{task1}', onDigWRem(),$html);
    $html = str_replace('{task2}', echoDigit(),$html);
    $html = str_replace('{task3}', showTowns(getTowns('address.data')),$html);
    $html = str_replace('{task4}', showtask4(),$html);
    $html = str_replace('{task5}', showtask5('Этот мир прекрасен!!! Правда!?!'),$html);

    $html = str_replace('{task7}', showTask7(),$html);

    echo $html;
   // getTowns('address.data');
  // var_dump($menu);
    
?>