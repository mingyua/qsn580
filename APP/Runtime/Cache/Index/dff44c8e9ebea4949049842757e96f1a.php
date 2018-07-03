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

<section id="slide" class=" cl">
<div id="slider-3">
	<div class="slider">
		<div class="bd">
			<ul>
				<?php if(is_array($slide)): foreach($slide as $key=>$v): ?><li><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($v["url"]); ?>" target="_blank"><img src="<?php echo ($v["pic"]); ?>" ></a></li><?php endforeach; endif; ?>
			</ul>
		</div>
		<ol class="hd cl rectangle">
				<?php if(is_array($slide)): foreach($slide as $key=>$v): ?><li>1</li><?php endforeach; endif; ?>
		</ol>
	</div>
</div>	
</section>
<section id="aboutindex" class="container cl mt-10">
	<div class="row cl responsive">
		<div class="col-8 f-l pr-5">
			<div class="panel panel-primary">
				<div class="panel-header"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname["url"]); ?>" class="f-l"><?php echo ($cname["name"]); ?></a><span class="more"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname["url"]); ?>" title="更多" alt="更多" class="f-l">+</a></span></div>
				<div class="panel-body ">
					<img src="<?php echo ($site["site_url"]); ?>/<?php echo ($about["pic"]); ?>" class="f-l mr-10">
					<div class="about"><?php echo ($about["description"]); ?></div>
				</div>
			</div>		
		</div>
		<div class="col-4 f-l pl-5">
			<div class="panel panel-primary">
				<div class="panel-header"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname1["url"]); ?>" alt="新闻资讯" class="f-l"><?php echo ($cname1["name"]); ?></a><span class="more"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname1["url"]); ?>"  title="更多" alt="更多"  class="f-l">+</a></span></div>
				<div class="panel-body">
					<ul id="lists">
					<?php if(is_array($newslist)): foreach($newslist as $key=>$v): ?><li><a href="show-5-<?php echo ($v["kinds"]); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>" alt="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>		
		</div>
	</div>
</section>

<section id="indexrow3" class="container cl mt-10">
	<div class="row cl responsive">
		<div class="col-4 f-l pr-5">
			<div class="panel panel-primary">
				<div class="panel-header"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname31["url"]); ?>" alt="父母课堂" class="f-l"><?php echo ($cname31["name"]); ?></a><span class="more"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname31["url"]); ?>"  title="更多" alt="更多"  class="f-l">+</a></span></div>
				<div class="panel-body">
					<ul id="lists">
					<?php if(is_array($rows31)): foreach($rows31 as $key=>$v): ?><li><a href="show-6-<?php echo ($v["kinds"]); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>" alt="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>		
		</div>
		<div class="col-4 f-l pl-5 pr-5">
			<div class="panel panel-primary">
				<div class="panel-header"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname32["url"]); ?>"  alt="教学特色" class="f-l"><?php echo ($cname32["name"]); ?></a><span class="more"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname32["url"]); ?>" title="更多" alt="更多" class="f-l">+</a></span></div>
				<div class="panel-body">
					<ul id="lists">
					<?php if(is_array($rows32)): foreach($rows32 as $key=>$v): ?><li><a href="show-3-<?php echo ($v["kinds"]); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>" alt="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>		
		</div>
		<div class="col-4 f-l pl-5 ">
			<div class="panel panel-primary">
				<div class="panel-header"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname33["url"]); ?>"  alt="疑问解答" class="f-l"><?php echo ($cname33["name"]); ?></a><span class="more"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname33["url"]); ?>" title="更多" alt="更多" class="f-l">+</a></span></div>
				<div class="panel-body">
					<ul id="lists">
					<?php if(is_array($rows33)): foreach($rows33 as $key=>$v): ?><li><a href="show-6-<?php echo ($v["kinds"]); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>" alt="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>		
		</div>
	</div>
</section>
<section id="ad" class="container cl mt-10 box-shadow" >
<?php if(is_array($ad)): foreach($ad as $key=>$v): ?><a href="<?php echo ($v["url"]); ?>" target="_blank"><img src="<?php echo ($v["pic"]); ?>" width="100%"></a><?php endforeach; endif; ?>
</section>
<section id="indexrow4" class="container cl mt-10">
	<div class="row cl responsive">
		<div class="col-3 f-l  pr-5">
			<div class="panel panel-primary">
				<div class="panel-header"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname41["url"]); ?>"  alt="叛逆教育" class="f-l"><?php echo ($cname41["name"]); ?></a><span class="more"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname41["url"]); ?>" title="更多" alt="更多" class="f-l">+</a></span></div>
				<div class="panel-body">
					<ul id="lists">
					<?php if(is_array($rows41)): foreach($rows41 as $key=>$v): ?><li><a href="show-2-<?php echo ($v["kinds"]); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>" alt="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>		
		</div>
		<div class="col-3 f-l pl-5 pr-5">
			<div class="panel panel-primary">
				<div class="panel-header"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname42["url"]); ?>"  alt="戒除网瘾" class="f-l"><?php echo ($cname42["name"]); ?></a><span class="more"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname42["url"]); ?>" title="更多" alt="更多" class="f-l">+</a></span></div>
				<div class="panel-body">
					<ul id="lists">
					<?php if(is_array($rows42)): foreach($rows42 as $key=>$v): ?><li><a href="show-2-<?php echo ($v["kinds"]); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>" alt="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>		
		</div>
		<div class="col-3 f-l pl-5 pr-5">
			<div class="panel panel-primary">
				<div class="panel-header"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname43["url"]); ?>"  alt="厌学早恋" class="f-l"><?php echo ($cname43["name"]); ?></a><span class="more"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname43["url"]); ?>" title="更多" alt="更多" class="f-l">+</a></span></div>
				<div class="panel-body">
					<ul id="lists">
					<?php if(is_array($rows43)): foreach($rows43 as $key=>$v): ?><li><a href="show-2-<?php echo ($v["kinds"]); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>" alt="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>		
		</div>
		<div class="col-3 f-l pl-5 ">
			<div class="panel panel-primary">
				<div class="panel-header"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname44["url"]); ?>"  alt="心理症结" class="f-l"><?php echo ($cname44["name"]); ?></a><span class="more"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname44["url"]); ?>" title="更多" alt="更多" class="f-l">+</a></span></div>
				<div class="panel-body">
					<ul id="lists">
					<?php if(is_array($rows44)): foreach($rows44 as $key=>$v): ?><li><a href="show-2-<?php echo ($v["kinds"]); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>" alt="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>		
		</div>
	</div>
</section>

<section id="indexcase" class="container cl mt-10" >
	<div class="panel panel-primary" >
		<div class="panel-header"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cnamecase["url"]); ?>" alt="成功案例" class="f-l"><?php echo ($cnamecase["name"]); ?></a><span class="more"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cnamecase["url"]); ?>" title="更多" alt="更多" class="f-l">+</a></span></div>
		<div class="panel-body">
			<div class="row cl responsive">
				<div class="col-3 f-l pr-5 pl-5">
					<img src="<?php echo ($img1["image"]); ?>" width="100%">
					<ul id="lists" class="mt-5">
					<?php if(is_array($case1)): foreach($case1 as $key=>$v): ?><li><a href="show-4-<?php echo ($v["kinds"]); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>" alt="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
				<div class="col-3 f-l pr-5 pl-5 ">
					<img src="<?php echo ($img2["image"]); ?>" width="100%">
					<ul id="lists" class="mt-5">
					<?php if(is_array($case2)): foreach($case2 as $key=>$v): ?><li><a href="show-4-<?php echo ($v["kinds"]); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>" alt="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
				<div class="col-3 f-l pr-5 pl-5 ">
					<img src="<?php echo ($img3["image"]); ?>" width="100%">
					<ul id="lists" class="mt-5">
					<?php if(is_array($case3)): foreach($case3 as $key=>$v): ?><li><a href="show-4-<?php echo ($v["kinds"]); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>" alt="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
				<div class="col-3 f-l pl-5 pr-5">
					<img src="<?php echo ($img4["image"]); ?>" width="100%">
					<ul id="lists" class="mt-5">
					<?php if(is_array($case4)): foreach($case4 as $key=>$v): ?><li><a href="show-4-<?php echo ($v["kinds"]); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>" alt="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>		
</section>

<section id="indexpic" class="container cl mt-10" >
	<div class="panel panel-primary" >
		<div class="panel-header"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cnamevideo["url"]); ?>" alt="影视风采" class="f-l"><?php echo ($cnamevideo["name"]); ?></a><span class="more"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cnamevideo["url"]); ?>" title="更多" alt="更多" class="f-l">+</a></span></div>
		<div class="panel-body">
			<div class="picMarquee-left">
			<div class="bd">
					<ul class="picList">
					<?php if(is_array($video)): foreach($video as $key=>$v): ?><li>
							<div class="pic"><a href="show-1-<?php echo ($v["kinds"]); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>"><img src="<?php echo ($v["pic"]); ?>" /></a></div>
							<div class="title"><a href="show-1-<?php echo ($v["kinds"]); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a></div>
						</li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>		
</section>

<section id="indexrow4" class="container cl mt-10">
	<div class="row cl responsive">
		<div class="col-3 f-l  pr-5">
			<div class="panel panel-primary">
				<div class="panel-header"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname421["url"]); ?>" alt="学员心声" class="f-l"><?php echo ($cname421["name"]); ?></a><span class="more"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname421["url"]); ?>" title="更多" alt="更多" class="f-l">+</a></span></div>
				<div class="panel-body">
					<ul id="lists">
					<?php if(is_array($rows421)): foreach($rows421 as $key=>$v): ?><li><a href="show-5-<?php echo ($v["kinds"]); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>" alt="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>		
		</div>
		<div class="col-3 f-l pl-5 pr-5">
			<div class="panel panel-primary">
				<div class="panel-header"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname422["url"]); ?>" alt="沟通日记" class="f-l"><?php echo ($cname422["name"]); ?></a><span class="more"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname422["url"]); ?>" title="更多" alt="更多" class="f-l">+</a></span></div>
				<div class="panel-body">
					<ul id="lists">
					<?php if(is_array($rows422)): foreach($rows422 as $key=>$v): ?><li><a href="show-5-<?php echo ($v["kinds"]); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>" alt="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>		
		</div>
		<div class="col-3 f-l pl-5 pr-5">
			<div class="panel panel-primary">
				<div class="panel-header"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname423["url"]); ?>" alt="家长反馈" class="f-l"><?php echo ($cname423["name"]); ?></a><span class="more"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname423["url"]); ?>" title="更多" alt="更多" class="f-l">+</a></span></div>
				<div class="panel-body">
					<ul id="lists">
					<?php if(is_array($rows423)): foreach($rows423 as $key=>$v): ?><li><a href="show-5-<?php echo ($v["kinds"]); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>" alt="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>		
		</div>
		<div class="col-3 f-l pl-5 ">
			<div class="panel panel-primary">
				<div class="panel-header"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname424["url"]); ?>" alt="社会案例" class="f-l">社会案例</a><span class="more"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cname424["url"]); ?>" title="更多" alt="更多" class="f-l">+</a></span></div>
				<div class="panel-body">
					<ul id="lists">
					<?php if(is_array($rows424)): foreach($rows424 as $key=>$v): ?><li><a href="show-5-<?php echo ($v["kinds"]); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>" alt="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>		
		</div>
	</div>
</section>

 <section id="indexvideo" class="container cl mt-10" >
	<div class="panel panel-primary" >
		<div class="panel-header"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cnameteam["url"]); ?>" alt="专家团队" class="f-l"><?php echo ($cnameteam["name"]); ?></a><span class="more"><a href="<?php echo ($site["site_url"]); ?>/<?php echo ($cnameteam["url"]); ?>" title="更多" alt="更多" class="f-l">+</a></span></div>
		<div class="panel-body">
			<div class="picMarquee-left">
			<div class="bd">
					<ul class="picList">
					<?php if(is_array($team)): foreach($team as $key=>$v): ?><li>
							<div class="pic"><a href="show-1-<?php echo ($v["kinds"]); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>"><img src="<?php echo ($v["pic"]); ?>" /></a></div>
							<div class="title"><a href="show-1-<?php echo ($v["kinds"]); ?>-<?php echo ($v["id"]); ?>.html" title="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></a></div>
						</li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>
		</div>
		
		</div>
	</div>		
</section>
<section id="ad" class="container cl mt-10 bg-white box-shadow" style="overflow:hidden">
<?php $m=D("single");$ret=$m->field("")->where("kinds = 56")->order("")->limit("")->select();foreach($ret as $key=>$d): echo ($d["contents"]); endforeach; ?>
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

		<script id="jsID" type="text/javascript">
		 var ary = location.href.split("&");
		jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:5,interTime:50,trigger:"click"});
		</script>

<script>

$(function(){
	jQuery("#slider-3 .slider").slide({mainCell:".bd ul",titCell:".hd li",trigger:"click",effect:"leftLoop",autoPlay:true,delayTime:500,interTime:5000,pnLoop:false,titOnClassName:"active"});
});
</script>