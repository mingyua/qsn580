<?php
class ShoperAction extends Action {
	function index() {
		import('Class.Page',APP_PATH);
		$key=$_GET['key'];
		
		$m=M('shoper');
		if($key){
		$where="id like '%$key%' || name like '%$key%' || realname like '%$key%' || url like '%$key%' || tel like '%$key%' || phone like '%$key%'";
		}else{
		$where="";
		}
		$p=getpage($m,$where,10);
		$list=$m->field(true)->where($where)->order('id desc')->select();
		foreach($list as $k=>$v){
			$nowtime=date('Y-m-d',time());
			$d   = date('Y-m-d',$v['end-time']);//服务器到期时间
			$notic=date("Y-m-d",strtotime("$d   -10   day"));   //提前10天通知	
			if($v['end-time']<=time()){
			$list[$k]['endtime']="已过期";
			}else
			if(strtotime($notic)<=time() and time()<=$v['end-time']){
			$list[$k]['endtime']="<font color='#f00'>通知续费</font>";
			}else{
			$list[$k]['endtime']="<font color='#5BCF01'>正常运营...</font>";
			}

		}
		if(!$list){
			$this->tip='<div class="f-18 c-red">暂时没有数据！</div>';
		}
		$this->shoper=$list;
		$this->page=$p->show();		
	$this->display();
	}
	
	Public function add(){
	if(IS_POST){
 	import('ORG.Net.UploadFile');
	$upload = new UploadFile();// 实例化上传类
	$upload->maxSize  = C('FILE_SIZE') ;// 设置附件上传大小
	$upload->allowExts  = explode(',',C('FILE_TYPE'));// 设置附件上传类型
	$upload->savePath =C('upload_path');// 设置附件上传目录
 
		if(!$upload->upload()) {// 上传错误提示错误信息
			$data['image']="";
			 }else{// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
	 }
		$upload = M("shoper"); // 实例化User对象
		$data=array(
			'kinds'=>$_POST['kinds'],
			'realname'=>$_POST['realname'],
			'sex'=>$_POST['sex'],
			'cards'=>$_POST['cards'],
			'name'=>$_POST['name'],
			'borthday'=>strtotime($_POST['borthday']),
			'tel'=>$_POST['tel'],
			'phone'=>$_POST['phone'],
			'qq'=>$_POST['qq'],
			'email'=>$_POST['email'],
			'ip'=>$_POST['ip'],
			'addr'=>$_POST['addr'],
			'hangye'=>$_POST['hangye'],
			'provice'=>$_POST['provice'],
			'city'=>$_POST['city'],
			'area'=>$_POST['area'],
			'description'=>$_POST['description'],
			'contents'=>$_POST['contents'],
			'avater'=>$info[0]['savepath'].$info[0]['savename'],
			'url'=>$_POST['url'],
			'money'=>$_POST['money'],
			'start-time'=>strtotime($_POST['starttime']),
			'end-time'=>strtotime($_POST['endtime']),
			'status'=>$_POST['status'],
			'sort'=>$_POST['sort'],
			'addtime'=>time()
		); // 创建数据对象
   		if($upload->add($data)){
			$this->success(C('add_ok'),U(GROUP_NAME.'/Shoper/index'));
			}else{
				$this->error(C('add_error'));
				}
			
		}else{
		import('Class.Cate',APP_PATH);
		$cate=M('cate')->where("module='Product'")->order('sort ASC')->select();
		 $this->cate=Cate::unlimitedForlevel($cate,'&nbsp;&nbsp;┗━');
		 $this->shopkinds=M('select')->where("pid='151'")->order('sort ASC')->select();
		 $this->sexlist=M('select')->where("pid='18'")->order('sort ASC')->select();
		 $this->ip=M('select')->where("pid='16'")->order('sort ASC')->select();
		 $this->hangye=M('select')->where("pid='20'")->order('sort ASC')->select();

		$this->attr=M('attr')->where("module='Product' and status='1'")->order('sort ASC')->select();
		$this->display();
			
		}
	}
	
	Public function edit(){
	if(IS_POST){
 	import('ORG.Net.UploadFile');
	$upload = new UploadFile();// 实例化上传类
	$upload->maxSize  = C('FILE_SIZE') ;// 设置附件上传大小
	$upload->allowExts  = explode(',',C('FILE_TYPE'));// 设置附件上传类型
	$upload->savePath =C('upload_path');// 设置附件上传目录
 
		if(!$upload->upload()) {// 上传错误提示错误信息
			$data['image']="";
			 }else{// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
	 }
		$shoper = M("shoper"); // 实例化User对象
		$data=array();
			$data['id']=$_POST['id'];
			$data['kinds']=$_POST['kinds'];
			$data['realname']=$_POST['realname'];
			$data['sex']=$_POST['sex'];
			$data['cards']=$_POST['cards'];
			$data['name']=$_POST['name'];
			$data['borthday']=strtotime($_POST['borthday']);
			$data['tel']=$_POST['tel'];
			$data['phone']=$_POST['phone'];
			$data['qq']=$_POST['qq'];
			$data['email']=$_POST['email'];
			$data['ip']=$_POST['ip'];
			$data['addr']=$_POST['addr'];
			$data['hangye']=$_POST['hangye'];
			$data['provice']=$_POST['provice'];
			$data['city']=$_POST['city'];
			$data['area']=$_POST['area'];
			$data['description']=$_POST['description'];
			$data['contents']=$_POST['contents'];
			$data['avater']=$info[0]['savepath'].$info[0]['savename'];
			$data['url']=$_POST['url'];
			$data['money']=$_POST['money'];
			$data['start-time']=strtotime($_POST['starttime']);
			$data['end-time']=strtotime($_POST['endtime']);
			$data['status']=$_POST['status'];
			$data['sort']=$_POST['sort'];
			$data['addtime']=time();
 			$count=$shoper->save($data);

   		if($count !==false){
			$this->success(C('edit_ok'),U(GROUP_NAME.'/Shoper/index'));
			}else{
				$this->error(C('edit_error'));
				}
			
		}else{
		 $id=$_GET['id'];
		 $this->shoper=M('shoper')->where("id='$id'")->limit(1)->find();
		 $this->shopkinds=M('select')->where("pid='151'")->order('sort ASC')->select();
		 $this->sexlist=M('select')->where("pid='18'")->order('sort ASC')->select();
		 $this->ip=M('select')->where("pid='16'")->order('sort ASC')->select();
		 $this->hangye=M('select')->where("pid='20'")->order('sort ASC')->select();

		$this->attr=M('attr')->where("module='Product' and status='1'")->order('sort ASC')->select();
		$this->display();
			
		}
	}
	Public function del(){
		$id = intval($_GET['id']);
		$shoper = M("shoper"); // 实例化User对象
		if($shoper->where("id=$id")->delete()){
					echo 1;
				}else{
					echo 0;
				}	
		
	}
	
	Public function delall(){
		
		$articleid =$_POST['id'];
		$name=$this->getActionName();//获取模型名称
		$model=D($name);//获取当前模块的操作对象
		if(!empty($model)){
			$pk=$model->getpk();//获取传递参数（以ID删除）
			$id=$_REQUEST['delall'];
			if(!empty($articleid)){
				$condition=array($pk=>array('IN',$articleid));				
				if(false!==$model->where($condition)->delete()){
					echo 1;
				}else{
					echo 0;
				}
			}
			
		}
		
		
	}
	
	
	Public function pay(){
		$url=$_GET['url'];
		$this->pay1=M('single')->where('id=7')->find();
		$shoper=M('shoper')->where("url='$url'")->limit(1)->find();
		$this->time=$shoper['end-time']-time();
		$this->shoper=$shoper;
		$this->display();

	}	
	
 public function send_email(){
	$id=$_POST['id'];
	
 	$shoper= M("shoper")->where("id='$id'")->find();
	$url=$shoper['url'];
	$price=$shoper['money'];
	$time=date('Y-m-d',$shoper['end-time']);
/**
 * 发送邮件
 * @param  string $address 需要发送的邮箱地址 发送给多个地址需要写成数组形式
 * @param  string $subject 标题
 * @param  string $content 内容
 * @return boolean       是否成功
 */
ini_set("magic_quotes_runtime",0);
require './ThinkPHP/Extend/Library/Org/Nx/class.phpmailer.php';
try {
	$mail = new PHPMailer(true); 
	$mail->IsSMTP();
	$mail->CharSet='UTF-8'; //设置邮件的字符编码，这很重要，不然中文乱码
	$mail->SMTPAuth   = true;                  //开启认证
	$mail->Port       = 25;                    
	$mail->Host       = C('MAIL_SMTP'); 
	$mail->Username   = C('MAIL_ADDRESS');    
	$mail->Password   = C('MAIL_PASSWORD');            
	//$mail->IsSendmail(); //如果没有sendmail组件就注释掉，否则出现“Could  not execute: /var/qmail/bin/sendmail ”的错误提示
	$mail->AddReplyTo(C('MAIL_ADDRESS'),"小时候");//回复地址
	$mail->From       = C('MAIL_ADDRESS');
	$mail->FromName   = "wrainiyiwannian";
	$to =$shoper['email'];
	$mail->AddAddress($to);
	$mail->Subject  = "业务续费通知";
	$mail->Body = '<span style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">尊敬的用户:</span><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><span style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">&nbsp; 您好！</span><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><span style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">&nbsp; 感谢您在过去的日子里，选择了我司提供的服务。有了您的信任和支持，才有我司的不断发展和进步。在未来的日子里，我们仍将一如既往地致力于提供优质的提供服务。</span><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><span style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">您在我司的以下业务将要过期请及时续费:</span><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><span style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">域名（'.$url.'）及服务器 到期时间'.$time.',涉及总金额:'.$price.'/年.</span><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><span style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">服务器过期后会立即停机，3天内没有续费的会被删除。国际域名和.cn域名等(.in域名和.cm域名除外)一般在过期30天内可以正常续费，过期30天后将进入高价赎回期。</span><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><span style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">.cm域名到期未续费就会删除，无赎回期。.xyz域名过期10天后进入赎回期。.es域名过期9天后就会删除，无赎回期。</span><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><span style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">为了保证业务的正常使用，我司建议您收到通知后立即办理续费事宜;</span><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><span style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">续费方法：</span><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><span style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">&nbsp; &nbsp; 1.支付宝转账：支付宝账号：</span><span t="7" data="18798075208" isout="1" style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px; border-bottom-width: 1px; border-bottom-style: dashed; border-bottom-color: rgb(204, 204, 204); z-index: 1; position: static;">18798075208</span><span style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">。</span><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><span style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">&nbsp; &nbsp; 2.工商银行：户名：彭毅、卡号：6222 </span><span t="7" data="02240201267" style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px; border-bottom-width: 1px; border-bottom-style: dashed; border-bottom-color: rgb(204, 204, 204); z-index: 1;">02240201267</span><span style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">&nbsp;4913.</span><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><span style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">&nbsp;</span><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><span style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">再次感谢您对我司的信任和支持！</span><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><span style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">&nbsp;此致</span><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><span style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">致礼！</span><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><span style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">电话:</span><span t="7" data="18798075208" style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px; border-bottom-width: 1px; border-bottom-style: dashed; border-bottom-color: rgb(204, 204, 204); z-index: 1;">18798075208</span><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><span style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">qq:</span><span t="7" data="285412937" style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px; border-bottom-width: 1px; border-bottom-style: dashed; border-bottom-color: rgb(204, 204, 204); z-index: 1;">285412937</span><br style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;"  /><span style="font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">email:</span><a href="mailto:285412937@qq.com" target="_blank" href="mailto:285412937@qq.com" style="outline: none; cursor: pointer; color: rgb(0, 96, 145); font-family: &#39;lucida Grande&#39;, Verdana, &#39;Microsoft YaHei&#39;; line-height: 23.8px;">285412937@qq<wbr  />.com</a></div><p> 支付时请添加备注：如某某公司网站续费。支付完成后系统会在1-12个小时自动为您续费， 请留意网站后台服务器到期时间，如未变化,请联系客服或拨打服务电话（18798075208）。</p>';
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; //当邮件不支持html时备用显示，可以省略
	$mail->WordWrap   = 80; // 设置每行字符串的长度
	//$mail->AddAttachment("f:/test.png");  //可以添加附件
	$mail->IsHTML(true); 
	$mail->Send();
	echo '1';
} catch (phpmailerException $e) {
	echo "邮件发送失败：".$e->errorMessage();
}
 }	
	
public function out2(){
   //申明头部，生成excel类型文件
   header("Content-type:application/vnd.ms-excel");
   header("Content-Disposition:filename=用户信息表.xls");
   $m=M('shoper');
   //获取所有表字段
   $_allFields=$m->getDbFields();
   //制作表头
   echo "<table style='border:solid 1px #ddd;'>";
   echo "<tr style='border:solid 1px #ddd;'>";
   foreach($_allFields as $v){
       echo "<th>".$v."</th>";
   }
   echo "</tr>";
   //查询数据
   $_result=$m->select();
   foreach($_result as $v){
     echo "<tr style='border:solid 1px #ddd;'>";
     foreach($_allFields as $v1){
       echo "<td>".$v[$v1]."</td>";
     }            
 
     echo "</tr>";
   }
   echo "</table>";
}	
	
}