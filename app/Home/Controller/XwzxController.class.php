<?php
namespace Home\Controller;

class XwzxController extends PubController {
	//新闻首页
    public function index(){
        //头部banner
        $banner=M("banner")->where("type=6")->limit(0,1)->find();
        //查询最新两条新闻
        $news_two=M("news")->order("release_time desc")->limit(0,2)->select();
        //查询所有新闻
        $news=M("news")->order("release_time desc")->select();

        $this->assign("banner",$banner);
        $this->assign("news_two",$news_two);
        $this->assign("news",$news);
    	$this->display();
    }

    //新闻具体页面
    public function index1($id){
    	$info=M("news")->where("id='$id'")->find();
        //头部banner
        $banner=M("banner")->where("type=6")->limit(0,1)->find();
        $this->assign("banner",$banner);
    	$this->assign("info",$info);
    	$this->display();
    }
}