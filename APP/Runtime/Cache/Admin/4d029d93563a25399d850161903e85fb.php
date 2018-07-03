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
<span class="topshadow bgadd"><a onclick="comm_all_add('添加文章','<?php echo U(GROUP_NAME.'/System/navadd');?>')" href="javascript:;"><i class="Hui-iconfont Hui-iconfont-add"></i>添加导航</a></span>
<span class="topshadow bgdel"><a href="javascript:;" onClick="all_del(this,'<?php echo U(GROUP_NAME.'/System/delall');?>')"><i class="Hui-iconfont Hui-iconfont-del2 "></i>批量删除</a></span>
<span class="topshadow bgf5 right"><a href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont Hui-iconfont-huanyipi"></i></a></span>
</div>
<div class="admin">
<div class="pd-20 text-c">
 
  <div class="article-class-list cl">
    <table class="table table-border table-bordered table-hover table-bg">
      <thead>
        <tr class="text-c">
          <th width="25"><input type="checkbox" name="" value=""></th>
          <th width="80">ID</th>
          <th width="80">排序</th>
          <th>分类名称</th>
          <th>链接地址</th>
          <th width="140">操作</th>
        </tr>
      </thead>
      <tbody>
	  
          <?php if(is_array($cate)): foreach($cate as $$k=>$v): ?><tr  class="text-c level<?php echo ($v["pid"]); ?> <?php if($v["level"] == 1): else: ?>hide<?php endif; ?>"  f-id="<?php echo ($v["id"]); ?>">
          <td><input type="checkbox" name="" value=""></td>
          <td><?php echo ($v["id"]); ?></td>
          <td><?php echo ($v["sort"]); ?></td>
          <td class="text-l"><span rel="<?php echo ($v["level"]); ?>" class="on f-24 mr-20 lh-30 "><?php if($v["level"] == 2): else: ?>+<?php endif; ?></span><?php echo ($v["html"]); echo ($v["name"]); ?></td>
          <td class="text-l"><?php echo ($v["url"]); ?></td>
          <td>
		  <a  class="edit" title="编辑" href="javascript:;" onclick="comm_edit('导航编辑','<?php echo U(GROUP_NAME.'/System/navedit',array('id'=>$v['id']));?>')" style="text-decoration:none"><i class="Hui-iconfont Hui-iconfont-edit"></i>编辑</a> 
			<a class="del" onClick="comm_del(this,'<?php echo ($v["id"]); ?>','<?php echo U(GROUP_NAME.'/System/del',array(id=>$v['id']));?>')" href="javascript:;" title="删除"><i class="Hui-iconfont Hui-iconfont-del2"></i>删除</a>		  </td>
        </tr><?php endforeach; endif; ?>
      </tbody>
    </table>
  </div>
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
	$("table").on('click','tr',function(){
		var fid=$(this).attr("f-id");
		var level=$(this).find(".on").attr('rel');
			if($(".level"+fid).is('.hide')){
			$(this).find(".on").html("-");
			$(".level"+fid).removeClass('hide');
			}else{
			if(level==2){
			$(this).find(".on").html("");
			}else{
			$(this).find(".on").html("+");
			}
			$(".level"+fid).addClass('hide');
			}
		//alert(level);
	});
});

</script>
<br>
</body>
</html>