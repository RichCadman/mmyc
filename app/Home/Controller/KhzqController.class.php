<?php
namespace Home\Controller;

class KhzqController extends PubController {
	//客户专区首页
    public function index(){
    	//头部banner
        $banner=M("banner")->where("type=5")->limit(0,1)->find();
        //视频
        $video=M("video")->order("time desc")->select();

        $this->assign("video",$video);
        $this->assign("banner",$banner);
    	$this->display();
    }

    //客户专区具体问答页面
    public function index1(){
        //头部banner
        $banner=M("banner")->where("type=5")->limit(0,1)->find();

        $this->assign("banner",$banner);
    	$this->display();
    }
}