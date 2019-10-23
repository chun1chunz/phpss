<?php
require_once './models/BaseModel.php';
class Login extends BaseModel
{


	public function array($data)
    {
        if (is_array($data) || is_object($data))
        {
            $result = array();
            foreach ($data as $key => $value)
            {
                $result[$key] = object_to_array($value);
            }
            return $result;
        }
        return $data;
    }

    function checkLogin(int $role = 0){

        if (empty($_SESSION['login'] OR $_SESSION = "")) {
            header('location: '. $baseUrl . 'user_login');
            die;
        } 
        $uid =$_SESSION['login']['id'];
        $e =$_SESSION['login']['email'];
        $p = $_SESSION['login']['password'];
        $r = $_SESSION['login']['role'];

        if ($r < $role) {
            header('location: ../admin');
            die;
        }




    }


}



?>