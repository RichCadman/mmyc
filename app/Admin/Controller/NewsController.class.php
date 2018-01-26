<?php
namespace Admin\Controller;

class NewsController extends BaseController {
	//新闻
	public function news(){
		$news=M("news")->select();

		$this->assign("news",$news);
		$this->display();
	}
	
	//添加新闻
	public function add_news(){

		$this->display();
	}

	//添加新闻
	public function add(){
		//dump($_FILES['news_img']);exit;
		//上传图片
		$upload=new \Think\Upload();
		$upload->maxSize=20971520;//设置附件上传大小20M
		$upload->exts=array('jpg','jpeg','png','gif');//设置附件上传类型
		$upload->rootPath="./pub/upload/";//设置附件上传目录 文件上传保存的根路径
		$upload->savePath="image/";//设置附件上传目录  文件上传的保存路径（相对于根路径）
		$info=$upload->upload();
		if($info){
			foreach ($info as $k=>$v){
				$arr[$k]['news_img']=$v['savepath'].$v['savename'];//遍历得到路径
			}
			
			$data['news_img1']=$arr['0']['news_img'];
			$data['news_img2']=$arr['1']['news_img'];
			$data['news_img3']=$arr['2']['news_img'];
			$data['news_img4']=$arr['3']['news_img'];

			$data['content1']=$_POST['content1'];
			$data['content2']=$_POST['content2'];
			$data['content3']=$_POST['content3'];
			$data['content4']=$_POST['content4'];

			$data['title']=$_POST['title'];
			$time=$_POST['release_time'];
			$time=strtotime($time);
			$data['release_time']=$time;
			$res=M("news")->add($data);
			if($res){
				echo "<script type='text/javascript'>alert('上传成功');window.location='/admin.php/News/add_news';</script>";
			}else{
				echo "<script type='text/javascript'>alert('上传失败');window.history.back();</script>";
			}
		}
		
	}

	//修改新闻页面
	public function update_news($id){
		$news=M("news")->where("id='$id'")->find();

		$this->assign("news",$news);
		$this->display();
	}

	//修改新闻
	public function update($id){
		$upload=new \Think\Upload();
		$upload->maxSize=20971520;//设置附件上传大小20M
		$upload->exts=array('jpg','jpeg','png','gif');//设置附件上传类型
		$upload->rootPath="./pub/upload/";//设置附件上传目录 文件上传保存的根路径
		$upload->savePath="image/";//设置附件上传目录  文件上传的保存路径（相对于根路径）
		$info=$upload->upload();
		if($info){
			foreach ($info as $k=>$v){
				$arr[$k]['news_img']=$v['savepath'].$v['savename'];//遍历得到路径
			}
			
			$data['news_img1']=$arr['0']['news_img'];
			$data['news_img2']=$arr['1']['news_img'];
			$data['news_img3']=$arr['2']['news_img'];
			$data['news_img4']=$arr['3']['news_img'];

			$data['content1']=$_POST['content1'];
			$data['content2']=$_POST['content2'];
			$data['content3']=$_POST['content3'];
			$data['content4']=$_POST['content4'];

			$data['title']=$_POST['title'];
			$res=M("news")->where("id='$id'")->save($data);
			if($res){
				echo "<script type='text/javascript'>alert('修改成功');window.location='/admin.php/News/news';</script>";
			}else{
				echo "<script type='text/javascript'>alert('修改失败');window.history.back();</script>";
			}
		}
	}
}