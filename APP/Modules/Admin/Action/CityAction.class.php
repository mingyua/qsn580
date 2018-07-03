<?php
/*
*后台首页控制器
*/
Class  CityAction extends CommonAction{
	Public function index(){
		import('Class.Page',APP_PATH);
		$count=M('city')->count();
		$page=new Page($count,9);
		$limit=$page->firstRow.','.$page->listRows;
		$this->city=M('city')->order('sort ASC')->LIMIT($limit)->select();
		$this->page=$page->show();
		$this->display();
		}
		
	Public function addcity(){
		$id=$_GET['id'];
		$k=M('city')->where("id=$id")->find();
		$this->city=M('city')->order('sort ASC')->select();
		$this->assign('k',$k);
		$this->display();
		}
	Public function addcityhandle(){
		$city = M("city"); // 实例化User对象
		$data=array(); // 创建数据对象
		$data['cid']=$_POST['cid'];
		$data['name']=$_POST['name'];
		$data['pinyin']=$_POST['pinyin'];
		$data['frist_words']=substr($_POST['pinyin'],0,1);
		$data['pca']='P';
		$data['sort']=$_POST['sort'];
		$data['bianm']=$_POST['bianm'];
		$data['enable']=$_POST['enable'];
   		if($city->add($data)){
			$this->success(C('add_ok'),U(GROUP_NAME.'/City/index'));
			}else{
				$this->error(C('add_error'));
				
				}		
	}
	Public function updatecity(){
		$city = M("city"); // 实例化User对象
		$data=array(); // 创建数据对象
		$data['id']=$_POST['id'];
		$data['cid']=$_POST['cid'];
		$data['name']=$_POST['name'];
		$data['pinyin']=$_POST['pinyin'];
		$data['frist_words']=substr($_POST['pinyin'],0,1);
		$data['pca']='P';
		$data['sort']=$_POST['sort'];
		$data['bianm']=$_POST['bianm'];
		$data['enable']=$_POST['enable'];
   		if($city->save($data)){
			$this->success(C('edit_ok'),U(GROUP_NAME.'/City/index'));
			}else{
				$this->error(C('edit_error'));
				
				}		
	}
	//排序
    public function sortcity(){
	$db=M('city');
	foreach ($_POST as $id => $sort){
	$db->where(array('id'=>$id))->setField('sort',$sort);
	}
	$this->redirect(GROUP_NAME.'/city/index');
    }
	//删除
    public function deleted(){
		$cityid = intval($_GET['id']);
		$city = M("city"); // 实例化User对象
		if($city->where("id=$cityid")->delete()){
					$this->success(C('delete_ok'),U(GROUP_NAME.'/City/index'));
				}else{
					$this->error(C('delete_error'));
				}	
	}
	}
?>