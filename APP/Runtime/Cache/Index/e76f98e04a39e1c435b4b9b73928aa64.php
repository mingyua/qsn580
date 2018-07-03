<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv = "X-UA-Compatible" content = "IE=edge,chrome=1" />
<!--[if lt IE 9]>
<script type="text/javascript" src="__PUBLIC__/lib/html5.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/respond.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/H-ui.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css" />
<!--[if lt IE 9]>
<link href="__PUBLIC__/css/H-ui.ie.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<script type="text/javascript" src="__PUBLIC__/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title><?php echo ($title); echo ($site["site_title"]); ?></title>
<meta name="keywords" content="<?php echo ($site["seo_keywords"]); ?>">
<meta name="description" content="<?php echo ($site["seo_description"]); ?>">

 </head>
  <body>
<header class="navbar-wrapper1">
<?php echo ($topad); ?>
	<div class="container cl">
	<a href="" class="logo"><img src="__ROOT__/<?php echo ($site["logo"]); ?>"></a>
	</div>
	<div class="navbar navbar-blue">
		<div class="container cl">
			<div class="nav navbar-nav nav-collapse" role="navigation" id="Hui-navbar">
				<ul class="cl">
					<li class="current"><a href="__ROOT__/">首页</a></li>
					<?php $_nav_cate=M('cate')->where("nav='1' and enable='1'")->order("sort")->limit(40)->select(); import('Class.Cate',APP_PATH); $_nav_cate=Cate::unlimitedForLayer($_nav_cate); foreach($_nav_cate as $_nav_cate_v) : extract($_nav_cate_v); $mainurl=U(GROUP_NAME.'/'.$url); $url=U('/c_'.$id); ?><li class="dropDown dropDown_hover"><a href="<?php echo ($mainurl); ?>" tppabs="<?php echo ($url); ?>" target="<?php if($window == 1): ?>_blank<?php else: ?>_self<?php endif; ?>"><?php echo ($name); ?></a> <!--是否有子栏目-->
								<ul class="dropDown-menu menu radius box-shadow">
								<?php if(is_array($child)): foreach($child as $key=>$v): ?><li><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($v["url"]); ?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
								</ul>
							</li><?php endforeach;?>		
				</ul>

			</div>
		</div>
	</div>
</header>

<section id="ad" class=" cl">
<a ><img src="<?php echo ($site["site_url"]); ?>/<?php echo ($pic["image"]); ?>" width="100%"  class="box-shadow"></a>
</section>
<section id="content" class="container cl bg-white box-shadow">
	<div class="row cl ">
		<div id="commleft" class="col-2 f-l ">
				<div class="main_box_inner_left">
					<div  class="nav_title"><span  class="nav_sign"><?php echo ($cname["name"]); ?></span><span  class="nav_more"></span></div>
					<div class="nav_menu">
						<ul>
							<?php if(is_array($sublist)): foreach($sublist as $key=>$v): ?><li><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($v["url"]); ?>" class='<?php if($v["id"] == $eqid): ?>current<?php else: endif; ?>'><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
						</ul>
					</div>
				</div>
			
		</div>
		<div class="col-10 f-l">
		<h2 class="current_location_1">当前位置：<a href="<?php echo ($site["site_url"]); ?>">首页</a> &gt; <a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname["url"]); ?>"><?php echo ($cname["name"]); ?></a> &gt; <a href="<?php echo ($site["site_url"]); ?>/<?php echo ($subname["url"]); ?>"><?php echo ($subname["name"]); ?></a></h2>

			<div class="content cl mr-30">
					<ul class="productlist">
				<?php if(is_array($lists)): foreach($lists as $key=>$v): ?><li>
						  <a href="<?php echo ($site["site_url"]); ?>/show-<?php echo ($cid); ?>-<?php echo ($eqid); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>" alt="<?php echo ($v["title"]); ?>">
						  <img src="<?php echo ($site["site_url"]); ?>/<?php echo ($v["image"]); ?>" class="f-l">
						  </a>
						  <a href="<?php echo ($site["site_url"]); ?>/show-<?php echo ($cid); ?>-<?php echo ($eqid); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>" alt="<?php echo ($v["title"]); ?>" class="f-l"><?php echo ($v["title"]); ?></a><br>
						  <p><?php echo ($v["description"]); ?></p>
						  <span><b><?php echo (date('d',$v["time"])); ?></b><br><div class="line"></div><?php echo (date('m',$v["time"])); ?>月</span>
					  </li><?php endforeach; endif; ?>
					</ul>
			</div>
			<div class="pagination cl mb-20 mt-20"><?php echo ($page); ?></div>

		</div>
	</div>
</section>
 
<section id="share" class="container cl mt-10" >
	<div class="panel panel-primary" >
		<div class="panel-body ">
			<div class="f-18 cl">
			<b class="f-l">友情链接：</b>
				<div class="jiathis_style_24x24 Hui-share cl">
					<a class="jiathis_button_weixin Hui-iconfont">&#xe694;</a>
					<a class="jiathis_button_cqq Hui-iconfont">&#xe67b;</a>
					<a class="jiathis_button_tqq Hui-iconfont">&#xe6d9;</a>
					<a class="jiathis_button_tsina Hui-iconfont">&#xe6da;</a>
					<a class="jiathis_button_qzone Hui-iconfont">&#xe6c8;</a>
					<a class="jiathis_button_douban Hui-iconfont">&#xe67c;</a>
					<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis Hui-iconfont" target="_blank">&#xe715;</a>
					<a class="jiathis_counter_style"></a>
				</div>
			</div>
			<p class="links">
			<?php if(is_array($yq)): foreach($yq as $key=>$v): ?><a href="<?php echo ($v["url"]); ?>" alt="<?php echo ($v["title"]); ?>" title="<?php echo ($v["title"]); ?>" target="_blank"><?php echo ($v["name"]); ?></a><?php endforeach; endif; ?>
			</p>
			<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
		</div>
	</div>		
</section>
	<div class="navbar navbar-blue mt-10">
		<div class="container cl">
			<div class="footnav">
				<a href="<?php echo ($site["site_url"]); ?>/about-6-40.html">招生简章</a>
				<a href="<?php echo ($site["site_url"]); ?>/about-6-42.html">入学须知</a>
				<a href="<?php echo ($site["site_url"]); ?>/about-1-21.html">关于我们</a>
				<a href="<?php echo ($site["site_url"]); ?>/about-7-46.html" >联络方式 </a>
				<a href="<?php echo ($site["site_url"]); ?>/about-7-48.html">交通地图</a>
			</div>
		</div>
	</div>

<footer class="footer cl">

	<div class="container text-c">
		<p><?php echo ($site["site_foot"]); ?></p>
		<p><?php echo ($site["site_count"]); ?></p>
	</div>
</footer>

<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/bootstrap-Switch/bootstrapSwitch.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/Validform/5.3.2/Validform.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/Validform/5.3.2/passwordStrength-min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/jquery.SuperSlide/2.1.1/jquery.SuperSlide.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.fixed.1.5.1.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/gotop.js"></script>
<script language="javascript">
$(function(){
	$('.on').click(function(){
		$(".boxgz").toggle();
	});
	
	$("#fixedBox").fix({
		position 		: "<?php echo ($set["pos"]); ?>",	
		horizontal  	: 0,		
		vertical    	: <?php echo ($set["mtop"]); ?>,		
		halfTop     	: false,	
		minStatue 		: <?php echo ($set["min"]); ?>,	
		hideCloseBtn 	: false,	
		skin 			: "<?php echo ($set["skin"]); ?>",	
		showBtnWidth 	: "<?php echo ($set["btnwidth"]); ?>",       
		contentBoxWidth : "<?php echo ($set["boxwidth"]); ?>", 		
		durationTime 	: "<?php echo ($set["speed"]); ?>"		
	});
	
});
</script>
<div class="fixed_box" id="fixedBox">
    <div class="content_box">
        <div class="content_inner">
        	<div class="close_btn"><a title="关闭"><span>关闭</span></a></div>
            <div class="content_title"><span>客服中心</span></div>
            <div class="content_list">            	
                <div class="qqserver">
				<?php if(is_array($qq)): foreach($qq as $key=>$v): ?><p>                              
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo ($v["qq"]); ?>&amp;site=qq&amp;menu=yes">
                          <img border="0" src="http://wpa.qq.com/pa?p=2:800015936:41" alt="<?php echo ($v["keys"]); ?>" title="<?php echo ($v["keys"]); ?>">
                          <span><?php echo ($v["title"]); ?></span>
                    	</a>
                    </p><?php endforeach; endif; ?>
                </div>               
                <hr>
                <div class="phoneserver">
                    <h5>客户服务热线</h5>
                    <p><?php echo ($site["site_tel"]); ?></p>
                    <p style="min-height:140px"><?php echo ($weixin); ?></p>
                </div>
            </div>
            <div class="content_bottom"></div>
        </div>
    </div>
    <div class="show_btn"><span>展开客服</span></div>
</div>

<div style="display: none;" id="rocket-to-top">
<div style="opacity:0;display: block;" class="level-2"></div>
<div class="level-3"></div>
</div>

</body>
</html>