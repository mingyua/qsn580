<?php
class QqAction extends Action {
	function index() {
		import('Class.Page',APP_PATH);
		$count=M('qq')->count();
		$page=new Page($count,6);
		$limit=$page->firstRow.','.$page->listRows;
		$this->qq=M('qq')->limit($limit)->select();
		$this->page=$page->show();
		
		$this->set=M('qq_set')->where("id='1'")->find();
		$this->display();
	}
	
	Public function add() {
		if(IS_POST){
			$qq=new Model('qq');
			$data=array();
			$data['title']=$_POST['title'];
			$data['qq']=$_POST['qq'];
			$data['keys']=$_POST['keys'];
			$data['sort']=$_POST['sort'];
			$data['time']=time();
			if(M('qq')->add($data)){
				$this->success('添加成功',U(GROUP_NAME.'/qq/index'));
				}else{
					$this->error('添加失败');
					}			
		}else{
		$this->display ();
		}
	}
	Public function edit() {
		if(IS_POST){
			$qq=new Model('qq');
			$data=array();
			$data['id']=$_POST['id'];
			$data['title']=$_POST['title'];
			$data['qq']=$_POST['qq'];
			$data['keys']=$_POST['keys'];
			$data['sort']=$_POST['sort'];
			$data['time']=time();
			$count=$qq->save($data);
			if($count !==false){
				$this->success('数据修改成功！',U(GROUP_NAME.'/qq/index'));
			}else{
				$this->error('数据修改失败');		
			}			
		}else{
		$this->id=I('id',0, 'intval');
		$id=$_GET['id'];
		$qq = M("qq"); // 实例化User对象
		$this->qq=$qq->where("id=$id")->find();
		$this->display ();
			
		}
	}
	Public function set() {
		$set=M('qq_set');
		$arr=array(
			'id'=>1,
			'mtop'=>$_POST['m-top'],
			'pos'=>$_POST['pos'],
			'skin'=>$_POST['skin'],
			'btnwidth'=>'28',
			'boxwidth'=>'154',
			'speed'=>$_POST['speed'],
			'min'=>$_POST['min'],
		);
		$up=$set->save($arr);
		if($up){
			$this->success('修改成功！',U(GROUP_NAME.'/qq/index'));
		}else{
			$this->error('修改失败');		
		}
		
	}
	
	Public function del(){
		$id = intval($_GET['id']);
		$qq = M("qq"); // 实例化User对象
		if($qq->where("id=$id")->delete()){
					echo 1;
				}else{
					echo 0;
				}	
		
	}
	
	
	Public function delall(){
		
		$ids = I('id');
		$qq = M("qq");
		if($qq->where(array('id'=>array('in',$ids)))->delete()){
					$this->success(C('delete_ok'));
				}else{
					$this->error(C('delete_error'));
				}	
		
	}
	
	
	
	
}