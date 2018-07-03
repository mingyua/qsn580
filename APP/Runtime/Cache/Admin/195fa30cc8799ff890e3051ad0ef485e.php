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
<span class="topshadow bgadd"><a href="javascript:;"><i class="Hui-iconfont Hui-iconfont-manage"></i>用户列表</a></span>
<span class="topshadow bgdel"><a href="javascript:;" onClick="all_del(this,'<?php echo U(GROUP_NAME.'/Rbac/delall');?>')"><i class="Hui-iconfont Hui-iconfont-del2 "></i>批量删除</a></span>
<span class="topshadow bgf5 right"><a href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont Hui-iconfont-huanyipi"></i></a></span>
<span class="topright">
    <form class="Huiform" method="post" action="<?php echo U(GROUP_NAME. '/Rbac/addUser');?>" target="_self">
      <input type="text" placeholder="帐号" name="username" autocomplete="off" value="" class="input-text" style=" width:150px">
      <input type="password" name="password" placeholder="密码" autocomplete="on" value="" class="input-text" style="width:150px;">
      <input type="password" name="repassword" placeholder="确认密码" autocomplete="on" value="" class="input-text" style="width:150px;">
      <span class="select-box" style="width:150px;">
      <select class="select" name="role_id[]" size="1">
		<?php if(is_array($role)): foreach($role as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
      </select>
      </span>
      <input type="submit" class="btn btn-success" id="" name="submit" value="添加">
    </form>
</span>
</div>
<div class="admin">
<div class="pd-20">
  <table class="table table-border table-bordered table-bg">
    <thead>
      <tr class="text-c">
        <th width="25"><input type="checkbox" name="" value=""></th>
        <th width="40">ID</th>
        <th width="40">拍卖号</th>
        <th width="150">登录名</th>
        <th>角色</th>
        <th width="130">登录IP</th>
        <th width="130">加入时间</th>
        <th width="100">是否已启用</th>
        <th width="140">操作</th>
      </tr>
    </thead>
    <tbody>
        <?php if(is_array($user)): foreach($user as $key=>$v): ?><tr class="text-c">
        <td><input type="checkbox" value="1" name=""></td>
        <td><?php echo ($v["id"]); ?></td>
        <td><?php echo ($v["uid"]); ?></td>
        <td><?php echo ($v["username"]); ?></td>
		<td><?php if($v["username"] == C(RBAC_SUPERADMIN)): ?>超级管理员<?php else: ?>
        <ul>
        <?php if(is_array($v["role"])): foreach($v["role"] as $key=>$value): ?><li><?php echo ($value["name"]); ?>(<?php echo ($value["remark"]); ?>)</li><?php endforeach; endif; ?>
        </ul><?php endif; ?></td>
		<td><?php echo ($v["loginip"]); ?></td>
        <td><?php echo (date('Y-m-d H:i',$v["logintime"])); ?></td>
         <td class="comm-status" rel="<?php echo ($v["id"]); ?>" data-status="<?php echo ($v["lock"]); ?>"><a title="<?php if($v["lock"] == 1): ?>启用<?php else: ?>禁用<?php endif; ?>"><i class="f-20 Hui-iconfont <?php if($v["lock"] == 1): ?>Hui-iconfont-suoding c-red <?php else: ?>Hui-iconfont-jiesuo c-primary<?php endif; ?>"></i></a></td>
		<td class="comm-manage">
			<a  class="del"  onclick="comm_add('充值','<?php echo U(GROUP_NAME.'/Rbac/chong',array(id=>$v['id']));?>')" href="javascript:;" title="充值">充值</a> 
			<a  class="edit"  onclick="comm_add('编辑','<?php echo U(GROUP_NAME.'/Rbac/edit',array(id=>$v['id']));?>')" href="javascript:;" title="编辑"><i class="Hui-iconfont Hui-iconfont-edit"></i>编辑</a> 
			<a  class="del" onClick="comm_del(this,'<?php echo ($v["id"]); ?>','<?php echo U(GROUP_NAME.'/Rbac/userdel',array(id=>$v['id']));?>')" href="javascript:;" title="删除"><i class="Hui-iconfont Hui-iconfont-del2"></i>删除</a>
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
<script>
$(function(){
	$("table").on('click','.comm-status',function(){
	var id=$(this).attr('rel');
	var zt=$(this).attr('data-status');
	if(zt==1){
	var cdiv="Hui-iconfont-jiesuo c-primary f-20";
		var title="未通过";
	}else{
	var cdiv="Hui-iconfont-suoding c-red f-20";
		var title="通过";
	}
	var html=$(this);
		$.ajax({
			url:"__URL__/status",
			type:"POST",
			data:{
				id:id,
			},
			success:function(msg){
				if(msg==1){
					html.html('<a title="'+title+'"><i class="Hui-iconfont '+cdiv+'"></i></a>');
					layer.msg('成功!',{icon:1,time:1000});
				}else{
					layer.msg('失败!',{icon:5,time:1000});
				}

			},
		
		});
	});
});
</script>
</body>
</html>