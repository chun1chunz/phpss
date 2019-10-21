<?php
require_once './models/BaseModel.php';
require_once './models/Login.php';
class Product extends BaseModel
{
	
    public $table = 'products';
    public $cols = ['image', "product_name", 'sell_price', 'list_price', 'status', 'info_1', 'detail'];
}



?>