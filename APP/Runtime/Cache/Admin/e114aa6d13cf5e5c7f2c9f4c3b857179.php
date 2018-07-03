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
    <form action="<?php echo U(GROUP_NAME.'/System/navedit');?>" method="post" id="form-article-class" enctype="multipart/form-data">
    <table class="table table-border table-bordered table-hover table-bg">
    	<input type="hidden" value="<?php echo ($mode); ?>" />
    	<tr>
        	<td width="150">上级导航</td>
            <td>
            	<select class="select" id="sel_Sub"  name="pid">
            	<option value="<?php if($kname['id'] != null): echo ($kname['id']); else: ?>0<?php endif; ?>"><?php if($kname['id'] != null): echo ($kname["name"]); else: ?>作为一级导航<?php endif; ?></option>
            	<option value="0">作为一级导航</option>
                   <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
            	</select>
            </td>
        </tr>
        <tr>
            <td width="150">所属类型</td>
            <td>
            <input type="radio" name="module"  value="Single" <?php if($k['module'] == Single): ?>checked="checked"<?php endif; ?> />单文章模型
            <input type="radio" name="module"  value="Article" <?php if($k['module'] == Article): ?>checked="checked"<?php endif; ?> />文章列表
            <input type="radio" name="module"  value="Product" <?php if($k['module'] == Product): ?>checked="checked"<?php endif; ?> />产品模型
            <input type="radio" name="module"  value="Slide" <?php if($k['module'] == Slide): ?>checked="checked"<?php endif; ?> />幻灯片
            <input type="radio" name="module"  value="Ad" <?php if($k['module'] == Ad): ?>checked="checked"<?php endif; ?> />广告
            <input type="radio" name="module"  value="Ad" <?php if($k['module'] == ''): ?>checked="checked"<?php endif; ?> />其它
            
            </td>
        </tr>
        <tr>
            <td width="150">导航名称</td>
            <td><input type="text" name="name" class="input-text" value="<?php echo ($k["name"]); ?>" /></td>
        </tr>
        <tr>
            <td width="150">导航链接</td>
            <td><input type="text" name="url" class="input-text" value="<?php echo ($k["url"]); ?>" /></td>
        </tr> 
         <tr>
            <td width="150">是否显示</td>
            <td>显示 <input type="radio" name="status" class="" value="1" <?php if($k['status'] == 1): ?>checked="checked"<?php endif; ?>   /> 　
              不显示 <input type="radio" name="status" class="" value="0" <?php if($k['status'] == 0): ?>checked="checked"<?php endif; ?>   /> </td>
        </tr>
         <tr>
            <td width="150">开启二级</td>
            <td>开启 <input type="radio" name="enable" class="" value="1" <?php if($k['enable'] == 1): ?>checked="checked"<?php endif; ?>  />
              　关闭 <input type="radio" name="enable" class="" value="0" <?php if($k['enable'] == 0): ?>checked="checked"<?php endif; ?>  /> </td>
        </tr>
       <tr>
            <td width="150">新窗口打开</td>
            <td>是 <input type="radio" name="window" class="" value="1" <?php if($k['window'] == 1): ?>checked="checked"<?php endif; ?>  /> 
              　否 <input type="radio" name="window" class="" value="0" <?php if($k['window'] == 0): ?>checked="checked"<?php endif; ?>  /> </td>
        </tr>
        <tr>
            <td width="150">排序</td>
            <td><input type="text" name="sort" class="input-text" value="<?php echo ($k["sort"]); ?>" /></td>
        </tr> 
         <tr>
            <td width="150">导航图片</td>
            <td>            
            <span class="btn-upload" style="float:left">
	  <a style="z-index:2;" href="javascript:void();" class="btn-uploadpic">浏览</a>
	  <input type="file" name="file"  id="imgong" onchange="preImg(this.id,'img1');" value="<?php echo ($k['image']); ?>" class="input-file">
	  </span><span class="ml-10" style="float:left;" ><img id="img1" src="__ROOT__/<?php echo ($k['image']); ?>" style="display: block;max-height:60px;" /></span>
</td>
        </tr>
        <tr>
            <td width="150">导航标题</td>
            <td><input type="text" name="title" class="input-text" value="<?php echo ($k["title"]); ?>" /></td>
        </tr>       
        <tr>
            <td width="150">导航关键词</td>
            <td><textarea class="textarea" name="keys"><?php echo ($k["keys"]); ?></textarea></span></td>
        </tr>
        <tr>
            <td width="150">导航描述</td>
            <td><textarea class="textarea" name="description"><?php echo ($k["description"]); ?></textarea></td>
        </tr>
         <tr>
            <td width="150">设为导航栏目</td>
            <td>是 <input type="radio" name="nav"  value="1" <?php if($k['nav'] == 1): ?>checked="checked"<?php endif; ?>  /> 　否 <input type="radio" name="nav" value="0" <?php if($k['nav'] == 0): ?>checked="checked"<?php endif; ?> /> </td>
        </tr>
       <input type="hidden" name="id" value="<?php echo ($k["id"]); ?>" />
        <input type="hidden" name="pid" value="<?php echo ($k["pid"]); ?>" />
    	<tr><td></td><td><input type="submit" value="修改" class="btn btn_submit" /></td></tr>
    </table>
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