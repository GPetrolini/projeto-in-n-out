<?php

loadModel('Login');

if(count($_POST) > 0)
{
    $login = new Login($_POST);
    try {
        $login->checkLogin();
        echo "Usu�rio {$user->name} logado";
    } catch(Exception $e) {
        echo 'Falha no login';
    }
}

loadView('Login');
