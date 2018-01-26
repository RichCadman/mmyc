<?php
namespace Admin\Controller;

class FanganController extends BaseController {

	//方案
	public function fangan(){
		$fangan=M("fangan")->select();

		$this->assign("fangan",$fangan);
		$this->display();
	}
	
	//添加方案
	public function add_fangan(){

		$this->display();
	}

	//添加方案
	public function add(){
		//dump($_FILES['img']);exit;
		//上传图片
		$upload=new \Think\Upload();
		$upload->maxSize=20971520;//设置附件上传大小20M
		$upload->exts=array('jpg','jpeg','png','gif');//设置附件上传类型
		$upload->rootPath="./pub/upload/";//设置附件上传目录 文件上传保存的根路径
		$upload->savePath="image/";//设置附件上传目录  文件上传的保存路径（相对于根路径）
		$info=$upload->upload();
		if($info){
			foreach ($info as $v){
				$data['img']=$v['savepath'].$v['savename'];//遍历得到路径
			}
			$data['type']=$_POST['type'];
			$data['title']=$_POST['title'];
			$data['content']=$_POST['content'];
			$data['upload_time']=time();
			$res=M("fangan")->add($data);
			if($res){
				echo "<script type='text/javascript'>alert('上传成功');window.location='/admin.php/Fangan/add_fangan';</script>";
			}else{
				echo "<script type='text/javascript'>alert('上传失败');window.history.back();</script>";
			}
		}
		
	}

	//修改方案页面
	public function update_fangan($id){
		$fangan=M("fangan")->where("id='$id'")->find();

		$this->assign("fangan",$fangan);
		$this->display();
	}

	//修改方案
	public function update($id){
		$upload=new \Think\Upload();
		$upload->maxSize=20971520;//设置附件上传大小20M
		$upload->exts=array('jpg','jpeg','png','gif');//设置附件上传类型
		$upload->rootPath="./pub/upload/";//设置附件上传目录 文件上传保存的根路径
		$upload->savePath="image/";//设置附件上传目录  文件上传的保存路径（相对于根路径）
		$info=$upload->upload();
		if($info){
			foreach ($info as $v){
				$data['img']=$v['savepath'].$v['savename'];//遍历得到路径
			}
			$data['title']=$_POST['title'];
			$data['content']=$_POST['content'];
			$res=M("fangan")->where("id='$id'")->save($data);
			if($res){
				echo "<script type='text/javascript'>alert('修改成功');window.location='/admin.php/Fangan/fangan';</script>";
			}else{
				echo "<script type='text/javascript'>alert('修改失败');window.history.back();</script>";
			}
		}
	}
}