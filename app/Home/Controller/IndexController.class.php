<?php
namespace Home\Controller;

class IndexController extends PubController {
	//首页
    public function index(){
    	//头部banner
    	$banner=M("banner")->where("type=1")->select();
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
    	//新闻
    	$news=M("news")->order("release_time desc")->limit(0,4)->select();

    	$this->assign("news",$news);
    	$this->assign("mm1",$mm1);
    	$this->assign("mm2",$mm2);
    	$this->assign("mm3",$mm3);
    	$this->assign("mm4",$mm4);
    	$this->assign("mm5",$mm5);
    	$this->assign("banner",$banner);
    	$this->display();
    }
}