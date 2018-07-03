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
		window.UEDITOR_HOME_URL='__ROOT__/Ueditor/';
		window.onload=function(){
			UE.getEditor('content');
			}
        </script>
		<script src="__ROOT__/Ueditor/ueditor.config.js"></script>
		<script src="__ROOT__/Ueditor/ueditor.all.min.js"></script>
		<script src="__PUBLIC__/js/common.js"></script>

<title><?php echo ($title); ?></title>
</head>
<body>
<div class="topsearch">
<span class="topshadow bgadd"><a href="javascript:;"><i class="Hui-iconfont Hui-iconfont-manage"></i>站点配置</a></span>
</div>
<div class="admin">
<div class="pd-20">
<form action="<?php echo U(GROUP_NAME.'/System/base');?>" method="post" enctype="multipart/form-data">  
<table class="table table-border table-bordered table-hover table-bg">
  <tbody>
    <tr>
      <th class="text-r" width="100">网站名称：</th><td><input type="text" id="website-title" name="title" placeholder="控制在25个字、50个字节以内" value="<?php echo ($sys['site_title']); ?>" style="width:500px" class="input-text"></td>
    </tr>
    <tr>
      <th class="text-r">关键词：</th><td><input type="text" id="website-Keywords"  name="keywords" placeholder="5个左右,8汉字以内,用英文,隔开" value="<?php echo ($sys['seo_keywords']); ?>" style="width:500px"  class="input-text"></td>
    </tr>
    <tr>
      <th class="text-r">描述：</th><td><input type="text" id="website-description" name="description" placeholder="空制在80个汉字，160个字符以内" value="<?php echo ($sys['seo_description']); ?>" style="width:500px" class="input-text"></td>
    </tr>
	<tr>
    <tr>
      <th class="text-r" width="100">公司名称：</th><td><input type="text" id="website-title" name="name" placeholder="控制在25个字、50个字节以内" value="<?php echo ($sys['site_name']); ?>" style="width:500px" class="input-text"></td>
    </tr>
	<th class="text-r">标志：</th><td>
	<span class="btn-upload" style="float:left">
	  <a style="z-index:2;" href="javascript:void();" class="btn-uploadpic">浏览</a>
	  <input type="file" name="file"  id="imgong" onchange="preImg(this.id,'img1');" value="<?php echo ($sys['logo']); ?>" class="input-file">
	  </span><span class="ml-10" style="float:left;" ><img id="img1" src="__ROOT__/<?php echo ($sys['logo']); ?>" style="display: block;max-height:60px;" /></span>
	</td>
	</tr>
    <tr>
      <th class="text-r">URL链接：</th><td><input type="text" id="website-static" name="url" placeholder="网站地址" value="<?php echo ($sys['site_url']); ?>" style="width:500px" class="input-text"></td>
    </tr>
    <tr>
      <th class="text-r">站点邮箱：</th><td><input type="text" id="website-uploadfile" name="email" placeholder="站点邮箱" value="<?php echo ($sys['site_email']); ?>" style="width:500px" class="input-text"></td>
    </tr>
    <tr>
      <th class="text-r">联系人：</th><td><input type="text" id="website-uploadfile" name="peo" placeholder="站点邮箱" value="<?php echo ($sys['site_peo']); ?>" style="width:500px" class="input-text"></td>
    </tr>
    <tr>
      <th class="text-r">联系电话：</th><td><input type="text" id="website-uploadfile" name="phone" placeholder="站点邮箱" value="<?php echo ($sys['site_phone']); ?>" style="width:500px" class="input-text"></td>
    </tr>
    <tr>
      <th class="text-r">座机：</th><td><input type="text" id="website-uploadfile" name="tel" placeholder="站点邮箱" value="<?php echo ($sys['site_tel']); ?>" style="width:500px" class="input-text"></td>
    </tr>
    <tr>
      <th class="text-r">传真：</th><td><input type="text" id="website-uploadfile" name="fax" placeholder="站点邮箱" value="<?php echo ($sys['site_fax']); ?>" style="width:500px" class="input-text"></td>
    </tr>
    <tr>
      <th class="text-r">邮政编码：</th><td><input type="text" id="website-uploadfile" name="post" placeholder="站点邮箱" value="<?php echo ($sys['site_post']); ?>" style="width:500px" class="input-text"></td>
    </tr>
    <tr>
      <th class="text-r">联系地址：</th><td><input type="text" id="website-uploadfile" name="addr" placeholder="站点邮箱" value="<?php echo ($sys['site_addr']); ?>" style="width:500px" class="input-text"></td>
    </tr>
	
    <tr>
      <th class="text-r">底部版权信息：</th><td><textarea  id="content" name="content" style="width:100%;height:200px;"><?php echo ($sys['site_foot']); ?></textarea></td>
    </tr>
    <tr>
      <th class="text-r">备案号：</th><td><input type="text" id="website-icp" placeholder="黔ICP备00000000号" name="icp" value="<?php echo ($sys['site_icp']); ?>" style="width:500px" class="input-text"></td>
    </tr>
    <tr>
      <th class="text-r">统计代码：</th><td>
		<textarea class="" name="site_count" style="width:100%;height:60px;"><?php echo ($sys['site_count']); ?></textarea>
	  </td>
    </tr>
    <tr>
      <th class="text-r"></th><td><button name="system-base-save" id="system-base-save" class="btn btn-success radius" type="submit"><i class="icon-ok"></i> 确定</button></td>
    </tr>
  </tbody>
</table>
<input name="logo" type="hidden"  value="<?php echo ($sys['logo']); ?>"  />
</form>
</div>
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