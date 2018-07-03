<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<title><?php echo ($site["site_title"]); ?></title>
	<script src="__WAP__/js/mui.min.js"></script>
	<link href="__WAP__/css/mui.min.css" rel="stylesheet" />
	<link href="__WAP__/css/style.css" rel="stylesheet" />
	<meta name="Keywords" content="<?php echo ($site["seo_keywords"]); ?>" />
	<meta name="Description" content="<?php echo ($site["seo_description"]); ?>" /> </head>

<body>
	<!--侧滑菜单容器-->
	<div id="offCanvasWrapper" class="mui-off-canvas-wrap mui-draggable">
		<!--菜单部分-->
		<aside id="offCanvasSide" class="mui-off-canvas-right" >
			<div id="offCanvasSideScroll" class="mui-scroll-wrapper" >
				<div  class="mui-scroll" >
					<div class="" style="height: 800px;overflow-y: auto;">											
					<ul id="menulist" class="mui-table-view mui-table-view-chevron mui-table-view-inverted" >
						<li class="mui-table-view-cell"><a href="<?php echo U('index/index');?>">网站首页</a></li>
						<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="mui-table-view-cell  <?php if(!empty($v["child"])): ?>mui-collapse<?php endif; ?>" >
							<a class="mui-navigate-right" <?php if(empty($v["child"])): ?>href="<?php echo ($v["url"]); ?>"<?php endif; ?>> <?php echo ($v["name"]); ?></a>
							<?php if(!empty($v["child"])): ?><ul class="mui-table-view mui-table-view-chevron mui-table-view-inverted" >
								<?php if(is_array($v["child"])): $i = 0; $__LIST__ = $v["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><li class="mui-table-view-cell" >
									<a class="mui-navigate-right" href="<?php echo ($d["url"]); ?>"> <?php echo ($d["name"]); ?></a>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul><?php endif; ?>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					</div>
				</div>
			</div>
		</aside>
		<div class="mui-inner-wrap">
			<header class="mui-bar mui-bar-nav" style="background: #3889C7;">
				<a class="mui-icon mui-icon-home mui-pull-left c-white" href="<?php echo U('index/index');?>"></a>
				<a id="offCanvasBtn" href="#offCanvasSide" class="mui-icon mui-action-menu mui-icon-bars mui-pull-right  c-white"></a>
				<h1 class="mui-title"><img src="__WAP__/image/logo.png" height="40" /></h1> </header>
			<div id="offCanvasContentScroll" class="mui-content mui-scroll-wrapper">
				<div class="mui-scroll">
					<div class="mui-content bg-white">
	<header class="mui-bar mui-bar-nav">
	    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
	    <h1 class="mui-title"><?php echo ($title); ?></h1>
	</header>
	<div class="mui-content bg-white">
		<ul class="mui-table-view">
			<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="mui-table-view-cell mui-media">
			        <a href="<?php echo U('index/show',array('kinds'=>$v['kinds'],'id'=>$v['id']));?>">
			            <img class="mui-pull-left mr-10" src="<?php echo ($v["pic"]); ?>" width="100" height="100">
			            <div class="mui-media-body mui-ellipsis c-title">
			                <?php echo ($v["title"]); ?><p class='mui-ellipsis-2 f-12 mt-10' style="height: 60px;overflow: hidden;"><?php echo ($v["keywords"]); ?></p>			                
			            </div>	
			            
			        </a>			        
			    </li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>	
		<div class="mui-clearfix mt-10"></div>
    	<div class="mb-10">
    		<div class="pagination"><?php echo ($page); echo ($tip); ?></div>
    	</div>
		
	</div>
	
							<div style="height:60px">&nbsp</div>	
						</div>
					</div>
				</div>
				<!-- off-canvas backdrop -->
				<div class="mui-off-canvas-backdrop"></div>
				
			</div>
			
		</div>

<nav class="mui-bar mui-bar-tab" style="background: #3889C7;color: #FFF;">
	<a class="mui-tab-item mui-active" style="color: #FFF;" href="<?php echo U('index/index');?>"> <span class="mui-icon mui-icon-undo"></span> <span class="mui-tab-label" style="font-size: 12px;">返回首页</span> </a>
	<a class="mui-tab-item" style="color: #FFF;" href="<?php echo U('index/contact',array('id'=>35));?>"> <span class="mui-icon mui-icon-paperplane"></span> <span class="mui-tab-label" style="font-size: 12px;">来校考察</span> </a>
	<a class="mui-tab-item" style="color: #FFF;" href="mqqwpa://im/chat?chat_type=wpa&uin=<?php echo ($qq["0"]); ?>&version=1" target="_blank"> <span class="mui-icon mui-icon-mic"></span> <span class="mui-tab-label" style="font-size: 12px;">在线了解</span> </a>
	<a class="mui-tab-item" style="color: #FFF;" href="tel:<?php echo ($site["site_tel"]); ?>"> <span class="mui-icon mui-icon-phone"></span> <span class="mui-tab-label" style="font-size: 12px;">电话咨询</span> </a>
</nav>
	
</body>
    <script src="__WAP__/js/jquery.min.js"></script>
    <script src="__WAP__/js/jquery.SuperSlide.2.1.1.js"></script>
    
<script type="text/javascript">
	window.onload = function(){
	      	mui('#offCanvasSideScroll').scroll();  
			mui('#offCanvasContentScroll').scroll(); 			
		}
	
	mui('body').on('tap','a',function(){
    // 获取地址
    var href = this.getAttribute('href');
    // 方法一：
    if(href){
    	location.href = href;
    }
     
    // 方法二：
	}) 
	var gallery = mui('.mui-slider');
	gallery.slider({
	  interval:5000//自动轮播周期，若为0则不自动播放，默认为0；
	});
	mui.init({
		swipeBack:true //启用右滑关闭功能
	});
	(function($) {
		$('#scroll').scroll({
			indicators: true //是否显示滚动条
		});
	})(mui);	
	mui(".mui-bar").on('tap', 'a', function() {
		window.location.href = this.href;
	})
	$(function() {
		$(".ke-title,.ke-nav2 ul").click(function() {
			$(".ke-nav2").toggle()
		});
		$(window).resize(function() {
			$('.ke-nav2').attr('style', function(i, style) {
				return style.replace(/display[^;]+;?/g, '')
			})
		})
	})

</script>

	<script id="jsID" type="text/javascript">
		jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:3,interTime:50,opp:false,trigger:"click"});	
		 
		
		</script>
</html>