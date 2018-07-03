<?php
class AdAction extends Action {
	function index() {
		import('Class.Page',APP_PATH);
		$count=M('ad')->count();
		$page=new Page($count,6);
		$limit=$page->firstRow.','.$page->listRows;
		$this->ad=M('ad')->limit($limit)->select();
		$this->page=$page->show();
		$this->display();
	}
	
	Public function add() {
		if(IS_POST){
			$ad=new Model('ad');
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728 ;// 设置附件上传大小
			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg','swf','flv');// 设置附件上传类型
			$upload->autoSub = true;                      //是否使用子目录保存上传文件  
			$upload->subType = 'date';                      //子目录创建方式，默认为hash，可以设置为hash或者date 
			$upload->dateFormat = 'Ymd';                     //子目录方式为date的时候指定日期格式  
			//完整的头像路径
			$upload->savePath =  './uploads/';// 设置附件上传目录
		 
		if(!$upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
			 }else{// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
			 }
			$data=array();
			$data['id']=$_POST['id'];
			$data['kinds']=$_POST['kinds'];
			$data['name'] =$_POST['name'];
			$data['title']=$_POST['title'];
			$data['pic']=$info[0]['savepath'].$info[0]['savename'];
			$data['url']=$_POST['url'];
			$data['content']=$_POST['contents'];
			$data['pos']=$_POST['pos'];
			$data['sort']=$_POST['sort'];
			$data['status']=$_POST['status'];
			$data['time']=time();
			if(M('ad')->add($data)){
				$this->success('添加成功',U(GROUP_NAME.'/Ad/index'));
				}else{
					$this->error('添加失败');
					}			
		}else{
		$this->display ();
		}
	}
	Public function edit() {
		if(IS_POST){
			$ad=new Model('ad');
			 import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728 ;// 设置附件上传大小
			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg','swf','flv');// 设置附件上传类型
			$upload->autoSub = true;                      //是否使用子目录保存上传文件  
			$upload->subType = 'date';                      //子目录创建方式，默认为hash，可以设置为hash或者date 
			$upload->dateFormat = 'Ymd';                     //子目录方式为date的时候指定日期格式  
			//完整的头像路径
			$upload->savePath =  './uploads/';// 设置附件上传目录
		 
		if(!$upload->upload()) {// 上传错误提示错误信息
				$pic=$_POST['pic'];
			 }else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
			 }
			$data=array();
			$data['id']=$_POST['id'];
			$data['kinds']=$_POST['kinds'];
			$data['name'] =$_POST['name'];
			$data['title']=$_POST['title'];
			if($info[0]['savename']){
					$data['pic']=$info[0]['savepath'].$info[0]['savename'];
				}else{
					$data['pic']=$_POST['pic'];
				}
			$data['url']=$_POST['url'];
			$data['contents']=$_POST['contents'];
			$data['pos']=$_POST['pos'];
			$data['sort']=$_POST['sort'];
			$data['status']=$_POST['status'];
			$data['time']=time();
			$count=$ad->save($data);
			if($count !==false){
				$this->success('数据修改成功！',U(GROUP_NAME.'/ad/index'));
			}else{
				$this->error('数据修改失败');		
			}			
		}else{
		$this->id=I('id',0, 'intval');
		$id=$_GET['id'];
		$ad = M("ad"); // 实例化User对象
		$this->ad=$ad->where("id=$id")->find();
		$this->display ();
			
		}
	}
	Public function del(){
		$id = intval($_GET['id']);
		$ad = M("ad"); // 实例化User对象
		if($ad->where("id=$id")->delete()){
					echo 1;
				}else{
					echo 0;
				}	
		
	}
	
	
	Public function delall(){
		
		$ids = I('id');
		$article = M("slide");
		if($article->where(array('id'=>array('in',$ids)))->delete()){
					$this->success(C('delete_ok'));
				}else{
					$this->error(C('delete_error'));
				}	
		
	}
	
	
	
	
}