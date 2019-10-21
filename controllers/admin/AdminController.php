<?php 
require_once './models/BaseModel.php';
require_once './models/Product.php';
require_once './models/User.php';
require_once './models/Admin.php';
require_once './models/Login.php';


/**
 * 
 */
class AdminController
{
	public function index(){
		global $baseUrl;
		global $adminUrl;
		global $adminAssetUrl;
		
		$product = Product::all();
		$user = User::all();
		$count_Product = Product::count();
		$count_User = User::count();
		//Login::checkLogin(300);

		include_once './views/admin/index.php';

	}
}

 ?>