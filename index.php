<?php
session_start();

$url = isset($_GET['url']) ? $_GET['url'] : '/';
$baseUrl = "http://localhost/book/";
$userUrl = "http://localhost/book/user/";
$adminUrl = "http://localhost/book/views/admin";
$adminAssetUrl = "http://localhost/book/views/admin/adminlte/";

//Guest
require_once "./controllers/HomeController.php";


//login
require_once "./controllers/LoginController.php";

//admin
require_once "./controllers/admin/UserController.php";
require_once "./controllers/admin/AdminController.php";
require_once "./controllers/admin/ProductController.php";
require_once "./controllers/admin/OrderController.php";


switch($url){
    case '/':
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    case 'product':
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    case 'detail':
        $ctr = new HomeController();
        echo $ctr->detail();
        break;
    //guest
    case 'cart':
        $ctr = new HomeController();
        echo $ctr->cart();
        break;
    case 'addCart':
        $ctr = new HomeController();
        echo $ctr->addCart();
        break;
    case 'update':
        $ctr = new HomeController();
        echo $ctr->update();
        break;
    case 'remove':
        $ctr = new HomeController();
        echo $ctr->remove();
        break;
    case 'pay':
        $ctr = new HomeController();
        echo $ctr->pay();
        break;
    case 'postPay':
        $ctr = new HomeController();
        echo $ctr->postPay();
        break;
    
// đăng kí
case 'signup':
        $ctr = new LoginController();
        echo $ctr->signup();
        break;
case 'postSignup':
        $ctr = new LoginController();
        echo $ctr->postSignup();
        break;
case 'user_login':
        $ctr = new LoginController();
        echo $ctr->user_login();
        break;
case 'postLogin':
        $ctr = new LoginController();
        echo $ctr->postLogin();
        break;

/* admin */
    case 'admin':
        $ctr = new AdminController();
        echo $ctr->index();
        break;
/* Hoa don */
    // case 'admin/order':
    //     $ctr = new OrderController();
    //     echo $ctr->index();
    //     break;
/* User */
case 'admin/user':
        $ctr = new UserController();
        echo $ctr->index();
        break;
case 'admin/user-add':
        $ctr = new UserController();
        echo $ctr->addForm();
        break;
/* Product*/     
    case 'admin/product':
        $ctr = new ProductController();
        echo $ctr->index();
        break;    
    /* remove */
    case 'admin/product-remove':
        $ctr = new ProductController();
        echo $ctr->remove();
        break;
    /*add*/
    case 'admin/product-add':
        $ctr = new ProductController();
        echo $ctr->addForm();
        break;
    
    case 'admin/product-save-add':
        $ctr = new ProductController();
        echo $ctr->saveAdd();
        break;
    /*edit*/
    case 'admin/product-edit':
        $ctr = new ProductController();
        echo $ctr->editForm();
        break;

    case 'admin/product-save-edit':
        $ctr = new ProductController();
        echo $ctr->saveEdit();
        break; 

    case 'login':
        $ctr = new LoginController();
        echo $ctr->index();
        break;  

    case 'post-login':
        $ctr = new LoginController();
        echo $ctr->postLogin();
        break;    
    case 'logout':
        $ctr = new LoginController();
        echo $ctr->logout();
        break; 


    default:
        echo "404 notfound!";
        break;

}

?>