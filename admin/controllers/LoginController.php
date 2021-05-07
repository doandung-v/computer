<?php 
	// load file model
	include "models/LoginModel.php";
	class LoginController extends Controller{
		// kế  thử class LoginModel
		use LoginModel;
		public function index(){
			$this->loadView("LoginView.php");
		}
		public function login(){
			// gọi hàm modelLogin từ class Loginmodel
			$this->modelLogin();
		}
		// đăng xuất
		public function logout(){
			// hủy biến session
			unset($_SESSION["email"]);
			header("location:index.php");
		}
	}
 ?>