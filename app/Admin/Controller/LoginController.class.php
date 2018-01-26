<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

	//login
	public function login(){
		unset($_SESSION['admin']);
		$this->display();
	}

	//login
	public function login_do(){
		$admin_name=$_POST['admin_name'];
		$password=md5($_POST['password']);
		$res=M("admin")->where("admin_name='$admin_name' and password='$password'")->find();
		if($res){
			$_SESSION['admin']=$res;
			echo "<script type='text/javascript'>window.location='/admin.php/Indexs/banner';</script>";
		}else{
			echo "<script type='text/javascript'>alert('登录失败');window.history.back();</script>";
		}
	}
}