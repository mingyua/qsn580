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
<script src="__PUBLIC__/js/common.js"></script>
<title><?php echo ($title); ?></title>
</head>
<body>
<div class="admin">
<?php echo ($nav); ?>
<div class="pd-20">

<form  action="<?php echo U(GROUP_NAME.'/Ad/edit');?>" method="post" enctype="multipart/form-data">
<table class="table table-border table-bordered table-bg table-hover table-sort">
<tr>
    <th class="text-r" width="100">分类选择</th>
    <td>
     <select class="input-text" name="kinds" style="width:200px">
    <option value="<?php echo ($ad["kinds"]); ?>"><?php echo ($ad["kinds"]); ?></option>
    <option value="广告">广告</option>
    <option value="友情链接">友情链接</option>
    </select>
    </td>
</tr>
<tr>
    <th class="text-r">标题</th>
    <td>
      <input class="input-text" style="width:500px"  type="text" name="title" id="formGroupInputSmall" placeholder="" value="<?php echo ($ad["title"]); ?>">
    </td>
</tr>
<tr>
    <th class="text-r">副标题</th>
    <td>
      <input class="input-text" style="width:500px"  name="name" type="text" id="formGroupInputSmall"  value="<?php echo ($ad["name"]); ?>" />
    </td>
</tr>
<tr>
    <th class="text-r">链接地址</th>
    <td>
      <input class="input-text" style="width:500px"  type="text" name="url" id="formGroupInputSmall" placeholder="" value="<?php echo ($ad["url"]); ?>">
    </td>
</tr>
<tr>
    <th class="text-r">位置</th>
    <td>
      <input class="input-text" style="width:500px"  type="text" name="pos" id="formGroupInputSmall" placeholder="" value="<?php echo ($ad["pos"]); ?>">
    </td>
</tr>
<tr>
    <th class="text-r">图片地址</th>
    <td>
        <span class="btn-upload" style="float:left">
	  <a style="z-index:2;" href="javascript:void();" class="btn-uploadpic">浏览</a>
	  <input type="file" name="file"  id="imgong" onchange="preImg(this.id,'img1');" value="<?php echo ($ad['pic']); ?>" class="input-file">
	  </span><span class="ml-10" style="float:left;" ><img id="img1" src="__ROOT__/<?php echo ($ad['pic']); ?>" style="display: block;"  height="60"/></span>
    </td>
</tr>
</tr>
<tr>
    <th class="text-r">图片描述</th>
    <td>
      <textarea  class="textarea" rows="5" cols="80"  name="contents"><?php echo ($ad["content"]); ?></textarea>
    </td>
</tr>
<tr>
    <th class="text-r">排序</th>
    <td>
      <input class="input-text" style="width:500px"  type="text" name="sort" id="formGroupInputSmall" placeholder="100" value="<?php echo ($ad["sort"]); ?>">
    </td>
</tr>
<tr>
    <th class="text-r">是否显示</th>
    <td>
      <input type="radio" name="status" value="1" <?php if($ad["status"]==1): ?>checked='checked'<?php endif; ?> />显示
      <input type="radio" name="status" value="0" <?php if($ad["status"]==0): ?>checked='checked'<?php endif; ?> />不显示
    </td>
</tr>
<tr>
    <th class="text-r"></th>
    <td>
       <button type="submit" name="submit" class="btn btn-primary">马上发布</button>
       <button type="button" class="btn btn-primary">取消</button>
    </td>
</tr>
</table>
  <input type="hidden" name="id" value="<?php echo ($ad['id']); ?>" />
  <input type="hidden" name="pic" value="<?php echo ($ad['pic']); ?>" />

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