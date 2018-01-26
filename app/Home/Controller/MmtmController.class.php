<?php
namespace Home\Controller;

class MmtmController extends PubController {
    public function index(){
    	 //头部banner
        $banner=M("banner")->where("type=4")->limit(0,1)->find();
    	//产品体验 图片
    	$img=M("tiyanimg")->select();

    	$this->assign("banner",$banner);
    	$this->assign("img",$img);
    	$this->display();
    }
}