<?php
namespace Home\Controller;

class JjfaEController extends PubController {
	//解决方案首页
    public function index(){
        //头部banner
        $banner=M("banner")->where("type=3")->limit(0,1)->find();

    	$info=M("fangan")->select();

        $this->assign("banner",$banner);
    	$this->assign("info",$info);
    	$this->display();
    }

    //解决方案具体页面
    public function index1($id){
    	$info=M("fangan")->where("id='$id'")->find();
         //头部banner
        $banner=M("banner")->where("type=3")->limit(0,1)->find();
        $this->assign("banner",$banner);
    	$this->assign("info",$info);
    	$this->display();
    }
}