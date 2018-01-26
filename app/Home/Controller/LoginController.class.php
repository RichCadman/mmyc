<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	//登录页面
    public function login(){

    	$this->display();
    }

    //登录
    public function login_do(){
    	$email=$_POST['email'];
    	$password=md5($_POST['password']);
    	$res=M("userinfo")->where("email='$email' and password='$password'")->find();
   		if($res){
   			$_SESSION['userinfo']=$res;
   			header("location:".__APP__."/Index/index");
   		}else{
   			echo "<script type='text/javascript'>alert('登录失败');window.history.back();</script>";
   		}
    }
}