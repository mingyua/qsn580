<?php
// 本类由系统自动生成，仅供测试用途
class ShowAction extends CommonAction {
    public function index(){
		$id=$_GET['id'];
		$product=M('product');
		$this->v=$product->where("id='$id'")->find();
		
		$this->img=M('photo')->where("p_id='$id'")->select();
		
	$this->hidenav='disn';	
	$this->display();
    }	
}
?>