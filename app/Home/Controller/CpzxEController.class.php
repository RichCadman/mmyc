<?php
namespace Home\Controller;

class CpzxEController extends PubController {
	//产品中心首页
    public function index(){
        //头部banner
        $banner=M("banner")->where("type=2")->limit(0,1)->find();

    	//美鸣氧化钨系列
    	$mm1=M("xl")->where("type=1")->select();
    	//美鸣玻璃陶瓷系列
    	$mm2=M("xl")->where("type=2")->select();
    	//美鸣种植系列
    	$mm3=M("xl")->where("type=3")->select();
    	//美鸣精密
    	$mm4=M("xl")->where("type=4")->select();
    	//美鸣纯钛
    	$mm5=M("xl")->where("type=5")->select();

        $this->assign("banner",$banner);
    	$this->assign("mm1",$mm1);
    	$this->assign("mm2",$mm2);
    	$this->assign("mm3",$mm3);
    	$this->assign("mm4",$mm4);
    	$this->assign("mm5",$mm5);
    	$this->display();
    }

    //产品中心具体页面
    public function index1($id){
    	$info=M("xl")->where("id='$id'")->find();
        //头部banner
        $banner=M("banner")->where("type=2")->limit(0,1)->find();
        $this->assign("banner",$banner);
    	$this->assign("info",$info);
    	$this->display();
    }
}