<?php

declare(strict_types=1);

class Login extends Model
{

    public function validate()
    {
        $errors = [];

        if(!$this->email) {
            $errors['email'] = 'E-mail � um campo obrigat�rio.';
        }

        if(!$this->password) {
            $errors['password'] = 'Por favor, informe a senha.';
        }

        if(count($errors) > 0) {
            throw new ValidationException($errors);
        }
    }

    public function checkLogin()
    {
        $this->validate();
        $user = User::getOne(['email' => $this->email]);
        if($user) {
            if($user->end_date) {
                throw new AppException('Usu�rio est� desligado da empresa.');
            }

            if(password_verify($this->password, $user->password)) {
                return $user;
            }
        }
        throw new AppException('Usu�rio e Senha inv�lidos.');
    }
}
