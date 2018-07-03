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
<title>我的桌面</title>
</head>
<body>
<div class="admin pd-20">
  <p class="f-20 text-success"><?php echo ($user['username']); ?>欢迎使用WPK <span class="f-14">V1.5.0</span>后台管理系统</p>
  <p>上次登录IP：<?php echo ($_SESSION['loginip']); ?>(<?php echo ($loginfo[0][0]); ?>-<?php echo ($loginfo[0][1]); ?>-<?php echo ($loginfo[0][2]); ?>)  上次登录时间：<?php echo ($_SESSION['logintime']); ?></p>
  <table class="table table-border table-bordered table-bg">
    <thead>
      <tr>
        <th colspan="7" scope="col">信息统计</th>
      </tr>
      <tr class="text-c">
        <th>统计</th>
        <th>资讯库</th>
        <th>图片库</th>
        <th>产品库</th>
        <th>用户</th>
        <th>管理员</th>
      </tr>
    </thead>
    <tbody>
      <tr class="text-c">
        <td>总数</td>
        <td><?php echo ($acount); ?></td>
        <td><?php echo ($piccount); ?></td>
        <td><?php echo ($pcount); ?></td>
        <td><?php echo ($vip); ?></td>
        <td><?php echo ($pcount); ?></td>
      </tr>
      <tr class="text-c">
        <td>今日</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr class="text-c">
        <td>昨日</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr class="text-c">
        <td>本周</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr class="text-c">
        <td>本月</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
    </tbody>
  </table>
  <table class="table table-border table-bordered table-bg mt-20">
    <thead>
      <tr>
        <th colspan="2" scope="col">服务器信息</th>
      </tr>
    </thead>
    <tbody>
		<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
			<th width="200"><?php echo ($key); ?></th>
			<td><?php echo ($v); ?></td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		<tr>
			<th width="200">客服热线</th>
			<td>18798075208（有关更多信息请访问HTTP:WWW.WXAPPJZ.COM）</td>
		</tr>
    </tbody>
  </table>
</div>
<footer class="footer">
  <p>
    本后台系统由<a href="http://www.wxappjz.com/" target="_blank" title="微皮客">微皮客提供</a></p>
</footer>
<script src="__PUBLIC__/js/jquery.min.js"></script>

        <script type="text/javascript">
var time_current = (new Date()).valueOf(); //获取当前时间 
$(function() { 
    var dateTime = new Date(); 
    var difference = dateTime.getTime() - time_current; 
 
    setInterval(function() { 
        $(".endtime").each(function() { 
            var obj = $(this); 
            var endTime = new Date(parseInt(obj.attr('value')) * 1000); 
            var nowTime = new Date(); 
            var nMS = endTime.getTime() - nowTime.getTime() + difference; 
            var myD = Math.floor(nMS / (1000 * 60 * 60 * 24)); 
            var myH = Math.floor(nMS / (1000 * 60 * 60)) % 24; 
            var myM = Math.floor(nMS / (1000 * 60)) % 60; 
            var myS = Math.floor(nMS / 1000) % 60; 
            var myMS = Math.floor(nMS / 100) % 10; 
            if (myD >= 0) { 
                var str = myD + "天" + myH + "小时" + myM + "分" + myS + "." + myMS + "秒"; 
            } else { 
                var str = "已结束！"; 
            } 
            obj.html(str); 
        }); 
    }, 
    100); 
});        </script>


</body>
</html>