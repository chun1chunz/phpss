<?php 
require_once './models/Product.php';
require_once './models/User.php';
require_once './models/Login.php';
require_once './models/Invoice.php';
require_once './models/Order_detail.php';

class OrderController
{
    public function index(){
       $order = Order::all();
       foreach($order as $key => $value){
        $id_order = $value->id;
        $detail= Order_detail::where2($detail->id, '=', $id_order);
        var_dump($detail); die;
        }
       
       $id_order = $order['id'];
      
       $product = Product::all();
       //var_dump($order); die;
       include_once './views/admin/order/index.php';

    }

    public function remove(){
        
    }

    public function addForm(){
       
    }

    public function saveAdd(){
       
    }


    public function editForm(){
       
    }

    public function saveEdit(){
       
    }
}   

?>