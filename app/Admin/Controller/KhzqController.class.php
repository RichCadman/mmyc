<?php
namespace Admin\Controller;

class KhzqController extends BaseController {
	//视频
	public function video(){
		$video=M("video")->select();

		$this->assign("video",$video);
		$this->display();
	}
	
	//添加视频
	public function add_video(){

		$this->display();
	}
	//添加视频
	public function add(){

		//dump($_FILES['video']);exit;
		//上传视频
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize = 3145728000 ;// 设置附件上传大小
		$upload->exts = array("mp4","wmv");//设置附件上传类型
		$upload->rootPath="./pub/upload/";//设置附件上传目录 
		$upload->savePath="video/";//设置附件上传目录
		$info=$upload->upload();
		if($info){
			foreach ($info as $v){
				$data['video']=$v['savepath'].$v['savename'];//遍历得到路径
			}
			$data['time']=time();
			$data['title']=$_POST['title'];
			$res=M("video")->add($data);
			if($res){
				echo "<script type='text/javascript'>alert('上传成功');window.location='/admin.php/Khzq/add_video';</script>";
			}else{
				echo "<script type='text/javascript'>alert('上传失败,上传格式为MP4、WMV');window.history.back();</script>";
			}
		}else{
			echo "<script type='text/javascript'>alert('上传失败,上传格式为MP4、WMV');window.history.back();</script>";
		}
		
	}

	//更改视频页面
	public function update_video($id){
		$video=M("video")->where("id='$id'")->find();

		$this->assign("video",$video);
		$this->display();
	}
	//更改视频
	public function update($id){
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize = 3145728000 ;// 设置附件上传大小
		$upload->exts = array("mp4","wmv");//设置附件上传类型
		$upload->rootPath="./pub/upload/";//设置附件上传目录 
		$upload->savePath="video/";//设置附件上传目录
		$info=$upload->upload();
		if($info){
			foreach ($info as $v){
				$data['video']=$v['savepath'].$v['savename'];//遍历得到路径
			}
			$data['title']=$_POST['title'];
			$res=M("video")->where("id='$id'")->save($data);
			if($res){
				echo "<script type='text/javascript'>alert('更改成功');window.location='/admin.php/Khzq/video';</script>";
			}else{
				echo "<script type='text/javascript'>alert('更改失败,上传格式为MP4、WMV');window.history.back();</script>";
			}
		}else{
			echo "<script type='text/javascript'>alert('更改失败,上传格式为MP4、WMV');window.history.back();</script>";
		}
	}
}