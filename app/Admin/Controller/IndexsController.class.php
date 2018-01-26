<?php
namespace Admin\Controller;

class IndexsController extends BaseController {
	//显示顶端图片
	public function banner(){
		$banner=M("banner")->select();

		$this->assign("banner",$banner);
		$this->display();
	}
	//修改顶端图片页面
	public function update_banner($id){
		$banner=M("banner")->where("id='$id'")->find();

		$this->assign("banner",$banner);
		$this->display();
	}
	//修改顶端图片
	public function update1($id){
		$upload=new \Think\Upload();
		$upload->maxSize=20971520;//设置附件上传大小20M
		$upload->exts=array('jpg','jpeg','png','gif');//设置附件上传类型
		$upload->rootPath="./pub/upload/";//设置附件上传目录 文件上传保存的根路径
		$upload->savePath="image/";//设置附件上传目录  文件上传的保存路径（相对于根路径）
		$info=$upload->upload();
		if($info){
			foreach ($info as $v){
				$data['banner_img']=$v['savepath'].$v['savename'];//遍历得到路径
			}
			$res=M("banner")->where("id='$id'")->save($data);
			if($res){
				echo "<script type='text/javascript'>alert('修改成功');window.location='/admin.php/Indexs/banner';</script>";
			}else{
				echo "<script type='text/javascript'>alert('修改失败');window.history.back();</script>";
			}
		}
	}
	//添加首页banner
	public function add_banner(){

		$this->display();
	}

	//添加首页banner
	public function add1(){
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
				$data['banner_img']=$v['savepath'].$v['savename'];//遍历得到路径
			}
			$data['type']=$_POST['type'];
			$data['upload_time']=time();
			$res=M("banner")->add($data);
			if($res){
				echo "<script type='text/javascript'>alert('上传成功');window.location='/admin.php/Indexs/add_banner';</script>";
			}else{
				echo "<script type='text/javascript'>alert('上传失败');window.history.back();</script>";
			}
		}
		
	}
	//显示各系列图片
	public function xilie(){
		$xl=M("xl")->select();

		$this->assign("xl",$xl);
		$this->display();
	}

	//修改顶端图片页面
	public function update_xilie($id){
		$xl=M("xl")->where("id='$id'")->find();

		$this->assign("xl",$xl);
		$this->display();
	}

	//修改顶端图片
	public function update2($id){
		$upload=new \Think\Upload();
		$upload->maxSize=20971520;//设置附件上传大小20M
		$upload->exts=array('jpg','jpeg','png','gif');//设置附件上传类型
		$upload->rootPath="./pub/upload/";//设置附件上传目录 文件上传保存的根路径
		$upload->savePath="image/";//设置附件上传目录  文件上传的保存路径（相对于根路径）
		$info=$upload->upload();
		if($info){
			foreach ($info as $k=>$v){
				$arr[$k]['mmtm_img']=$v['savepath'].$v['savename'];//遍历得到路径
			}
			$data['mmtm_img1']=$arr['0']['mmtm_img'];
			$data['mmtm_img2']=$arr['1']['mmtm_img'];
			
			$data['title']=$_POST['title'];
			//$data['title1']=$_POST['title1'];
			$data['content1']=$_POST['content1'];
			$data['content2']=$_POST['content2'];
			/*$data['content3']=$_POST['content3'];
			$data['content4']=$_POST['content4'];*/
			$data['upload_time']=time();
			$res=M("xl")->where("id='$id'")->save($data);
			if($res){
				echo "<script type='text/javascript'>alert('修改成功');window.location='/admin.php/Indexs/xilie';</script>";
			}else{
				echo "<script type='text/javascript'>alert('修改失败');window.history.back();</script>";
			}
		}
	}
	//添加首页系列图片
	public function add_xilie(){

		$this->display();
	}

	//添加首页系列图片
	public function add2(){
		//dump($_FILES['banner_img']);exit;
		//上传图片
		$upload=new \Think\Upload();
		$upload->maxSize=20971520;//设置附件上传大小20M
		$upload->exts=array('jpg','jpeg','png','gif');//设置附件上传类型
		$upload->rootPath="./pub/upload/";//设置附件上传目录 文件上传保存的根路径
		$upload->savePath="image/";//设置附件上传目录  文件上传的保存路径（相对于根路径）
		$info=$upload->upload();
		if($info){
			foreach ($info as $k=>$v){
				$arr[$k]['mmtm_img']=$v['savepath'].$v['savename'];//遍历得到路径
			}
			$data['mmtm_img1']=$arr['0']['mmtm_img'];
			$data['mmtm_img2']=$arr['1']['mmtm_img'];

			$data['type']=$_POST['type'];
			$data['title']=$_POST['title'];
			//$data['title1']=$_POST['title1'];
			
			$data['content1']=$_POST['content1'];
			$data['content2']=$_POST['content2'];
			/*$data['content3']=$_POST['content3'];
			$data['content4']=$_POST['content4'];*/
			$data['upload_time']=time();
			$res=M("xl")->add($data);
			if($res){
				echo "<script type='text/javascript'>alert('上传成功');window.location='/admin.php/Indexs/xilie';</script>";
			}else{
				echo "<script type='text/javascript'>alert('上传失败');window.history.back();</script>";
			}
		}
		
	}

	//添加账号
	public function add_admin(){

		$this->display();
	}

	//添加账号
	public function add3(){
		$data['admin_name']=$_POST['admin_name'];
		$data['password']=md5($_POST['password']);
		$res=M("admin")->add($data);
		if($res){
			echo "<script type='text/javascript'>alert('添加成功');window.location='/admin.php/Indexs/add_admin';</script>";
		}else{
			echo "<script type='text/javascript'>alert('添加失败');window.history.back();</script>";
		}
		
	}

}