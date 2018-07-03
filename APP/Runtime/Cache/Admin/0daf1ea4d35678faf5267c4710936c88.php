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
<span class="topshadow bgadd"><a href="javascript:;"><i class="Hui-iconfont Hui-iconfont-manage"></i>数据管理</a></span>
<span class="topshadow bgf5 right"><a href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont Hui-iconfont-huanyipi"></i></a></span>
<span class="topright">

</span>
</div>
<div class="admin">
<div class="pd-20">
   <table class="table table-border table-bordered table-bg table-hover table-sort">

    <thead>
      <tr class="text-c">
                            <th width="40px">序号</th>
                            <th>文件名</th>
                            <th width="150px">备份时间</th>
                            <th width="130px">文件大小</th>
                            <th width="100px">操作</th>
      </tr>
    </thead>
				  <tbody>
                        <?php if(!empty($lists)): if(is_array($lists)): foreach($lists as $key=>$row): if($key > 1): ?><tr>
                                        <td><?php echo ($key-1); ?></td>
                                        <td style="text-align: left"><a href="<?php echo U('database/index',array('Action'=>'download','file'=>$row));?>"><?php echo ($row); ?></a></td>
                                        <td><?php echo (getfiletime($row,$datadir)); ?></td>
                                        <td><?php echo (getfilesize($row,$datadir)); ?></td>
                                        <td>
                                            <a href="<?php echo U('database/index',array('Action'=>'download','file'=>$row));?>">下载</a>
                                            <a onclick="return confirm('确定将数据库还原到当前备份吗？')"href="<?php echo U('database/index',array('Action'=>'RL','File'=>$row));?>">还原</a>
                                            <a onclick="return confirm('确定删除该备份文件吗？')"href="<?php echo U('database/index',array('Action'=>'Del','File'=>$row));?>">删除</a>
                                        </td>
                                    </tr><?php endif; endforeach; endif; ?>
                            <?php else: ?>
                            <tr>
                                <td colspan="7">没有找到相关数据。</td>
                            </tr><?php endif; ?>
                    </tbody>

                </table>
	<p class="mt-5"><a class="btn btn-primary f-r mb-10" type="button" onClick="location.href = '__URL__/index/Action/backup'">数据备份</a></p> <br><br>  

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