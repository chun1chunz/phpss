<?php 
require_once './models/Product.php';
require_once './models/User.php';
require_once './models/Login.php';
class UserController
{
    public function index(){
        global $baseUrl;
        global $adminUrl;
        global $adminAssetUrl;   
        Login::checkLogin(900);     
        $users = User::all();
        // $uid = $_SESSION['login']['id'];


        // echo "<pre>";

        // var_dump($users);die;
        include_once './views/admin/user/index.php';
    }


    public function remove(){
        Login::checkLogin(900);  
        $id = $_GET['id'];
        $uid = $_SESSION['login']['id'];
        if ($id !== $uid) {
            User::delete($id);
        }
        header('location: ./user');
    }

    public function addForm(){
        global $baseUrl;
        global $adminUrl;
        global $adminAssetUrl;
        Login::checkLogin(1);  
        $model = new User();
        $users = User::all();

        // var_dump($checkemail);die;
        include_once './views/admin/user/addForm.php';
    }

    public function saveAdd(){
        Login::checkLogin(900);  
        global $baseUrl;        
        $model = new User();

        foreach($_POST as $key => $val){
            $model->{$key} = $val;
        }
        $model->avatar = "images/avatars/default-avatar.jpg";

        // validate
        $err = false;
        $namerr = "";
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
            header("location: ./user-add?nameerr=$nameerr&emailerr=$emailerr&passworderr=$passworderr&cpassworderr=$cpassworderr&roleerr=$roleerr");
            die;
        }

        $model->password = password_hash($model->password, PASSWORD_DEFAULT);
        $colQuery = "";
        $valQuery = "";

        foreach($model->cols as $co){
            $colQuery .= "$co, ";
            $valQuery .= "'". $model->{$co} ."', ";
        }

        $colQuery = rtrim($colQuery, ", ");
        $valQuery = rtrim($valQuery, ", ");
        
        $model->queryBuilder =  "insert into " . $model->table 
                    . " ($colQuery)"
                    . " values "
                    . " ( $valQuery )";

        
        $model->exeQuery();
        // var_dump($model->queryBuilder);die;
        header('location: ./user?success=true');
        
    }


    public function editForm(){
        global $baseUrl;
        global $adminUrl;
        global $adminAssetUrl;
        Login::checkLogin(900);  
        $id = $_GET['id'];
        $user = User::find($id);
        $users = User::all();
        include_once './views/admin/user/editForm.php';
    }

    public function saveEdit(){
        $model = new User();
        $id = $_POST['id'];
        foreach($_POST as $key => $val){
            $model->{$key} = $val;
        }



        // validate
        $err = false;
        $namerr = "";
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
        $countUser = User::where('email', '=', "'" . $model->email . "' and id != " . $id)->get();
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
            header("location: ./user-edit?id=$id&&nameerr=$nameerr&emailerr=$emailerr&passworderr=$passworderr&cpassworderr=$cpassworderr&roleerr=$roleerr");
            die;
        }




        $model->password = password_hash($model->password, PASSWORD_DEFAULT);


        $colQuery = "";
        $valQuery = "";

        foreach($model->cols as $co){
            $colQuery .= "$co, ";
            $valQuery .= "'". $model->{$co} ."', ";
        }

        $colQuery = rtrim($colQuery, ", ");
        $valQuery = rtrim($valQuery, ", ");


        $model->queryBuilder = "update " . $model->table . " 
            set
                        cate_name = '$model->cate_name',
                        
                        description = '$model->desc'
            where id = $model->id";
        
        $model->exeQuery();
        header('location: ./user?success=true');

    }

    



}   





 ?>