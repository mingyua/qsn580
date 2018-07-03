<?php
class AttributeAction extends CommonAction{
	public function index(){
		$this->attr=M('attr')->order('sort asc')->select();
		$this->display();
		}
	public function add(){
		if(IS_POST){
			if(M('Attr')->add($_POST)){
			$this->SUCCESS('添加成功');
			}else{
			$this->error('添加失败');
				}			
		}else{
		$this->display();
		}
	}
	public function edit(){
		if(IS_POST){
		$Attr = M("Attr"); // 实例化User对象
		$data=array(); // 创建数据对象
		$data['id']=$_POST['id'];
		$data['name']=$_POST['name'];
		$data['color']=$_POST['color'];
		$data['module']=$_POST['module'];
		$data['status']=$_POST['status'];
		$data['sort']=$_POST['sort'];
   		if($Attr->save($data)){
			$this->success(C('edit_ok'));
			}else{
				$this->error(C('edit_error'));
				
				}		
		}else{
		$id=$_GET['id'];
		$k=M('attr')->where("id=$id")->find();
		$this->attr=M('attr')->select();
		$this->assign('k',$k);
		$this->display();
			
		}
	}
	public function del(){
		$id = intval($_GET['id']);
		$attr = M("attr"); // 实例化User对象
		if($attr->where("id=$id")->delete()){
					$this->success(C('delete_ok'));
				}else{
					$this->error(C('delete_error'));
				}	
			
	}
	
	
	
	
}