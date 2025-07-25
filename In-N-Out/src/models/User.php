<?php

declare(strict_types=1);
class User extends Model
{
    protected static $tableName = 'users';
    protected static $columns = [
        'id',
        'name',
        'password',
        'email',
        'start_date',
        'end_date',
        'is_admin'
    ];

    public static function getActiveUsersCount()
    {
        return static::getCount(['raw' => 'end_date IS NULL']);
    }

    public function insert()
    {
        $this->validate();
        $this->is_admin = $this->is_admin ? 1 : 0;
        if(!$this->end_date) $this->end_date = null;
        return parent::insert();
    }

    public function update()
    {
        $this->validate();
        $this->is_admin = $this->is_admin ? 1 : 0;
        if(!$this->end_date) $this->end_date = null;
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::update();
    }

    private function validate()
    {
        $errors = [];

        if(!$this->name) {
            $errors['name'] = 'Nome � um campo abrigat�rio.';
        }

        if(!$this->email) {
            $errors['email'] = 'Email � um campo abrigat�rio.';
        } elseif(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email inv�lido.';
        }

        if(!$this->start_date) {
            $errors['start_date'] = 'Data de Admiss�o � um campo abrigat�rio.';
        } elseif(!DateTime::createFromFormat('Y-m-d', $this->start_date)) {
            $errors['start_date'] = 'Data de Admiss�o deve seguir o padr�o dd/mm/aaaa.';
        }

        if($this->end_date && !DateTime::createFromFormat('Y-m-d', $this->end_date)) {
            $errors['end_date'] = 'Data de Desligamento deve seguir o padr�o dd/mm/aaaa.';
        }

        if(!$this->password) {
            $errors['password'] = 'Senha � um campo abrigat�rio.';
        }

        if(!$this->confirm_password) {
            $errors['confirm_password'] = 'Confirma��o de Senha � um campo abrigat�rio.';
        }

        if($this->password && $this->confirm_password
            && $this->password !== $this->confirm_password) {
            $errors['password'] = 'As senhas n�o s�o iguais.';
            $errors['confirm_password'] = 'As senhas n�o s�o iguais.';
        }

        if(count($errors) > 0) {
            throw new ValidationException($errors);
        }
    }
}