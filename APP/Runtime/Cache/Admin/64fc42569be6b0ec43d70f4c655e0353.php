<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="favicon.ico" >
<LINK rel="Shortcut Icon" href="favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="__PUBLIC__/lib/html5.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/respond.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/PIE_IE678.js"></script>
<![endif]-->
<link href="__PUBLIC__/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/lib/iconfont/iconfont.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/lib/date/css/ion.calendar.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/lib/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.2.min.js"></script> 

<!--[if IE 7]>
<link href="__PUBLIC__/lib/font-awesome/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<script type="text/javascript" src="__PUBLIC__/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
 <script type="text/javascript">
   function uploadevent(status,picUrl,callbackdata){
  //alert(picUrl); //后端存储图片
	//alert(callbackdata); //后端返回数据
        status += '';
     switch(status){
     case '1':
		var time = new Date().getTime();
		var filename162 = picUrl+'_162.jpg';
		var filename48 = picUrl+'_48.jpg';
		var filename20 = picUrl+"_20.jpg";

		//document.getElementById('avatar_priview').innerHTML = "头像1 : <img src='"+filename162+"?" + time + "'/> <br/> 头像2: <img src='"+filename48+"?" + time + "'/><br/> 头像3: <img src='"+filename20+"?" + time + "'/>" ;
		
	break;
     case '-1':
	  window.location.reload();
     break;
     default:
     window.location.reload();
    } 
   }
  </script>
<title>头像上传</title>
</head>
<body>
<div class="pd-20">
<div id="altContent">


<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"
WIDTH="650" HEIGHT="450" id="myMovieName">
<PARAM NAME=movie VALUE="__ROOT__/public/flash/avatar.swf">
<PARAM NAME=quality VALUE=high>
<PARAM NAME=bgcolor VALUE=#FFFFFF>
<param name="flashvars" value="imgUrl=__ROOT__/<?php echo ($k['images']); ?>&uploadUrl=__ROOT__/admin/index/uploadfile&uploadSrc=false" />
<EMBED src="__ROOT__/public/flash/avatar.swf" quality=high bgcolor=#FFFFFF WIDTH="650" HEIGHT="450" wmode="transparent" flashVars="imgUrl=__ROOT__/<?php echo ($k['images']); ?>&uploadUrl=__ROOT__/admin/index/uploadfile&uploadSrc=false"
NAME="myMovieName" ALIGN="" TYPE="application/x-shockwave-flash" allowScriptAccess="always"
PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
</EMBED>
</OBJECT>
 

  </div>

  <div id="avatar_priview"></div>

	</div>
<script type="text/javascript" src="__PUBLIC__/lib/Validform_v5.3.2.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.doc.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/icheck/jquery.icheck.min.js"></script> 
<script src="__PUBLIC__/lib/date/js/moment.min.js"></script>
<script src="__PUBLIC__/lib/date/js/moment.zh-cn.js"></script>
<script src="__PUBLIC__/lib/date/js/ion.calendar.min.js"></script>
<script>
$(function(){
	$('.date').each(function(){
		$(this).ionDatePicker({
			lang: 'zh-cn',
			format: 'YYYY-MM-DD HH:00'
		});
	});
	$('.date-y').each(function(){
		$(this).ionDatePicker({
			lang: 'zh-cn',
			format: 'YYYY-MM-DD HH:00'
		});
	});
	$('.date-ymd').each(function(){
		$(this).ionDatePicker({
			lang: 'zh-cn',
			format: 'YYYY-MM-DD'
		});
	});
});
</script>
</body>
</html>