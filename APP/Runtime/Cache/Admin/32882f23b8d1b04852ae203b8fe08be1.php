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
<span class="topshadow bgadd"><a onclick="comm_all_add('添加文章','<?php echo U(GROUP_NAME.'/Article/add');?>')" href="javascript:;"><i class="Hui-iconfont Hui-iconfont-add"></i>添加文章</a></span>
<span class="topshadow bgdel"><a href="javascript:;" onClick="all_del(this,'<?php echo U(GROUP_NAME.'/Article/delall');?>')"><i class="Hui-iconfont Hui-iconfont-del2 "></i>批量删除</a></span>
<span class="topshadow bgf5 right"><a href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont Hui-iconfont-huanyipi"></i></a></span>
<span class="topright"><form method="get" action="<?php echo U(GROUP_NAME.'/Article/index/');?>"><input type="text" placeholder="请输入关键词" class="input-text ac_input" name="key" value="" id="key" autocomplete="off" style="width:300px"><button type="submit" class="btn btn-default" id="search_button">搜索</button></form></span>
</div>
<div class="admin">
<div class="pd-20">
<form method="post"> 
  <table class="table table-border table-bordered table-bg table-hover table-sort">
    <thead>
      <tr class="text-c">
        <th width="25"><input type="checkbox" name="" value=""></th>
        <th width="40">ID</th>
        <th>标题</th>
        <th width="160">分类</th>
        <th width="80">作者</th>
        <th width="120">更新时间</th>
        <th width="75">浏览次数</th>
        <th width="60">发布状态</th>
        <th width="140">操作</th>
      </tr>
    </thead>
    <tbody>
        <?php if(is_array($article)): foreach($article as $key=>$v): ?><tr class="text-c">
        <td><input type="checkbox" value="<?php echo ($v["id"]); ?>" name="delall"></td>
        <td><?php echo ($v["id"]); ?></td>
        
        <td class="text-l"><u style="cursor:pointer" class="text-primary" onClick="article_edit('10001','650','','查看','article-zhang.html')" title="查看"><?php echo ($v["title"]); ?></u>
<!--		<?php if(is_array($v["attr"])): foreach($v["attr"] as $key=>$value): ?><span class="pl-5" style="color:<?php echo ($value["color"]); ?>">[<?php echo ($value["name"]); ?>]</span><?php endforeach; endif; ?>
		-->
		</td>
        <td><?php echo ($v["cate"]); ?></td>
        <td><?php echo ($v["write"]); ?></td>
        <td><?php echo (date('Y-m-d H:i',$v["time"])); ?></td>
        <td><?php echo ($v["hits"]); ?></td>
        <td class="comm-status">
		<a style="text-decoration:none" onClick="<?php if($v[status] == 1): ?>comm_down<?php else: ?>comm_up<?php endif; ?>(this,'<?php echo ($v["id"]); ?>','<?php echo U(GROUP_NAME.'/Article/status',array(id=>$v['id']));?>','发布','下架')" href="javascript:;" title="<?php if($v[status] == 0): ?>发布<?php else: ?>下架<?php endif; ?>" id="send">
		<i class="<?php if($v[status] == 1): ?>Hui-iconfont Hui-iconfont-shenhe-tongguo c-success  f-18<?php else: ?>Hui-iconfont Hui-iconfont-shenhe-butongguo2 c-red f-18<?php endif; ?>"></i>
		</a> 
		</td>
        <td class="f-14 comm-manage">		
		<a class="edit" onclick="comm_all_edit('编辑文章','<?php echo U(GROUP_NAME.'/Article/edit',array(id=>$v['id']));?>')"  href="javascript:;" title="编辑" ><i class="Hui-iconfont Hui-iconfont-edit pr-5"></i>编辑</a> 
		
		<a class="del" onClick="comm_del(this,'<?php echo ($v["id"]); ?>','<?php echo U(GROUP_NAME.'/Article/del',array(id=>$v['id']));?>')" href="javascript:;" title="删除"><i class="Hui-iconfont Hui-iconfont-del2 pr-5"></i>删除</a>
		</td>
      </tr><?php endforeach; endif; ?>
    </tbody>
  </table>
</form>
<div class="pagination"><?php echo ($page); echo ($tip); ?></div>
</div>
</div>
<script type="text/javascript" src="__PUBLIC__/lib/jquery.min.js"></script> 

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
<script type="text/javascript">
$(function(){
	$('.table-sort tbody').on( 'click', 'tr', function () {
		if ( $(this).hasClass('selected') ) {
			$(this).removeClass('selected');
		}
		else {
			table.$('tr.selected').removeClass('selected');
			$(this).addClass('selected');
		}
	});
});
</script>
</body>
</html>