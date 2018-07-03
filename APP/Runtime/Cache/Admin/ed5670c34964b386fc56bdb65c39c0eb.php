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
<title><?php echo ($title); ?></title>
</head>
<body>

<div class="topsearch">
<span class="topshadow bgadd"><a onclick="comm_all_add('添加角色','<?php echo U(GROUP_NAME.'/Rbac/addrole');?>')" href="javascript:;"><i class="Hui-iconfont Hui-iconfont-add"></i>添加角色</a></span>
<span class="topshadow bgdel"><a href="javascript:;" onClick="all_del(this,'<?php echo U(GROUP_NAME.'/Rbac/delall');?>')"><i class="Hui-iconfont Hui-iconfont-del2 "></i>批量删除</a></span>
<span class="topshadow bgf5 right"><a href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont Hui-iconfont-huanyipi"></i></a></span>
</div>

<div class="admin">
<div class="pd-20">
  <table class="table table-border table-bordered table-hover table-bg">
    <thead>
      <tr class="text-c">
        <th width="25"><input type="checkbox" value="" name=""></th>
        <th width="40">ID</th>
        <th width="200">角色名</th>
        <th width="">描述</th>
        <th width="100">操作</th>
      </tr>
    </thead>
    <tbody>
	        <?php if(is_array($role)): foreach($role as $key=>$v): ?><tr class="text-c">
        <td><input type="checkbox" value="" name=""></td>
        <td><?php echo ($v["id"]); ?></td>
        <td><?php echo ($v["name"]); ?></td>
        <td><?php echo ($v["remark"]); ?></td>
        <td >
		<a class="edit" title="权限分配" href="javascript:;" onclick="comm_edit('权限管理','<?php echo U(GROUP_NAME. '/Rbac/access',array('rid'=>$v['id']),'');?>')"><i class="Hui-iconfont Hui-iconfont-key"></i>权限</a> 
		<a class="del" title="删除" href="javascript:;" onclick="comm_del(this,'<?php echo ($v["id"]); ?>','<?php echo U(GROUP_NAME.'/Rbac/roledel',array(id=>$v['id']));?>')" ><i class="Hui-iconfont Hui-iconfont-del2"></i>删除</a></td>
      </tr><?php endforeach; endif; ?>
    </tbody>
  </table>
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