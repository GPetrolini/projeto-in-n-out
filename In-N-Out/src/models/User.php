<?php
require_once(realpath(MODEL.PATH . '/Model.php'));

class User extends Model {
    protected static $tableName = 'users';
    protected static $columns = [
        'id',
        'name',
        'password',
        'email',
        'start_date',
        'end_date',
        'id_admin',
    ];
}
