<?php
session_start();
requireValidSession();

$exception = null;
$userData = [];

if(count($_POST) === 0 && isset($_GET['update']))
{
    $user = User::getOne(['id' => $_GET['update']]);
    $userData = $user->setValues();
    $userData['password'] = null;
}

if(count($_POST) > 0) {
    try {
        $dbUser = new User($_POST);
        if($dbUser->id){
            $dbUser->update();
            addSucessMsg('Usuário alterado com sucesso!');
            header('Location: users.php');
            exit();
        } else {
            $dbUser->insert();
            addSucessMsg('Usuário cadastrado com sucesso!');
        }
        $_POST = [];
    } catch(Exception $e) {
        $exception = $e;
    } finally {
        $userData = $_POST;
    }
}

loadTemplateView('save_user', $_POST + ['exception' => $exception]);
