<?php
    $name = 'не определено';
    $pass = 'не определено';

    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }
    /* if(isset($_POST['pass'])){
        $pass = md5($_POST['pass']);
    } */
    if(isset($_POST['pass'])){
        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    }
    echo "Имя: $name <br> Пароль: $pass";