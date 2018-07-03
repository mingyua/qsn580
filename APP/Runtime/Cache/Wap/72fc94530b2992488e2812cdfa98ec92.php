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
				<h1 class="mui-title"><img src="<?php echo ($logo); ?>" height="40" /></h1> </header>
			<div id="offCanvasContentScroll" class="mui-content mui-scroll-wrapper">
				<div class="mui-scroll">
					<div class="mui-content bg-white">
	
	<div class="mui-content mb-15">
		<!--slider start-->
		<div class="mui-slider">
		  <div class="mui-slider-group">
		  	<?php if(is_array($slist)): $i = 0; $__LIST__ = $slist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="mui-slider-item"><a href="#"><img src="<?php echo ($v); ?>" height="180" /></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
		  </div>
		</div>	
		<!--slider end-->
		
	</div>
		<h1 class="titlebar">
			<a href="<?php echo U('index/about');?>" class="my-title-l">学校简介</a>
			<a href="<?php echo U('index/about');?>" class="my-title-r">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School Profile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>			
		</h1>	
	<div class="mui-content-padded c-main" style="margin: 10px;">
		<?php echo ($about["description"]); ?>
	</div>
	<br>

		<h1 class="titlebar">
			<a href="<?php echo U('index/news',array('kinds'=>3));?>" class="my-title-l">校园环境</a>
			<a href="<?php echo U('index/news',array('kinds'=>3));?>" class="my-title-r">&nbsp;Campus Environment</a>			
		</h1>
	<p class="mui-content-padded c-main">
		<div class="picMarquee-left">
			<div class="bd">
				<ul class="picList">
		  		<?php if(is_array($evment)): $i = 0; $__LIST__ = $evment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
						<div class="pic"><a href="<?php echo U('index/show',array('kinds'=>$v['kinds'],'id'=>$v['id']));?>" target="_self"><img src="<?php echo ($v["pic"]); ?>" /></a></div>
						<div class="title"><a href="<?php echo U('index/show',array('kinds'=>$v['kinds'],'id'=>$v['id']));?>" target="_self"><?php echo ($v["title"]); ?></a></div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
					
				</ul>
			</div>
		</div>

	</p>
	<br>

		<h1 class="titlebar">
			<a href="<?php echo U('index/course');?>" class="my-title-l">相关课程</a>
			<a href="<?php echo U('index/course');?>" class="my-title-r">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Related Courses&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>			
		</h1>
	<div class="mui-content c-main">
	<ul class="bg-white">
    <div class="mui-row" >
    	<?php if(is_array($course)): $i = 0; $__LIST__ = $course;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="mui-col-sm-6 mui-col-xs-6" style="padding-right: 5px;">       	
            <a class="" href="<?php echo U('index/course',array('kinds'=>$v['id']));?>">
            <li class="boxshadow">
            	               
                    <img src="<?php echo ($v["pic"]); ?>" width="100%" height="180"/>  
					<p class="titles"><?php echo ($v["name"]); ?></p> 
            </li>
            </a>
            
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
</ul>
	</div>
	<br>
		<h1 class="titlebar">
			<a href="<?php echo U('index/cases');?>" class="my-title-l">成功案例</a>
			<a href="<?php echo U('index/cases');?>" class="my-title-r">&nbsp;&nbsp;&nbsp;&nbsp;Successful Cases&nbsp;&nbsp;&nbsp;&nbsp;</a>			
		</h1>

	<div class="mui-content bg-white" >
		<div class="mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
		    <a class="mui-control-item mui-active" href="#item1">叛逆厌学</a>
		    <a class="mui-control-item" href="#item2">贪玩早恋</a>
		    <a class="mui-control-item" href="#item3">沉迷游戏</a>
		    <a class="mui-control-item" href="#item4">其它问题</a>
		</div>
		<div id="item1" class="mui-control-content mui-active">
			<ul class="mui-table-view">
				<?php if(is_array($case1)): $i = 0; $__LIST__ = $case1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="mui-table-view-cell mui-media">
			        <a href="<?php echo U('index/show',array('kinds'=>$v['kinds'],'id'=>$v['id']));?>">
			            <img class="mui-pull-left mr-10" src="<?php echo ($v["pic"]); ?>" width="100" height="100">
			            <div class="mui-media-body mui-ellipsis c-title">
			                <?php echo ($v["title"]); ?><p class='mui-ellipsis-2 f-12 mt-10' style="height: 60px;overflow: hidden;"><?php echo ($v["description"]); ?></p>			                
			            </div>	
			            
			        </a>			        
			    </li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div id="item2" class="mui-control-content">
			<ul class="mui-table-view">
				<?php if(is_array($case2)): $i = 0; $__LIST__ = $case2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="mui-table-view-cell mui-media">
			        <a href="<?php echo U('index/show',array('kinds'=>$v['kinds'],'id'=>$v['id']));?>">
			            <img class="mui-pull-left mr-10" src="<?php echo ($v["pic"]); ?>" width="100" height="100">
			            <div class="mui-media-body mui-ellipsis c-title">
			                <?php echo ($v["title"]); ?><p class='mui-ellipsis-2 f-12 mt-10' style="height: 60px;overflow: hidden;"><?php echo ($v["description"]); ?></p>			                
			            </div>	
			            
			        </a>			        
			    </li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		
		</div>
		<div id="item3" class="mui-control-content">
			<ul class="mui-table-view">
				<?php if(is_array($case3)): $i = 0; $__LIST__ = $case3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="mui-table-view-cell mui-media">
			        <a href="<?php echo U('index/show',array('kinds'=>$v['kinds'],'id'=>$v['id']));?>">
			            <img class="mui-pull-left mr-10" src="<?php echo ($v["pic"]); ?>" width="100" height="100">
			            <div class="mui-media-body mui-ellipsis c-title">
			                <?php echo ($v["title"]); ?><p class='mui-ellipsis-2 f-12 mt-10' style="height: 60px;overflow: hidden;"><?php echo ($v["description"]); ?></p>			                
			            </div>	
			            
			        </a>			        
			    </li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		
		
		</div>
		<div id="item4" class="mui-control-content">
			<ul class="mui-table-view">
				<?php if(is_array($case4)): $i = 0; $__LIST__ = $case4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="mui-table-view-cell mui-media">
			        <a href="<?php echo U('index/show',array('kinds'=>$v['kinds'],'id'=>$v['id']));?>">
			            <img class="mui-pull-left mr-10" src="<?php echo ($v["pic"]); ?>" width="100" height="100">
			            <div class="mui-media-body mui-ellipsis c-title">
			                <?php echo ($v["title"]); ?><p class='mui-ellipsis-2 f-12 mt-10' style="height: 60px;overflow: hidden;"><?php echo ($v["description"]); ?></p>			                
			            </div>	
			            
			        </a>			        
			    </li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>		
		
		</div>
	</div>
	<br>
		<h1 class="titlebar">
			<a href="<?php echo U('index/team');?>" class="my-title-l">师资团队</a>
			<a href="<?php echo U('index/team');?>" class="my-title-r">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teacher`s Team&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>			
		</h1>

	<div class="mui-content c-main">
		<div class="picMarquee-left">
			<div class="bd">
				<ul class="picList">
					<?php if(is_array($team)): $i = 0; $__LIST__ = $team;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
						<div class="pic"><a href="<?php echo U('index/show',array('kinds'=>$v['kinds'],'id'=>$v['id']));?>" target="_self"><img src="<?php echo ($v["pic"]); ?>" /></a></div>
						<div class="title"><a href="<?php echo U('index/show',array('kinds'=>$v['kinds'],'id'=>$v['id']));?>" target="_self"><?php echo ($v["title"]); ?></a></div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>

	</div>
	<br>
		<h1 class="titlebar">
			<a href="<?php echo U('index/news');?>" class="my-title-l">新闻资讯</a>
			<a href="<?php echo U('index/news');?>" class="my-title-r">New And Information</a>			
		</h1>
	<p class="mui-content-padded c-main">
		<ul class="mui-table-view">
			<?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="<?php echo U('index/show',array('kinds'=>$v['kinds'],'id'=>$v['id']));?>" target="_self">
		    <li class="mui-table-view-cell mui-ellipsis"><i class="mui-icon mui-icon-paperplane"></i><?php echo ($v["title"]); ?></li>
		   </a><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>

	</p>
	<br>
		<h1 class="titlebar">
			<a href="<?php echo U('index/contact');?>" class="my-title-l">联系我们</a>
			<a href="<?php echo U('index/contact');?>" class="my-title-r">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>			
		</h1>
	<div class="mui-content bg-white">
	    <div class="mui-row">
	        <div class="mui-col-sm-7 mui-col-xs-7">
	            <li class="mui-table-view-cell ">
	            	<p class="c-main">电话：<?php echo ($site["site_tel"]); ?></p>
	            	<p class="c-main">微信：<?php echo ($wxname); ?></p>
	            	<p class="c-main">QQ：<?php echo ($qq["0"]); ?></p>
	            	<p class="c-main">地址：<?php echo ($site["site_addr"]); ?></p>
	            </li>
	        </div>
	        <div class="mui-col-sm-5 mui-col-xs-5 mui-text-right">
	            	<img src="<?php echo ($wx); ?>" width="120"/>
	            
	        </div>
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
 mui.init( { gestureConfig:{
   tap: true, //默认为true
   doubletap: true, //默认为false
   longtap: true, //默认为false
   swipe: true, //默认为true
   drag: true, //默认为true
   hold:true,//默认为false，不监听
   release:false//默认为false，不监听
  }});
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