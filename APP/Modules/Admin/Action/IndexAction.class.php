<?php/**后台首页控制器*/Class IndexAction extends CommonAction{	Public function index(){		$id=$_SESSION['userid'];		$user = M("user"); // 实例化User对象		$this->k=$user->where("id=$id")->find();		if(session(C('ADMIN_AUTH_KEY'))){			$node=D('Node')->where('level=2 and enable=1')->order('sort ASC')->relation(true)->select();			}else{				//取出所有权限节点					$node=D('Node')->where("level='2'  and enable='1'")->order('sort ASC')->relation(true)->select();					$module="";					$node_id="";					$accessList=$_SESSION['_ACCESS_LIST'];					foreach($accessList as $key=>$value){						foreach($value as $key1=>$value1){							$module=$module.','.$key1;							foreach($value1 as $key2=>$value2){								$node_id=$node_id.','.$value2;								}							}						}															//去除没有权限的节点					foreach($node as $key=>$value){												if(!in_array(strtoupper($value['name']),explode(',',$module))){							unset($node[$key]);							}else{							//模板存在，比较里面的操作							foreach($value['node'] as $key1=>$value1){								if(!in_array($value1['id'],explode(',',$node_id))){									unset($node[$key]['node'][$key1]); //一层一层下来的									}								}																	}												}								}			$this->assign('node',$node);			$this->site=M("config")->where("id='1'")->find();								$this->display();		}	Public function welcome(){		function getDirSize($dir)		 { 		  $handle = opendir($dir);		  while (false!==($FolderOrFile = readdir($handle)))		  { 		   if($FolderOrFile != "." && $FolderOrFile != "..") 		   { 			if(is_dir("$dir/$FolderOrFile"))			{ 			 $sizeResult += getDirSize("$dir/$FolderOrFile"); 			}			else			{ 			 $sizeResult += filesize("$dir/$FolderOrFile"); 			}		   } 		  }		  closedir($handle);		  return $sizeResult;		 }		 // 单位自动转换函数		 function getRealSize($size)		 { 		  $kb = 1024;   // Kilobyte		  $mb = 1024 * $kb; // Megabyte		  $gb = 1024 * $mb; // Gigabyte		  $tb = 1024 * $gb; // Terabyte		  if($size < $kb)		  { 		   return $size." B";		  }		  else if($size < $mb)		  { 		   return round($size/$kb,2)." KB";		  }		  else if($size < $gb)		  { 		   return round($size/$mb,2)." MB";		  }		  else if($size < $tb)		  { 		   return round($size/$gb,2)." GB";		  }		  else		  { 		   return round($size/$tb,2)." TB";		  }		 }		 		 		$fsize=round(getRealSize(getDirSize('./')));		$bfb=($fsize/500) * 100 . "%";		$ky=500-$fsize ." MB";		import('Class.Siteinfo',APP_PATH);		$gifo = new get_gust_info();		$area=$gifo->Getaddress();		$realip=$gifo->Getip()."(".$area[0][0]."-".$area[0][1]."-".$area[0][2].")";		$this->info=array(			'操作系统'=>PHP_OS,			'运行环境'=>$_SERVER["SERVER_SOFTWARE"],			'运行方式'=>php_sapi_name(),//运行方式			'ThinkPHP版本'=>THINK_VERSION.' [ <a href="http://thinkphp.cn" target="_blank">查看最新版本</a> ]',			'MYSQL版本'=>"MySQL server version:".mysql_get_server_info(),//MYSQL版本			'上传附件限制'=>ini_get('upload_max_filesize'),			'执行时间限制'=>ini_get('max_execution_time').'秒',			'服务器开始时间'=>"2016年09月02日",			'服务器到期时间'=>'<div class="endtime showtime c-red" value="1504281600"></div> ',			'浏览器'=>$gifo->GetBrowser(),//浏览器			'真实ip'=>$realip,//真实ip			'语言'=>$_SERVER['HTTP_ACCEPT_LANGUAGE'],//语言			'服务器域名/IP'=>$_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]',			'剩余空间'=>'<div class="progress"><div class="progress-bar"><span class="sr-only" style="width:'.$bfb.'"></span></div></div><br><span class="mr-5">'.$ky.'  可用   </span> <span class="ml-30">共 500 MB</span>',			'register_globals'=>get_cfg_var("register_globals")=="1" ? "ON" : "OFF",			'magic_quotes_gpc'=>(1===get_magic_quotes_gpc())?'YES':'NO',			'magic_quotes_runtime'=>(1===get_magic_quotes_runtime())?'YES':'NO',		 		);		$this->vip=M('user')->count();		$this->pcount=M('product')->count();		$this->scount=M('single')->count();		$this->acount=M('article')->count();		$id=$_SESSION['userid'];		$this->user=M('user')->where("id=$id")->find();		$logip=$_SESSION['loginip'];		$this->loginfo=$gifo->Getaddress($logip);		$this->display();		}			Public function avater(){		$id=$_SESSION['userid'];		$user = M("user"); // 实例化User对象		$this->k=$user->where("id=$id")->find();		$this->display();	}	Public function uploadfile(){		$id=$_SESSION['userid'];		$savePath = 'Uploads/avater/';  //图片存储路径		$savePicName = time();  //图片存储名称		$file_src = $savePath.$savePicName."_src.jpg";		$filename162 = $savePath.$savePicName."_162.jpg"; 		$filename48 = $savePath.$savePicName."_48.jpg"; 		$filename20 = $savePath.$savePicName."_20.jpg";    		$src=base64_decode($_POST['pic']);		$pic1=base64_decode($_POST['pic1']);   		$pic2=base64_decode($_POST['pic2']);  		$pic3=base64_decode($_POST['pic3']);  		if($src) {			file_put_contents($file_src,$src);			}		file_put_contents($filename162,$pic1);		file_put_contents($filename48,$pic2);		file_put_contents($filename20,$pic3);		$rs['status'] = 1;		$rs['picUrl'] = $savePath.$savePicName;		print json_encode($rs);			$user = M("user"); // 实例化User对象			$data=array(); // 创建数据对象			$data['id']=$id;			$data['images']=$filename162;			$user->save($data);	}	Public function logout(){		session_unset();		session_destroy();		$this->redirect(GROUP_NAME.'/Login/index');		}				}?>