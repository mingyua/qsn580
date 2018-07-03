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
<div class="topsearch">
<span class="topshadow bgadd"><a href="javascript:;"><i class="Hui-iconfont Hui-iconfont-manage"></i>广告管理</a></span>
</div>
<div class="admin">
<div class="pd-20">
 <form name="form1" onSubmit="return checkSubmit()" action="<?php echo U(GROUP_NAME.'/Slide/delall','','');?>"  method="post">
<table class="table table-border table-bordered table-bg table-hover table-sort">    
     <thead>
      <tr class="text-c">
        <th width="25"><input type="checkbox" name="" value=""></th>
        <th width="">缩略图</th>
        <th>标题</th>
        <th width="">分类</th>
        <th width="100">发布状态</th>
        <th width="140">操作</th>
      </tr>
    </thead>
    
    <tbody>
     <?php if(is_array($ad)): foreach($ad as $key=>$v): ?><tr  class="text-c">
    <td><input type="checkbox" value="" name=""></td>
    <td><img src="__ROOT__/<?php echo ($v["pic"]); ?>" height="60" /></td>
    <td><?php echo ($v["title"]); ?><p>发布时间：<?php echo (date('Y-m-d H:i',$v["time"])); ?></p></td>
    <td><?php echo ($v["kinds"]); ?><p>ID: <?php echo ($v["id"]); ?></p></td>
    <td><?php if($v["status"] == 1): ?>显示<?php else: ?><font color="#FF0000">不显示</font><?php endif; ?></td>
    <td>
	  <a class="edit" title="编辑" href="javascript:;" onclick="comm_edit('分类编辑','<?php echo U(GROUP_NAME.'/Ad/edit',array('id'=>$v['id']));?>')"><i class="Hui-iconfont Hui-iconfont-edit"></i>编辑</a> 
	  <a class="del" title="删除" href="javascript:;" onclick="comm_del(this,'<?php echo ($v["id"]); ?>','<?php echo U(GROUP_NAME.'/Ad/del',array(id=>$v['id']));?>')"><i class="Hui-iconfont Hui-iconfont-del2"></i>删除</a>
	</td>
    </tr><?php endforeach; endif; ?>    
    
    </tbody>
    
    </table>
    </form>
	<div class="pagination"><?php echo ($page); ?></div><br><br>
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