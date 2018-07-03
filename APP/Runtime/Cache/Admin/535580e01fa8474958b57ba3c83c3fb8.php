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
<title><?php echo ($site["site_title"]); ?></title>
<meta name="keywords" content="<?php echo ($site["keywords"]); ?>">
<meta name="description" content="<?php echo ($site["description"]); ?>">
</head>
<body>
<header class="Hui-header cl"> 
<a class="Hui-logo l" title="<?php echo ($site["site_title"]); ?>" href="#"><img src="__PUBLIC__/images/user.png" height="30" ></a>

<span class="mr-20 ml-5 "><a class="btn loginout" href="<?php echo U('Index/logout');?>" title="退出" > <i class="icon-eye-close"></i>退出</a></span>
<input type="button" id="button" class="btn btn-secondary f-r mt-5 ml-5" value="清除缓存">
<span><a class="btn btn-primary" href="<?php echo ($site["site_url"]); ?>" title="前台主页" target="_blank"><i class="icon-desktop"></i> 前台主页</a></span>
</header>

<aside class="hui-left">
<div class="Hui-aside">
<div class="usercon">
	<div class=""><a title="头像上传" href="javascript:;" onclick="comm_edit('头像上传','<?php echo U('Index/avater');?>','id','700','534')" style="text-decoration:none"><img src="__ROOT__/<?php echo ($k['images']); ?>"></a></div>
	<p><?php echo ($_SESSION['username']); ?></p>
</div>
<input runat="server" id="divScrollValue" type="hidden" value="" />
<div class="menu_dropdown bk_2">
	<?php if(is_array($node)): $i = 0; $__LIST__ = $node;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl id="menu-user">
        <dt><i class="<?php echo ($vo["ico"]); ?>"></i> <?php echo ($vo["title"]); ?><i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
        <dd>
          <ul>
			 <?php if(is_array($vo['node'])): $i = 0; $__LIST__ = $vo['node'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li class="arrowline"><a _href="__APP__/<?php echo ($vo["name"]); ?>/<?php echo ($sub["name"]); ?>"  class="menubg"  style=" display:<?php if($sub["enable"] == 0): ?>none<?php else: ?>block<?php endif; ?> "><?php echo ($sub["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </dd>
      </dl><?php endforeach; endif; else: echo "" ;endif; ?>  	

    </div>
 
</div>
  </aside>
<div class="dislpayArrow"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
  <div id="Hui-tabNav" class="Hui-tabNav">
    <div class="Hui-tabNav-wp">
      <ul id="min_title_list" class="acrossTab cl">
        <li class="active"><span title="我的桌面" data-href="<?php echo U('Index/welcome');?>">我的桌面</span><em></em></li>
      </ul>
    </div>
    <div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont Hui-iconfont-arrow2-left"></i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont Hui-iconfont-arrow2-right"></i></a></div>
  </div>
  <div id="iframe_box" class="Hui-article">
    <div class="show_iframe">
      <div style="display:none" class="loading"></div>
      <iframe scrolling="yes" frameborder="0" src="<?php echo U('Index/welcome');?>"></iframe>
    </div>
  </div>
</section>
</div>
<script type="text/javascript">
$(function(){
	$("#button").click(function(){
			$.post("<?php echo U('/Cache/cache_clean');?>",function(data){
				$('.show_iframe').hide();
				var href="<?php echo U('/Cache/cache');?>";
				$('#iframe_box').append('<div class="show_iframe pd-20">'+data+'</div>');
			});
			
	});
	
});

</script>

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
	$('.menu_dropdown').on('click','li',function(msg){
		$(this).addClass('arrow019').siblings().removeClass('arrow019');
	});
});

</script>

</body>
</html>