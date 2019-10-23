<?php
require_once './models/Product.php';
require_once './models/Invoice.php';
require_once './models/Order_detail.php';
class HomeController
{
    public function index(){
        //$model = Product::all();
        $total_records = Product::count();
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 8;
        $total_page = ceil($total_records / $limit);
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        // Tìm Start
        $start = ($current_page - 1) * $limit;
        $model = Product::limit($start, $limit);
        
      
        include_once './views/user/product.blade.php';
        
    }
    public function detail(){
        $id = $_GET['id'];
        $model = Product::find($id);
        
        include_once './views/user/detail.blade.php';
        
    }

    public function addCart(){
        $id = ''; 
        if( isset( $_GET['id'])) {
            $id = $_GET['id']; 
        } 
        $model = Product::find($id);

        if( ! isset($_SESSION["cart"][$id])){
            // tao moi
            $_SESSION["cart"][$id]['product_name']= $model->product_name;
            $_SESSION["cart"][$id]['image']= $model->image;
            $_SESSION["cart"][$id]['sell_price']= $model->sell_price;
            $_SESSION["cart"][$id]['number']= 1;
            
        }else{
            $_SESSION["cart"][$id]['number']+=1;
        }
        echo "<script> alert('Thêm món thành công.')</script>";
        header("location: cart");
    }
    public function remove(){
        $key = $_GET['key'];
        unset($_SESSION['cart'][$key],$_SESSION['tong'],$_SESSION['total']);
        $_SESSION['success']="Xóa món đã đặt thành công!!!";

        header("location: cart");
    }
    public function cart(){
        if(!isset($_SESSION["cart"])||$_SESSION["cart"]==null){
            $_SESSION['false']="Bạn chưa mua hàng!!!";
            header("location: product");
        }else{
            include_once './views/user/cart.blade.php';
        
        }
        
        
    }
    public function update(){
        $key = $_GET['key'];
        $number = $_GET['number'];
       
        $_SESSION['cart'][$key]['number'] = $number;

        $_SESSION['update']="Cập nhật món đã đặt thành công!!!";

        header("location: cart");
        
    }
    public function pay(){
        if(!isset($_SESSION['login'])){
            $_SESSION['login_erorr'] = "Bạn phải đăng nhập mới mua được hàng!!!";
            header("location: user_login");
        }else{
            $id = $_SESSION['login']['id'];
            $user = User::find($id);

            //var_dump($user);
            include_once './views/user/pay.blade.php';
        
        }
        
    }
    public function postPay(){
        $model = new Order();
        $model->total= $_SESSION['total'];
        $model->user_id= $_SESSION['login']['id'];
        $model->note= $_POST['note'];
        
        $model->queryBuilder =  "insert into " . $model->table 
                    . " (amount, user_id, note )"
                    . " values "
                    . " ( 
                        '$model->total',
                        '$model->user_id',
                        '$model->note'
                    )";
        $model->exeQuery();
        $total = Order::all();
        $number_id = 0;
        foreach($total as $key => $value){
            if($number_id < $value->id){
                $number_id = $value->id;
            }
        }
        $order_id = $number_id;
        $order = new Order_detail();
        
        foreach($_SESSION['cart'] as $key =>$value){
            $order->product_id = $key;
            $order->order_id = $order_id;
            $order->quanta = $value['number'];
            $order->price = $value['sell_price'];
            $order->queryBuilder =  "insert into " . $order->table 
                    . " (product_id, order_id, quanta, price )"
                    . " values "
                    . " ( 
                        '$order->product_id',
                        '$order->order_id',
                        '$order->quanta',
                        '$order->price'
                    )";
            
            $order->exeQuery();
        
        }
        unset($_SESSION['cart']);
        
        $_SESSION['order']="Đang chờ thanh toán và nhận hàng!!!";

        header('location: ./product');
        
    }
}

?>
