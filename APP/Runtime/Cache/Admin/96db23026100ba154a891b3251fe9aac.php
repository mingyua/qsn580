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
<![endif]-->		<script type="text/javascript">		window.UEDITOR_HOME_URL='__ROOT__/Ueditor/';		window.onload=function(){			UE.getEditor('content');			}        </script>		<script src="__ROOT__/Ueditor/ueditor.config.js"></script>		<script src="__ROOT__/Ueditor/ueditor.all.min.js"></script>		<script src="__PUBLIC__/js/common.js"></script><title><?php echo ($title); ?></title></head><body><div class="admin"><?php echo ($nav); ?><div class="pd-20"> 	<form action="<?php echo U(GROUP_NAME.'/Article/edit');?>" method="post" enctype="multipart/form-data">     <table class="table table-border table-bordered table-bg table-hover table-sort">    <tr>    <th class="text-r" width="100"><?php echo C('news_chose_catid');?></th>	<td><select class="select" name="kinds" style="width:200px;">    <option value="<?php echo ($alist['kinds']); ?>"><?php echo ($alist['cate']); ?></option>   <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>    </select>    </td></tr>    <tr>    <th class="text-r"><?php echo C('title');?></th>    <td><input name="title" type="text" class="input-text" style="width:500px" value="<?php echo ($alist['title']); ?>"  /></td>    <tr>    <th class="text-r"><?php echo C('news_title');?></th>    <td><input name="retitle" type="text" class="input-text" style="width:500px" value="<?php echo ($alist['retitle']); ?>"  /></td>    </tr>    <tr><th class="text-r"><?php echo C('fromlink');?></th><td><input name="url" type="text" class="input-text" style="width:500px" value="<?php echo ($alist['url']); ?>"  />&nbsp;&nbsp;如：Http://www.gylongteng.com</td></tr>    <tr><th class="text-r"><?php echo C('thumb');?></th><td>        <table id="gallery-table" align="center">          <tbody>         <tr >            <td align="left" height="60">            <span class="btn-upload" style="float:left">	  <a style="z-index:2;" href="javascript:void();" class="btn-uploadpic">浏览</a>	  <input type="file" name="file"  id="imgong" onchange="preImg(this.id,'img1');" value="<?php echo ($alist['pic']); ?>" class="input-file">	  </span><span class="ml-10" style="float:left;" ><img id="img1" src="__ROOT__/<?php echo ($alist['pic']); ?>" style="display: block;max-height:60px;" /></span>            </td>          </tr>        </tbody>        </table>    </td></tr>    <tr id="last"><th class="text-r"><?php echo C('news_keywords');?></th><td><input name="key" type="text" class="input-text" style="width:500px" value="<?php echo ($alist['key']); ?>"  />&nbsp;&nbsp;多个关键词用“,”隔开，字数控制在100个以内</td></tr>    <tr><th class="text-r"><?php echo C('news_description');?></th><td><textarea name="description" class="textarea"  ><?php echo ($alist['description']); ?></textarea></td></tr>            <tr><th class="text-r"><?php echo C('content');?></th><td>    <textarea id="content"  name="contents" style="width:100%;height:200px"><?php echo ($alist['contents']); ?></textarea>    </td></tr> 	<tr>		<th class="text-r">作者</th>		<td><input name="write" type="text"  value="<?php echo ($_SESSION['username']); ?>" class="input-text"  style="width:500px;"/></td>	</tr>	<tr>		<th class="text-r">发布时间</th>		<td>				<input type="text" class="date input-text" style="width:200px;" name="time" placeholder="请选择日期" value="<?php echo date('Y-m-d H:i:s',time())?>">		</td>	</tr><!--  <tr>    <th class="text-r">属性选择</th>    <td>	<?php if(is_array($attr)): foreach($attr as $key=>$v): ?><input type="checkbox" name="aid[]" value="<?php echo ($v["id"]); ?>" style="margin-left:10px;" <?php if($v["aid"]): ?>checked='checked'<?php endif; ?> ><?php echo ($v["name"]); endforeach; endif; ?>	</td>    </tr>-->        <tr><th class="text-r"><?php echo C('status_ok');?></td><td><cite>    <input name="status" type="radio" value="1" <?php if($alist['status'] == 1): ?>checked="checked"<?php endif; ?>  /><?php echo C('yes');?>&nbsp;&nbsp;&nbsp;&nbsp;    <input name="status" type="radio" value="0" <?php if($alist['status'] == 0): ?>checked="checked"<?php endif; ?> /><?php echo C('no');?></cite>    </td></tr>	<input name="id" type="hidden"  value="<?php echo ($alist['id']); ?>" />	<input name="hits" type="hidden"  value="<?php echo ($alist['hits']); ?>" />	<input name="pic" type="hidden"  value="<?php echo ($alist['pic']); ?>" />        <tr><th class="text-r">&nbsp;</td><td><input name="submit" type="submit" class="btn" value="<?php echo C('on_save');?>"/></td></tr></table>        </form>	</div>	</div><script type="text/javascript" src="__PUBLIC__/lib/Validform_v5.3.2.js"></script> 
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
</script></body></html>