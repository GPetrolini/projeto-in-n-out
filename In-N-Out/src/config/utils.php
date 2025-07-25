<?php

declare(strict_types=1);

function addSucessMsg($msg)
{
    $_SESSION['message'] = [
        'type' => 'success',
        'message' => $msg
    ];
}

function addErrorMsg($msg)
{
    $_SESSION['message'] = [
        'type' => 'error',
        'message' => $msg
    ];
}