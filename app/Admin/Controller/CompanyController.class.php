<?php
namespace Admin\Controller;

class CompanyController extends BaseController {
	//分公司
	public function company(){
		$company=M("company")->select();

		$this->assign("company",$company);
		$this->display();
	}
	
	//添加分公司
	public function add_company(){

		$this->display();
	}

	//添加分公司
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
				$data['img']=$v['savepath'].$v['savename'];//遍历得到路径
			}
			$data['company_name']=$_POST['company_name'];
			$data['address']=$_POST['address'];
			$data['tel']=$_POST['tel'];
			$data['qq']=$_POST['qq'];
			$res=M("company")->add($data);
			if($res){
				echo "<script type='text/javascript'>alert('上传成功');window.location='/admin.php/Company/add_company';</script>";
			}else{
				echo "<script type='text/javascript'>alert('上传失败');window.history.back();</script>";
			}
		}
	}

	//修改分公司页面
	public function update_company($id){
		$company=M("company")->where("id='$id'")->find();

		$this->assign("company",$company);
		$this->display();
	}

	//修改分公司
	public function update1($id){
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
			$data['company_name']=$_POST['company_name'];
			$data['address']=$_POST['address'];
			$data['tel']=$_POST['tel'];
			$data['qq']=$_POST['qq'];
			$res=M("company")->where("id='$id'")->save($data);
			if($res){
				echo "<script type='text/javascript'>alert('修改成功');window.location='/admin.php/Company/company';</script>";
			}else{
				echo "<script type='text/javascript'>alert('修改失败');window.history.back();</script>";
			}
		}
	}

	//美鸣全国网络
	public function network(){
		$network=M("network")->select();

		$this->assign("network",$network);
		$this->display();
	}
	//添加美鸣全国网络
	public function add_network(){

		$this->display();
	}

	//添加美鸣全国网络
	public function add2(){
		$data['company']=$_POST['company'];
		$data['network']=$_POST['network'];
		$data['time']=$_SERVER['REQUEST_TIME'];
		$res=M("network")->add($data);
		if($res){
			echo "<script type='text/javascript'>alert('上传成功');window.location='/admin.php/Company/add_network';</script>";
		}else{
			echo "<script type='text/javascript'>alert('上传失败');window.history.back();</script>";
		}
		
	}
	//修改美鸣全国网络页面
	public function update_network($id){
		$network=M("network")->where("id='$id'")->find();

		$this->assign("network",$network);
		$this->display();
	}

	//修改美鸣全国网络
	public function update2($id){
		$data['company']=$_POST['company'];
		$data['network']=$_POST['network'];
		$data['time']=$_SERVER['REQUEST_TIME'];
		$res=M("network")->where("id='$id'")->save($data);
		if($res){
			echo "<script type='text/javascript'>alert('修改成功');window.location='/admin.php/Company/network';</script>";
		}else{
			echo "<script type='text/javascript'>alert('修改失败');window.history.back();</script>";
		}
	}

	//其他
	public function qita(){
		$qita=M("qita")->select();

		$this->assign("qita",$qita);
		$this->display();
	}
	//添加其他
	public function add_qita(){

		$this->display();
	}
	//添加其他
	public function add3(){
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
			$data['time']=time();
			$res=M("qita")->add($data);
			if($res){
				echo "<script type='text/javascript'>alert('上传成功');window.location='/admin.php/Company/add_qita';</script>";
			}else{
				echo "<script type='text/javascript'>alert('上传失败');window.history.back();</script>";
			}
		}
		
	}

	//修改其他页面
	public function update_qita($id){
		$qita=M("qita")->where("id='$id'")->find();

		$this->assign("qita",$qita);
		$this->display();
	}

	//修改其他
	public function update3($id){
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
			$res=M("qita")->where("id='$id'")->save($data);
			if($res){
				echo "<script type='text/javascript'>alert('修改成功');window.location='/admin.php/Company/qita';</script>";
			}else{
				echo "<script type='text/javascript'>alert('修改失败');window.history.back();</script>";
			}
		}
	}
	//留言信息
	public function message(){
		$message=M("message")->select();

		$this->assign("message",$message);
		$this->display();
	}

	//电话
	public function phone(){
		$phone=M("phone")->select();

		$this->assign("phone",$phone);
		$this->display();
	}

	//修改号码
	public function mod_phone($id){
		$phone=M("phone")->where("id='$id'")->find();

		$this->assign("phone",$phone);
		$this->display();
	}
	//修改号码
	public function mod($id){
		$data['phone']=$_POST['phone'];
		$res=M("phone")->where("id='$id'")->save($data);
		if($res){
			echo "<script type='text/javascript'>alert('修改成功');window.location='/admin.php/Company/phone';</script>";
		}else{
			echo "<script type='text/javascript'>alert('修改失败');window.history.back();</script>";
		}
	}

	//分享
	public function fenx(){
		$share=M("share")->select();
		$this->assign("share",$share);
		$this->display();
	}

	//修改分享
	public function mod_fenx($id){
		$share=M("share")->where("id='$id'")->find();

		$this->assign("share",$share);
		$this->display();
	}

	//修改分享
	public function mod2($id){
		$data['content']=$_POST['content'];
		$res=M("share")->where("id='$id'")->save($data);
		if($res){
			echo "<script type='text/javascript'>alert('修改成功');window.location='/admin.php/Company/fenx';</script>";
		}else{
			echo "<script type='text/javascript'>alert('修改失败');window.history.back();</script>";
		}
	}
}