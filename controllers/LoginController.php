<?php
require_once './models/User.php';
require_once './models/Login.php';


class LoginController
{

    public function index(){
        global $baseUrl;
        global $adminUrl;
        global $adminAssetUrl;
        // echo "<pre>";
        // var_dump($products);die;
        include_once './views/admin/login/index.php';
    }


    public function postLogin(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $ob = User::where('email', '=', "'" . $email . "'")->get();
        $user = $ob[0];
        $checkpass = password_verify (  $password , $user->password );
        if ($email == $user->email && $checkpass == true) {
            session_start();
            $_SESSION['login']['email'] = $user->email;
            $_SESSION['login']['password'] = $user->password;
            $_SESSION['login']['role'] = $user->role;
            $_SESSION['login']['id'] = $user->id;
            if($user->role > 4){
                echo "<script> alert('Đăng nhập thành công user.')</script>";
                header("location: product");
            }else{
                echo "<script> alert('Đăng nhập thành công quản trị.')</script>";
                header('location: admin');
            }

        } else{
            header('location: ./user_login?success=false');
        }

    }

    public function logout(){
        session_destroy();
        header('location: ./product');
    }
    public function signup(){

        include_once '././views/user/signup.blade.php';
    }
    public function user_login(){

        include_once '././views/user/user_login.blade.php';
    }
    public function postSignup(){
        global $baseUrl;        
        $model = new User();

        foreach($_POST as $key => $val){
            $model->{$key} = $val;
        }
        $model->avatar = "https://www.xahara.vn/wp-content/uploads/h%C3%ACnh-%E1%BA%A3nh-Alaska-%C4%91%E1%BA%B9p-%C4%91%C3%A1ng-y%C3%AAu.jpg";

        // validate
        $err = false;
        $namerr = "";
        $addresserr="";
        $phoneerr="";
        $emailerr = "";
        $passworderr = "";
        $roleerr = "";
        

        if(strlen($model->name) == 0 ){
            $err = true;
            $nameerr = "Nhập tên";
        } else if(strlen($model->name) > 191){
            $err = true;
            $nameerr = "Tên không vượt quá 191 ký tự!";
        }
        if(strlen($model->address) == 0 ){
            $err = true;
            $addresserr = "Nhập đầy đủ địa chỉ";
        } else if(strlen($model->address) > 500){
            $err = true;
            $addresserr = "Tên không vượt quá 500 ký tự!";
        }
        if(strlen($model->phone) == 0 ){
            $err = true;
            $phoneerr = "Nhập số điện thoại";
        } else if(strlen($model->phone) > 11){
            $err = true;
            $phoneerr = "Tên không vượt quá 10 số!";
        }
        else if(strlen($model->phone) < 10){
            $err = true;
            $phoneerr = "Tên không nhỏ hơn 10 ký tự!";
        }

        if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$^",$model->email))
        { 
            $err = true;
            $emailerr = "Mời nhập đúng định dạng email!";
        }
        if($model->email == "" ){
            $err = true;
            $email = "Nhập email";
        } else if(strlen($model->email) > 191){
            $err = true;
            $emailerr = "email không vượt quá 191 ký tự!";
        } 
        // check trùng email
        $countUser = User::where('email', '=', "'" . $model->email . "'")->get();
        if(count($countUser) > 0){
            $err = true;
            $emailerr = 'Email "'. $model->email .'" đã tồn tại, hãy nhập email khác!';
        }

        //check định dạng email

        if ($model->password == "") {
            $err = true;
            $passworderr = "Nhập mật khẩu!";

        }


        if ($model->password !== $model->confirm_password) {
            $err = true;
            $passworderr = "Nhập mật khẩu!";
            $cpassworderr = "Xác nhận chính xác mật khẩu!";

        }

        if (empty($model->role) || $model->role == null || $model->role < 0) {
            $err = true;
            $roleerr = "Mời chọn quyền!";
        }

        if($err){
            header("location: ./signup?nameerr=$nameerr&addresserr=$addresserr&phoneerr=$phoneerr&emailerr=$emailerr&passworderr=$passworderr&cpassworderr=$cpassworderr&roleerr=$roleerr");
            die;
        }

        $model->password = password_hash($model->password, PASSWORD_DEFAULT);
        $colQuery = "";
        $valQuery = "";

        foreach($model->cols as $co){
            $colQuery .= "$co, ";
            $valQuery .= "'". $model->{$co} ."', ";
        }
        var_dump($colQuery);

        $colQuery = rtrim($colQuery, ", ");
        $valQuery = rtrim($valQuery, ", ");
        
        $model->queryBuilder =  "insert into " . $model->table 
                    . " ($colQuery)"
                    . " values "
                    . " ( $valQuery )";

        
        $model->exeQuery();
        echo "<script> alert('Đăng kí thành công.')</script>";
        header('location: product');
        
    }


}

 ?>