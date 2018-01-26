<?php
namespace Admin\Controller;

class MmtmController extends BaseController {
	//产品体验处图片
	public function img(){
		$img=M("tiyanimg")->select();
		
		$this->assign("img",$img);
		$this->display();
	}
	
	//添加产品体验处图片
	public function add_img(){

		$this->display();
	}
	//添加产品体验处图片
	public function add(){
		//dump($_FILES['banner_img']);exit;
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
			$data['time']=time();
			$res=M("tiyanimg")->add($data);
			if($res){
				echo "<script type='text/javascript'>alert('上传成功');window.location='/admin.php/Mmtm/add_img';</script>";
			}else{
				echo "<script type='text/javascript'>alert('上传失败');window.history.back();</script>";
			}
		}
		
	}

	//修改产品体验处图片
	public function update_img($id){
		$img=M("tiyanimg")->where("id='$id'")->find();
		
		$this->assign("img",$img);
		$this->display();
	}

	//修改产品体验处图片
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
			$res=M("tiyanimg")->where("id='$id'")->save($data);
			if($res){
				echo "<script type='text/javascript'>alert('修改成功');window.location='/admin.php/Mmtm/img';</script>";
			}else{
				echo "<script type='text/javascript'>alert('修改失败');window.history.back();</script>";
			}
		}
	}
}