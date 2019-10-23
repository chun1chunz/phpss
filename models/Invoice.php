<?php
require_once './models/BaseModel.php';
require_once './models/Login.php';
require_once './models/Product.php';
require_once './models/User.php';
require_once './models/Order_detail.php';

class Order extends BaseModel
{
    public $table = 'orders';
}



?>