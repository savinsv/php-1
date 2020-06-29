<?php
    function run(){
        echo "Старт...<br>";
        //var_dump($_SERVER);
        echo getPage();
        echo "<br>";
        var_dump($_POST);
    }

    function getPage(){
        if(!empty($_GET)){
        return "Пришло в GET:<br>" .var_export($_GET,true);
        }
        return "Пусто в массиве GET...";
    }

    function getAction(){

    }