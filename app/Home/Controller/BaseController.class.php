<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function _initialize(){
        if(!isset($_SESSION['userinfo'])){
            echo "<script type='text/javascript'>alert('请先登录');window.location=\"/index.php/Login/login\";</script>";
    	}
    	//手机端
        $info=M("phone")->where("type=1")->find();
        //PC端
         $info1=M("phone")->where("type=2")->find();
         //QQ
         $info2=M("phone")->where("type=3")->find();
         //分享内容
         $info3=M("share")->find();
         $sj=$info['phone'];
         $pc=$info1['phone'];
         $qq=$info2['phone'];
         $content=$info3['content'];
         $this->assign("sj",$sj);
         $this->assign("pc",$pc);
         $this->assign("qq",$qq);
         $this->assign("content",$content);
    }
}