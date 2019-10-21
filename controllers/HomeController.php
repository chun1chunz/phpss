<?php
require_once './models/Product.php';
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
        
        include_once './views/user/cart.blade.php';
    }
    public function update(){
        $key = $_GET['key'];
        $number = $_GET['number'];
       
        $_SESSION['cart'][$key]['number'] = $number;

        $_SESSION['update']="Cập nhật món đã đặt thành công!!!";

        header("location: cart");
        
    }
    public function pay(){

        echo 'chờ thanh toán';
    }
}

?>
