<?php
require_once './models/BaseModel.php';
require_once './models/Login.php';
class User extends BaseModel
{
    public $table = 'users';

        public $cols = ['name', 'address', "phone", 'email', 'role', 'password', 'avatar'];


}



?>