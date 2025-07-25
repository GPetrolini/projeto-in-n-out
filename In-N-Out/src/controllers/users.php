<?php

session_start();
requireValidSession(true);

if(isset($_GET['delete'])){
    try {
        User::deleteById($_GET['delete']);
        addSucessMsg('Usuario foi excluido com sucesso');
    }catch(Exception $e){
        if(stripos($e->getMessage(), 'FOREIGN KEY')){
            addErrorMsg('N�o � poss�vel excluir o usu�rio com registros de ponto');
        }
        $exception = $e;
    }
}

$users = User::get();
foreach($users as $user)
{
    $user->start_date = new (DateTime($user->start_date))->format("d/m/Y");
    if($user->end_date) {
        $user->end_date = new (DateTime($user->end_date))->format("d/m/Y");
    }
}

loadTemplateView('users',[
    'users'=>$users,
    'exception' => $exception
]);