<?php
/**
*@param   [type] $node  [要处理]
*@param   [type]  [description]
*@param   [type]  [description]
*@param   [type]  [description]
*/
//图组上传路径处理
function JS($str){
	return str_replace('./', '', str_replace('//', '/', $str));
}

function isMobile(){  
    $useragent=isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';  
    $useragent_commentsblock=preg_match('|\(.*?\)|',$useragent,$matches)>0?$matches[0]:'';        
    function CheckSubstrs($substrs,$text){  
        foreach($substrs as $substr)  
            if(false!==strpos($text,$substr)){  
                return true;  
            }  
            return false;  
    }
    $mobile_os_list=array('Google Wireless Transcoder','Windows CE','WindowsCE','Symbian','Android','armv6l','armv5','Mobile','CentOS','mowser','AvantGo','Opera Mobi','J2ME/MIDP','Smartphone','Go.Web','Palm','iPAQ');
    $mobile_token_list=array('Profile/MIDP','Configuration/CLDC-','160×160','176×220','240×240','240×320','320×240','UP.Browser','UP.Link','SymbianOS','PalmOS','PocketPC','SonyEricsson','Nokia','BlackBerry','Vodafone','BenQ','Novarra-Vision','Iris','NetFront','HTC_','Xda_','SAMSUNG-SGH','Wapaka','DoCoMo','iPhone','iPod');  

    $found_mobile=CheckSubstrs($mobile_os_list,$useragent_commentsblock) ||  
              CheckSubstrs($mobile_token_list,$useragent);  

    if ($found_mobile){  
        return true;  
    }else{  
        return false;  
    }  
}

function imgpath($field,$type='1'){
	if($type==1){
		if(strlen($field)>0){
			$path=str_replace('../','http://www.841990053.com/',$field);
		}else{
			$path='http://www.841990053.com/images/register-pic.png';
		}
		
	}else if($type==3){
		$path=str_replace('Uploads/','http://www.841990053.com/Uploads/',$field);
	}else{
		$path=str_replace('"/ueditor/',"\"http://www.841990053.com/ueditor/",$field);		
		$path = preg_replace('/width=".*?"/i', '', $path);
		$path = preg_replace('/height=".*?"/i', '', $path);
		$exp=Array("/height=.{0,5}\s/i","/width=.{0,5}\s/i");
		$exp_o=Array('','');
		$path=preg_replace($exp,$exp_o,$path);
	}
	return $path;
}

//节点处理
function node_merge($node,$access=null,$pid=0){
	$arr=array();
	foreach ($node as $v){
		if(is_array($access)){
			$v['access']=in_array($v['id'],$access) ? 1:0;
		}
		if($v['pid']==$pid){
			$v['child']=node_merge($node, $access, $v['id']);
			$arr[]=$v;
			}
		}
	
	return $arr;
	}
//文章属性
function attr_merge($attr,$aid=null,$pid=0){
	$arr=array();
	foreach ($attr as $v){
		if(is_array($aid)){
			$v['aid']=in_array($v['id'],$aid) ? 1:0;
		}
		if($v['pid']==$pid){
			$arr[]=$v;
			}
		}
	
	return $arr;
	}


//处理方法
function rmdirr($dirname) {
    if (!file_exists($dirname)) {
        return false;
    }
    if (is_file($dirname) || is_link($dirname)) {
        return unlink($dirname);
    }
    $dir = dir($dirname);
    if ($dir) {
        while (false !== $entry = $dir->read()) {
            if ($entry == '.' || $entry == '..') {
                continue;
            }
            //递归
            rmdirr($dirname . DIRECTORY_SEPARATOR . $entry);
        }
    }
}

//公共函数
//获取文件修改时间
function getfiletime($file, $DataDir) {
    $a = filemtime($DataDir . $file);
    $time = date("Y-m-d H:i:s", $a);
    return $time;
}

//获取文件的大小
function getfilesize($file, $DataDir) {
    $perms = stat($DataDir . $file);
    $size = $perms['size'];
    // 单位自动转换函数
    $kb = 1024;         // Kilobyte
    $mb = 1024 * $kb;   // Megabyte
    $gb = 1024 * $mb;   // Gigabyte
    $tb = 1024 * $gb;   // Terabyte

    if ($size < $kb) {
        return $size . " B";
    } else if ($size < $mb) {
        return round($size / $kb, 2) . " KB";
    } else if ($size < $gb) {
        return round($size / $mb, 2) . " MB";
    } else if ($size < $tb) {
        return round($size / $gb, 2) . " GB";
    } else {
        return round($size / $tb, 2) . " TB";
    }
}


?>	
	
