<?php
/*
*后台首页控制器
*/
Class  OrderAction extends CommonAction{
	Public function index(){
		import('Class.Page',APP_PATH);
		$key=$_GET['key'];
		
		$m=M('orderlist');
		if($key){
		$where="id like '%$key%' || title like '%$key%'";
		}else{
		$where="";
		}
		$p=getpage($m,$where,10);
		$list=$m->field(true)->where($where)->order('id desc')->select();
		foreach($list as $v=>$k){
			$pid=$k['productid'];
			$product=M('product')->where("id='$pid'")->find();
			$list[$v]['cashs']=$product['cash'];
		}
		if(!$list){
			$this->tip='<div class="f-18 c-red">暂时没有数据！</div>';
		}
		$this->Order=$list;
		$this->page=$p->show();		
		$this->display();
	}
	Public function payset(){
		if(IS_POST){
			if(M('pay')->add($_POST)){
			$this->success('添加成功');
			}else{
				$this->error('添加失败');
				
				}			
		}else{
		import('Class.Cate',APP_PATH);
		$cate=M('cate')->where("module=''")->order('sort ASC')->select();
		 $this->cate=Cate::unlimitedForlevel($cate,'&nbsp;&nbsp;┗━');

		$this->Pay=M('pay')->order('sort ASC')->select();
		$this->display();
		}
	}
	Public function edit(){
		if(IS_POST){
			$data=array('id'=>$_POST['id'],'ordstatus'=>$_POST['ordstatus']);
			$order=M('orderlist')->save($data);
			if($order){
				if($_POST['ordstatus']==4){ //交易完成返还保证金
					$ordid =$_POST['id'];
					$cashs =$_POST['cash'];
					$uid =$_POST['uid'];
					$pid =$_POST['pid'];
					$cash = M("cash");
					$data=array(
						'paytype'=>'2',// 1 扣除保证金 2返还保证金
						'uid'=>$uid,
						'pid'=>$pid,
						'nowcash'=>$cashs,
						'icecash'=>"",
						'info'=>"交易完成返还保证金",
						'del'=>'0',
						'time'=>time(),
					);
					$fan=$cash->add($data);
					if($fan){
					$ordata=array('id'=>$ordid,'payment_type'=>'2');//订单是否扣除保证金 1待返还 0待扣除 2已返还
					M('orderlist')->save($ordata);
					}

				}
				$this->success('修改成功');
			}else{
				$this->error('修改失败');
			}
		}else{
		$id = intval($_GET['id']);
		$order=M('orderlist')->where("id='$id'")->find();
		$pid=$order['productid'];
		$cashs=M("product")->where("id='$pid'")->find();
		$this->cashs=$cashs['cash'];
		$this->order=$order;
		$this->display();
		}
	}
	Public function orderdel(){
		$id = intval($_GET['id']);
		$orderlist = M("orderlist"); // 实例化User对象
		if($orderlist->where("id='$id'")->delete()){
					echo 1;
				}else{
					echo 0;
				}	
	}
	Public function cashdel(){
		$ordid =$_POST['ordid'];
		$cashs =$_POST['cashs'];
		$uid =$_POST['uid'];
		$pid =$_POST['pid'];
		$cash = M("cash"); // 实例化User对象
		$data=array(
			'paytype'=>'1',// 1 扣除保证金 0返还保证金
			'uid'=>$uid,
			'pid'=>$pid,
			'nowcash'=>$cashs,
			'icecash'=>$cashs,
			'info'=>"竞拍成功,扣除保证金",
			'del'=>'0',
			'time'=>time(),
		);
		$ca=$cash->add($data);
		if($ca){
			$ordata=array('id'=>$ordid,'payment_type'=>'1');//订单是否扣除保证金 1待返还 0待扣除 2已返还
			M('orderlist')->save($ordata);
				echo "1";
				}else{
					echo "0";
				}	
	}
	
	
	Public function del(){
		$id = $_GET['id'];
		$pay = M("pay"); // 实例化User对象
		$pay->where("id='$id'")->delete();
	}
	
	Public function delall(){
		
		$id =$_POST['id'];
		$name=$this->getActionName();//获取模型名称
		$model=D($name);//获取当前模块的操作对象
		if(!empty($model)){
			$pk=$model->getpk();//获取传递参数（以ID删除）
			if(!empty($id)){
				$condition=array($pk=>array('IN',$id));				
				if(false!==$model->where($condition)->delete()){
					echo 1;
				}else{
					echo 0;
				}
			}
			
		}
		
		
	}
	
	
}
?>