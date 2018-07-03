<?php
	function p ($array){  //p打印函数
		dump($array,1,'<pre>',0);
		}
		
		/**
		 * TODO 基础分页的相同代码封装，使前台的代码更少
		 * @param $m 模型，引用传递
		 * @param $where 查询条件
		 * @param int $pagesize 每页查询条数
		 * @return \Think\Page
		 */
		function getpage(&$m,$where,$pagesize=10){
			$m1=clone $m;//浅复制一个模型
			$count = $m->where($where)->count();//连惯操作后会对join等操作进行重置
			$m=$m1;//为保持在为定的连惯操作，浅复制一个模型
			$p=new Page($count,$pagesize);
			$p->lastSuffix=false;
			$p->setConfig('header','条记录');
			$p->setConfig('prev','上一页');
			$p->setConfig('next','下一页');
			$p->setConfig('last','末页');
			$p->setConfig('first','首页');
			$p->setConfig('theme','<ul> %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%<li class="rows"><span> %totalRow% %header% %nowPage%/%totalPage% 页</span></li></ul>');
			

			$p->parameter=I('get.');

			$m->limit($p->firstRow,$p->listRows);

			return $p;
		}		
		
function byteFormat($bytes) {
	$sizetext = array(" B", " KB", " MB", " GB", " TB", " PB", " EB", " ZB", " YB");
	return round($bytes / pow(1024, ($i = floor(log($bytes, 1024)))), 2) . $sizetext[$i];
}
function urlchange($str){
	return basename($str);
}
function chuli($arr){
	$where=array();
	foreach ($arr["rules"] as $value) {
		switch ($value["op"]) {
			case "like":
				$where[$value["field"]]=array(act($value['op']),"%".$value["value"]."%");
				break;
			case "startwith":
				$where[$value["field"]]=array(act($value['op']),$value["value"]."%");
				break;
			case "endwith":
				$where[$value["field"]]=array(act($value['op']),"%".$value["value"]);
				break;
			default:
				$where[$value["field"]]=array(act($value['op']),$value["value"]);
				break;
		}
		// $where[$value["field"]]=array(act($value['op']),$value["value"]);
		$where["_logic"]=$arr["op"];

	}
	return $where;
}
function act($op)
{
	switch (strtolower($op))
	{

		case "equal":
			return "eq";
		case "greater":
			return "gt";
		case "greaterorequal":
			return "egt";
		case "less":
                    return "lt";
                case "lessorequal":
                    return "elt";
                case "like":
                    return "like";
                case "startwith":
                    return "like";
                case "endwith":
                    return "like";
                case "notequal":
                    return "neq";
                case "and":
                    return "and";
                case "or":
                    return "or";
                case "in":
                    return "in";
                case "notin":
                    return "not in";
                default:
                    return "eq";
            }
}
function noserialize($data_value)
    {
        $vars = preg_split('/([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)\|/', $data_value, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE
            );
        for ($i = 0; isset($vars[$i]); $i++)
        {
            $result[$vars[$i++]] = unserialize($vars[$i]);
        } 
        return $result;
    }
		
function checkorderstatus($ordid){
    $Ord=M('Orderlist');
    $ordstatus=$Ord->where('ordid='.$ordid)->getField('ordstatus');
    if($ordstatus==1){
        return true;
    }else{
        return false;    
    }
 }
 //处理订单函数
 //更新订单状态，写入订单支付后返回的数据
 function orderhandle($parameter){
    $ordid=$parameter['out_trade_no'];
    $data['payment_trade_no']      =$parameter['trade_no'];
    $data['payment_trade_status']  =$parameter['trade_status'];
    $data['payment_notify_id']     =$parameter['notify_id'];
    $data['payment_notify_time']   =$parameter['notify_time'];
    $data['payment_buyer_email']   =$parameter['buyer_email'];
    $data['ordstatus']             =1;
    $Ord=M('Orderlist');
    $Ord->where('ordid='.$ordid)->save($data);
 } 
 /*-----------------------------------
2013.8.13更正
下面这个函数，其实不需要，大家可以把他删掉，
具体看我下面的修正补充部分的说明
------------------------------------*/
 //获取一个随机且唯一的订单号；
 function getordcode(){
    $Ord=M('Orderlist');
    $numbers = range (10,99);
    shuffle ($numbers); 
    $code=array_slice($numbers,0,4); 
    $ordcode=$code[0].$code[1].$code[2].$code[3];
    $oldcode=$Ord->where("ordcode='".$ordcode."'")->getField('ordcode');
    if($oldcode){
        getordcode();
    }else{
        return $ordcode;
    }
 }
 
?>
