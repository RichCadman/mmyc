<?php
namespace Home\Controller;

class QyzxController extends PubController {
	//联系我们
    public function index(){
        //头部banner
        $banner=M("banner")->where("type=7")->limit(0,1)->find();

        $this->assign("banner",$banner);
    	$this->display();
    }

    //全国格局
    public function geju(){
        $geju=M("qita")->where("type=1")->select();
        //头部banner
        $banner=M("banner")->where("type=7")->limit(0,1)->find();

        $this->assign("banner",$banner);
        $this->assign("geju",$geju);
    	$this->display();
    }

    //全国格局详细页面
    public function geju1($id){
        $geju=M("qita")->where("id='$id'")->find();
        //头部banner
        $banner=M("banner")->where("type=7")->limit(0,1)->find();

        $this->assign("banner",$banner);
        $this->assign("geju",$geju);
        $this->display();
    }

    //美鸣商学院
    public function school(){
        $school=M("qita")->where("type=2")->select();
        //头部banner
        $banner=M("banner")->where("type=7")->limit(0,1)->find();

        $this->assign("banner",$banner);
        $this->assign("school",$school);
    	$this->display();
    }

    //美鸣商学院详情页
    public function school1($id){
        $school=M("qita")->where("id='$id'")->find();
        //头部banner
        $banner=M("banner")->where("type=7")->limit(0,1)->find();

        $this->assign("banner",$banner);
        $this->assign("school",$school);
        $this->display();
    }
    //工作机会和职业发展
    public function change(){
        $change=M("qita")->where("type=3")->select();
        //头部banner
        $banner=M("banner")->where("type=7")->limit(0,1)->find();

        $this->assign("banner",$banner);
        $this->assign("change",$change);
    	$this->display();
    }

    //工作机会和职业发展详细页面
    public function change1($id){
        $change=M("qita")->where("id='$id'")->find();
        //头部banner
        $banner=M("banner")->where("type=7")->limit(0,1)->find();

        $this->assign("banner",$banner);
        $this->assign("change",$change);
        $this->display();
    }
    //美鸣全国网络
    public function network(){
        $network=M("network")->select();
        //头部banner
        $banner=M("banner")->where("type=7")->limit(0,1)->find();

        $this->assign("banner",$banner);
        $this->assign("network",$network);
    	$this->display();
    }
    //分公司
    public function fgs(){
        $fgs=M("company")->select();
        //头部banner
        $banner=M("banner")->where("type=7")->limit(0,1)->find();

        $this->assign("banner",$banner);
        $this->assign("fgs",$fgs);
    	$this->display();
    }
    //留言
    public function message(){
        $data['name']=$_POST['name'];
        $data['email']=$_POST['email'];
        $data['tel']=$_POST['tel'];
        $data['content']=$_POST['content'];
        $data['time']=time();
        $res=M("message")->add($data);
        if($res){
           echo "<script type='text/javascript'>alert('留言成功,我们会尽快联系您~');window.history.back();</script>";
        }else{
            echo "<script type='text/javascript'>alert('留言失败');window.history.back();</script>";
        }
    }
}